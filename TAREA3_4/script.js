function validar() {
    let numero = document.getElementById("numero").value;

    if (numero === "") {
        alert("Por favor ingresa un número");
        return false;
    }

    if (numero < 1 || numero > 10) {
        alert("El número debe estar entre 1 y 10");
        return false;
    }

    return true;
}
