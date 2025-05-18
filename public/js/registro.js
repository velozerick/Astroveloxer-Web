// Fondo de estrellas
document.addEventListener("DOMContentLoaded", function () {
    const starContainer = document.querySelector(".stars");
    const numStars = 150;

    for (let i = 0; i < numStars; i++) {
        let star = document.createElement("div");
        star.className = "star";
        star.style.top = `${Math.random() * 100}vh`;
        star.style.left = `${Math.random() * 100}vw`;
        star.style.animationDuration = `${Math.random() * 5 + 2}s`;
        starContainer.appendChild(star);
    }
});

// Mostrar/ocultar contraseña
function togglePassword() {
    const passwordField = document.getElementById("contrasena");
    const toggleIcon = document.getElementById("togglePassword");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    const nombreInput = document.querySelector("input[name='nombre']");
    const emailInput = document.querySelector("input[name='email']");
    const passwordInput = document.querySelector("input[name='contrasena']");

    form.addEventListener("submit", (e) => {
        const nombre = nombreInput.value.trim();
        const email = emailInput.value.trim();
        const password = passwordInput.value;

        const nombreRegex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Validación del nombre
        if (!nombreRegex.test(nombre)) {
            alert("El nombre solo debe contener letras y espacios.");
            e.preventDefault();
            return;
        }

        if (nombre.length < 3 || nombre.length > 50) {
            alert("El nombre debe tener entre 3 y 50 caracteres.");
            e.preventDefault();
            return;
        }

        // Validación del email
        if (!emailRegex.test(email)) {
            alert("Por favor ingresa un correo electrónico válido.");
            e.preventDefault();
            return;
        }

        // Validación de la contraseña
        if (password.length < 6) {
            alert("La contraseña debe tener al menos 6 caracteres.");
            e.preventDefault();
            return;
        }
    });
});
