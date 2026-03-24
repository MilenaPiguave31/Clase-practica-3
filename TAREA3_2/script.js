document.getElementById("formulario").addEventListener("submit", function(e) {

    let nombre = document.getElementById("nombre").value.trim();
    let correo = document.getElementById("correo").value.trim();
    let mensaje = document.getElementById("mensaje").value.trim();

    if (nombre === "" || correo === "" || mensaje === "") {
        alert("Todos los campos son obligatorios");
        e.preventDefault();
        return;
    }

    // Validación de correo
    let regexCorreo = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;

    if (!regexCorreo.test(correo)) {
        alert("Ingrese un correo válido");
        e.preventDefault();
        return;
    }
});
