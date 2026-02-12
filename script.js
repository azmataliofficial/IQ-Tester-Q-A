document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       MOBILE MENU TOGGLE
    ========================== */
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    if (menuToggle && navLinks) {
        menuToggle.addEventListener("click", function (e) {
            e.stopPropagation(); // outside click se bachane ke liye
            navLinks.classList.toggle("active");
        });
    }

    /* =========================
       CLOSE MENU ON OUTSIDE CLICK
    ========================== */
    document.addEventListener("click", function (e) {
        if (navLinks && !e.target.closest(".nav-bar")) {
            navLinks.classList.remove("active");
        }
    });

    /* =========================
       SMOOTH SCROLL
    ========================== */
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener("click", function (e) {
            const targetId = this.getAttribute("href");
            const targetEl = document.querySelector(targetId);

            if (targetEl) {
                e.preventDefault();
                targetEl.scrollIntoView({
                    behavior: "smooth"
                });

                // mobile menu auto close
                if (navLinks) {
                    navLinks.classList.remove("active");
                }
            }
        });
    });

    /* =========================
       PASSWORD SHOW / HIDE
    ========================== */
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    if (togglePassword && passwordInput) {
        togglePassword.addEventListener("click", function () {
            passwordInput.type =
                passwordInput.type === "password" ? "text" : "password";
        });
    }

});