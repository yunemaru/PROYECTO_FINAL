<?php
session_start();
if(isset($_SESSION["usuario"])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mar.css">
    <title>Subir archivos al servidor</title>
</head>
<body>
    <div class="Archivos">
        <h1>Subir archivos</h1>

        <form action="subir_archivos.php" enctype="multipart/form-data" method="post">
            <input type="file" name="archivo" id="">
            <br>
            <input type="submit" value="Enviar">
        </form>

        <!-- Botón para cerrar sesión -->
        <form action="cerrar_sesion.php" method="post">
            
            <input type="submit" value="Cerrar sesión">
        </form>
    </div>

   
</center>
</body>
</html>

<?php
} else {
    header("Location: login.php");
}
?>

