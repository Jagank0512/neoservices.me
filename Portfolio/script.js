/* -----------------------------------------
   SCROLL REVEAL ANIMATIONS
------------------------------------------ */
function reveal() {
    const reveals = document.querySelectorAll(".reveal");

    reveals.forEach((element) => {
        const windowHeight = window.innerHeight;
        const revealTop = element.getBoundingClientRect().top;
        const revealPoint = 200;

        if (revealTop < windowHeight - revealPoint) {
            element.classList.add("active");
        }
    });
}

window.addEventListener("scroll", reveal);
reveal(); // Initial load animation


document.getElementById("hamburger").addEventListener("click", () => {
    const menu = document.getElementById("mobileMenu");
    menu.style.display = menu.style.display === "block" ? "none" : "block";
});



/* -----------------------------------------
   EMAILJS CONTACT FORM
------------------------------------------ */
document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault();

    emailjs.send("service_Jagan.webdev", "template_djehc7p", {
            name: document.getElementById("name").value,
            email: document.getElementById("email").value,
            message: document.getElementById("message").value,
            time: new Date().toLocaleString()
        })
        .then(() => {
            alert("Your message has been sent successfully!");
            document.getElementById("contactForm").reset();
        })
        .catch((error) => {
            alert("Message sending failed. Please try again.");
            console.error("EmailJS Error:", error);
        });
});


/* -----------------------------------------
   HERO TEXT SMOOTH FADE-IN
------------------------------------------ */
window.addEventListener("load", () => {
    // const heroText = document.querySelector(".hero-title");
    const underline = document.querySelector(".hero-underline");
    const buttons = document.querySelector(".hero-buttons");

    // setTimeout(() => { herotext.style.opacity = "1"; herotext.style.transform = "translateY(0)"; }, 200);
    setTimeout(() => { underline.style.opacity = "1"; }, 600);
    setTimeout(() => { buttons.style.opacity = "1"; buttons.style.transform = "translateY(0)"; }, 900);
});



// About section stagger animation
const aboutSection = document.querySelector(".about");
const aboutDesc = document.querySelector(".about-description");

window.addEventListener("scroll", () => {
    const rect = aboutSection.getBoundingClientRect();
    if (rect.top < window.innerHeight - 150) {
        aboutSection.classList.add("active");
    }
});


// Soft floating animation for About Me chips
document.querySelectorAll(".skill-float").forEach((chip) => {
    let x = Math.random() * 20 - 10;
    let y = Math.random() * 20 - 10;

    setInterval(() => {
        chip.style.transform = `translate(${x}px, ${y}px)`;
        x = Math.random() * 20 - 10;
        y = Math.random() * 20 - 10;
    }, 3000);
});

// Parallax hover for banners
document.querySelectorAll(".service-banner").forEach(banner => {
    banner.addEventListener("mousemove", (e) => {
        const rect = banner.getBoundingClientRect();
        const x = (e.clientX - rect.left - rect.width / 2) / 25;
        banner.style.transform = `translateY(-10px) translateX(${x}px)`;
    });

    banner.addEventListener("mouseleave", () => {
        banner.style.transform = "translateY(0)";
    });
});

// Simple reveal animation on scroll
document.querySelectorAll(".project-card").forEach(card => {
    card.classList.add("reveal");
});





