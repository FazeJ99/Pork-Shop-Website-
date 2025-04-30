document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector("header");
    const hamburgerBtn = document.querySelector("#hamburger-btn");
    const closeMenuBtn = document.querySelector("#close-menu-btn");
    const showPopupBtn = document.querySelector(".login-btn");
    const formPopup = document.querySelector(".form-popup");
    const hidePopupBtn = formPopup ? formPopup.querySelector(".close-btn") : null;
    const signupLoginLink = formPopup ? formPopup.querySelectorAll(".bottom-link a") : [];

    if (hamburgerBtn && header) {
        hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));
    }

    if (closeMenuBtn && hamburgerBtn) {
        closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
    }

    if (showPopupBtn) {
        showPopupBtn.addEventListener("click", () => {
            document.body.classList.toggle("show-popup");
        });
    }

    if (hidePopupBtn && showPopupBtn) {
        hidePopupBtn.addEventListener("click", () => showPopupBtn.click());
    }

    signupLoginLink.forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            if (formPopup) {
                formPopup.classList[link.id === 'signup-link' ? 'add' : 'remove']("show-signup");
            }
        });
    });
});
