const imagenes = document.querySelectorAll(".imagen");
const modal = document.getElementById("modal");
const imagenGrande = document.getElementById("imagenGrande");
const cerrar = document.getElementById("cerrar");

imagenes.forEach(img => {
    img.addEventListener("click", () => {
        modal.style.display = "block";
        imagenGrande.src = img.src;
    });
});

cerrar.addEventListener("click", () => {
    modal.style.display = "none";
});
