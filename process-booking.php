<?php
/**
 * Neo Services - Booking Processor (Backend Automation)
 * 
 * Logic:
 * 1. Sanitizes input
 * 2. Sends Email to Admin
 * 3. Sends WhatsApp Notification to Admin (Server-side)
 * 4. Returns Success JSON
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize Inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $service = filter_var($_POST['service'], FILTER_SANITIZE_STRING);
    $date = isset($_POST['date']) ? filter_var($_POST['date'], FILTER_SANITIZE_STRING) : 'Not Specified';
    $extra = isset($_POST['extra_details']) ? filter_var($_POST['extra_details'], FILTER_SANITIZE_STRING) : '';
    
    // Admin Phone Number (Where to receive WhatsApp alerts)
    $admin_phone = "+91 8300172478"; 

    // 2. Prepare Message Content (Plain Text Format)
    $message_text = "Name: $name\n" . 
                    "Phone: $phone\n" . 
                    "Service: $service\n";
    
    if(!empty($extra)) {
        $message_text .= "Details: $extra\n";
    }
                    
    $message_text .= "Date: $date";

    // 3. Send WhatsApp via CallMeBot (Free API)
    // You MUST get your API Key: Message "I allow callmebot to send me messages" to +34 644 66 32 62 on WhatsApp
    $api_key = "REPLACE_WITH_YOUR_API_KEY"; // <--- PASTE YOUR API KEY HERE
    
    $api_result = sendWhatsAppMessage($admin_phone, $message_text, $api_key);

    // 4. Send Email (Backup)
    $to = "jagank0512@gmail.com";
    $subject = "New Booking: $service";
    $email_body = nl2br($message_text);
    $headers = "From: no-reply@neoservices.com\r\nContent-Type: text/html;";
    @mail($to, $subject, $email_body, $headers);

    // 5. Generate WhatsApp Link for Client-side Redirect
    $wa_link = "https://wa.me/918300172478?text=" . urlencode($message_text);

    // 6. Response
    echo json_encode([
        "status" => "success", 
        "message" => "Booking confirmed!", 
        "wa_link" => $wa_link,
        "api_log" => $api_result
    ]);

} else {
    echo json_encode(["status" => "error", "message" => "Invalid Request"]);
}

/**
 * Function to send WhatsApp via CallMeBot Free API
 */
function sendWhatsAppMessage($phone, $message, $apikey) {
    if ($apikey === "REPLACE_WITH_YOUR_API_KEY") {
        return "Error: API Key not set. Please get one from CallMeBot.";
    }

    // CallMeBot API URL
    // Format number: remove spaces and + sign if present
    $phone = preg_replace('/[^0-9]/', '', $phone); 
    $encoded_message = urlencode($message);
    $url = "https://api.callmebot.com/whatsapp.php?phone=$phone&text=$encoded_message&apikey=$apikey";

    // Use CURL to send request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}
?>
