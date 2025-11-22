/* ------------------------------------
   Argil Group SPC Export Landing Page
   Author: Flipcode Solutions
   ------------------------------------ */

// Smooth scroll to section
document.addEventListener("DOMContentLoaded", function () {
    const scrollLinks = document.querySelectorAll('a[href^="#"]');
    scrollLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const targetId = link.getAttribute("href").substring(1);
            const target = document.getElementById(targetId);
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 60,
                    behavior: "smooth",
                });
            }
        });
    });
});

// Scroll animation (fade-in effect)
const fadeElements = document.querySelectorAll(".fade-in");
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("visible");
        }
    });
});
fadeElements.forEach((el) => observer.observe(el));

// Contact form submission (basic UX handling)
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("#quoteForm");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        const button = form.querySelector("button[type='submit']");
        button.disabled = true;
        button.innerText = "Submitting...";

        setTimeout(() => {
            button.disabled = false;
            button.innerText = "Submit Request";
        }, 5000);
    });
});

// Back to top button (optional)
window.addEventListener("scroll", function () {
    const topBtn = document.getElementById("backToTop");
    if (!topBtn) return;
    if (window.scrollY > 400) {
        topBtn.style.display = "block";
    } else {
        topBtn.style.display = "none";
    }
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}
