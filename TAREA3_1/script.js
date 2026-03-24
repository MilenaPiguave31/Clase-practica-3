function toggleMenu(elemento) {
    let submenu = elemento.querySelector(".submenu");

    if (submenu) {
        if (submenu.style.display === "block") {
            submenu.style.display = "none";
        } else {
            submenu.style.display = "block";
        }
    }
}
