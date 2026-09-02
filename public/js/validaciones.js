document.addEventListener("DOMContentLoaded", function () {

    const formulario = document.getElementById("formularioCliente");
    const btnNuevoCliente = document.getElementById("btnNuevoCliente");
    const formularioRegistro = document.getElementById("formularioRegistro");

    btnNuevoCliente.addEventListener("click", function () {

        formularioRegistro.classList.remove("d-none");

        formularioRegistro.scrollIntoView({
            behavior: "smooth"
        });

    });

    formulario.addEventListener("submit", function (event) {

        const nombre = document.getElementById("nombre");
        const apellido = document.getElementById("apellido");
        const correo = document.getElementById("correo");
        const telefono = document.getElementById("telefono");
        const edad = document.getElementById("edad");

        let errores = [];

        // Validar nombre
        if (nombre.value.trim() === "") {
            errores.push("El nombre es obligatorio.");
        } else if (nombre.value.trim().length < 2) {
            errores.push("El nombre debe tener al menos 2 caracteres.");
        }

        // Validar apellido
        if (apellido.value.trim() === "") {
            errores.push("El apellido es obligatorio.");
        } else if (apellido.value.trim().length < 2) {
            errores.push("El apellido debe tener al menos 2 caracteres.");
        }

        // Validar correo
        if (correo.value.trim() === "") {
            errores.push("El correo electrónico es obligatorio.");
        } else {
            const patronCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!patronCorreo.test(correo.value.trim())) {
                errores.push("Ingrese un correo electrónico válido.");
            }
        }

        // Validar teléfono
        if (telefono.value.trim() === "") {
            errores.push("El teléfono es obligatorio.");
        } else if (!/^\d+$/.test(telefono.value.trim())) {
            errores.push("El teléfono debe contener únicamente números.");
        } else if (telefono.value.trim().length !== 10) {
            errores.push("El teléfono debe tener exactamente 10 dígitos.");
        }

        // Validar edad
        if (edad.value.trim() === "") {
            errores.push("La edad es obligatoria.");
        } else if (!/^\d+$/.test(edad.value.trim())) {
            errores.push("La edad debe ser un número.");
        } else {
            const edadNumero = parseInt(edad.value);

            if (edadNumero < 18 || edadNumero > 100) {
                errores.push("La edad debe estar entre 18 y 100 años.");
            }
        }

        // Mostrar errores
        if (errores.length > 0) {

            event.preventDefault();

            alert(errores.join("\n"));
        }

    });

});

