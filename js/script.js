/* Mobile Navigation Logic Update */
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeBtn = document.querySelector('.mobile-menu-close');

    // Toggle Menu Function
    function toggleMenu() {
        if (!mobileMenu) return;
        mobileMenu.classList.toggle('active');
        if (hamburger) hamburger.classList.toggle('active');

        // Don't lock body scroll for the small popup menu style
        // document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : 'auto';
    }

    if (hamburger) hamburger.addEventListener('click', function (e) {
        e.stopPropagation();
        toggleMenu();
    });

    if (closeBtn) closeBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        toggleMenu();
    });

    // Close when clicking outside
    document.addEventListener('click', function (e) {
        if (mobileMenu && mobileMenu.classList.contains('active')) {
            if (!mobileMenu.contains(e.target) && !hamburger.contains(e.target)) {
                toggleMenu();
            }
        }
    });

    // Prevent closing when clicking inside menu (except for links that go to other pages)
    if (mobileMenu) {
        mobileMenu.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    }


});

// Robust Mobile Menu Fix
document.addEventListener('DOMContentLoaded', function () {
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobToggle = document.querySelector('.mob-toggle-btn');

    if (mobToggle) {
        // Clone the element to remove any old event listeners that might be causing issues
        const newToggle = mobToggle.cloneNode(true);
        mobToggle.parentNode.replaceChild(newToggle, mobToggle);

        newToggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation(); // STOP closing the menu
            e.stopImmediatePropagation();

            console.log('Dropdown clicked'); // Debugging

            const submenu = this.nextElementSibling;
            if (submenu) {
                // Toggle display
                if (window.getComputedStyle(submenu).display === 'none') {
                    submenu.style.display = 'block';
                    // Rotate icon
                    const icon = this.querySelector('i');
                    if (icon) icon.style.transform = 'rotate(180deg)';
                } else {
                    submenu.style.display = 'none';
                    // Rotate icon
                    const icon = this.querySelector('i');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                }
            }
        });
    }

    // Ensure clicks inside the menu do not close it
    if (mobileMenu) {
        mobileMenu.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    }
});

/* Scroll Animation Logic */
document.addEventListener('DOMContentLoaded', function () {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target); // Only animate once
            }
        });
    }, observerOptions);

    const animatedElements = document.querySelectorAll('.animate, .reveal, .fade-up');
    animatedElements.forEach(el => {
        observer.observe(el);
    });
});
