<?php
session_start();

// Verificar si el usuario ha iniciado sesión y obtener su nombre de usuario
if(isset($_SESSION['usuario'])) {
    $usuario_actual = $_SESSION['usuario'];
} else {
    // Si el usuario no ha iniciado sesión, puedes manejar esta situación de acuerdo a tu lógica de aplicación
    $usuario_actual = "Usuario Anónimo";
}

// Obtener el nombre de la imagen de la URL
$imagen = $_GET['imagen'];

// Ruta de la imagen
$ruta_imagen = "imagenes/" . $imagen;

// Obtener información de la imagen
$info = getimagesize($ruta_imagen);
$fecha_creacion = date("Y-m-d H:i:s", filectime($ruta_imagen)); // Fecha de creación
$subido_por = $usuario_actual; // Nombre de usuario que subió la imagen

$vistas = 2; // El contador de vistas inicialmente se establece en 0, puede incrementarse cada vez que alguien vea la imagen

// Mostrar los detalles de la imagen
echo "<h2>Detalles de la imagen:</h2>";
echo "<p>Nombre de la imagen: $imagen</p>";
echo "<p>Fecha de creación: $fecha_creacion</p>";
echo "<p>Subido por: $subido_por</p>";
echo "<p>Vistas: $vistas</p>";

echo "<img src='$ruta_imagen'>";
?>
