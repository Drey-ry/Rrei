// script.js
document.addEventListener("DOMContentLoaded", () => {
    
    // 1. Form Validation for DogRegister.php
    const registerForm = document.querySelector("#dogRegisterForm");
    if (registerForm) {
        registerForm.addEventListener("submit", (e) => {
            const name = document.querySelector('input[name="name"]').value.trim();
            const breed = document.querySelector('input[name="breed"]').value.trim();
            const age = document.querySelector('input[name="age"]').value.trim();
            const address = document.querySelector('input[name="address"]').value.trim();
            const color = document.querySelector('input[name="color"]').value.trim();
            const height = document.querySelector('input[name="height"]').value.trim();
            const weight = document.querySelector('input[name="weight"]').value.trim();

            if (!name || !breed || !age || !address || !color || !height || !weight) {
                e.preventDefault();
                alert("Please fill out all fields. Spaces only are not allowed.");
            }
        });
    }

    // 2. Real-time Live Searching for DogView.php
    const searchInput = document.querySelector("#dogSearchInput");
    if (searchInput) {
        searchInput.addEventListener("input", (e) => {
            const query = e.target.value.toLowerCase();
            const cards = document.querySelectorAll(".dog-card");

            cards.forEach(card => {
                const name = card.querySelector(".dog-name").textContent.toLowerCase();
                const breed = card.querySelector(".dog-breed").textContent.toLowerCase();
                const color = card.querySelector(".dog-color").textContent.toLowerCase();

                if (name.includes(query) || breed.includes(query) || color.includes(query)) {
                    card.classList.remove("hidden");
                } else {
                    card.classList.add("hidden");
                }
            });
        });
    }
});