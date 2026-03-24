<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Galería de Imágenes</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<h1>Galería de Imágenes</h1>

<div class="galeria">
    <?php
    $directorio = "galeria/";
    $extensiones_validas = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    
    if (!is_dir($directorio)) {
        echo "<p class='error'>Error: El directorio '$directorio' no existe.</p>";
        echo "<p>Por favor, crea la carpeta 'galeria' y agrega imágenes.</p>";
    } else {
        $galeria = scandir($directorio);
        $imagenes_encontradas = false;
        
        foreach ($galeria as $img) {
            if ($img != "." && $img != "..") {
                $extension = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                
                if (in_array($extension, $extensiones_validas)) {
                    echo "<img src='$directorio$img' class='imagen' alt='$img'>";
                    $imagenes_encontradas = true;
                }
            }
        }
        
        if (!$imagenes_encontradas) {
            echo "<p class='info'>No se encontraron imágenes en la carpeta 'galeria'.</p>";
            echo "<p>Agrega imágenes con extensiones: " . implode(', ', $extensiones_validas) . "</p>";
        }
    }
    ?>
</div>

<!-- Modal -->
<div id="modal" class="modal">
    <span id="cerrar">&times;</span>
    <img id="imagenGrande">
</div>

<script src="script.js"></script>

</body>
</html>