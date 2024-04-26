<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="ie=edge">
    
    <link rel="stylesheet" href="modificar_usuario.css">
    

    <title>Cambiar Contraseña</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/jamp.jpg"> 
</head>
<body>
    <section class="form-register">
        <center>
            <h4>CAMBIAR DATOS</h4>
        </center>

        <!-- El formulario apunta al script de actualización de usuario -->
        <form action="validar.php" method="post">
            
            <input class="controls" type="text" name="id_usuario" id="id_usuario" for="id_usuario" placeholder="ID">
            <input class="controls" type="text" name="user" id="user" for="user" placeholder="Nombre">
            <input class="controls" type="text" name="email" id="email" for="user" placeholder="Correo">
            <input class="controls" type="password" name="pass" id="pass" for="pass" placeholder="Contraseña">
           
            <br>
            <input class="botons" type="submit" value="Enviar" id="boton">
            <input class="botons" type="reset" value="Borrar" id="boton">
        </form>
    </section>
     <!-- Campo oculto para enviar el ID del usuario -->
    <?php
            session_start();
            if(isset($_SESSION['id_usuario'])) {
                echo '<input type="hidden" name="id_usuario" value="' . $_SESSION['id_usuario'] . '">';
            } else {
                echo '<p>Error: No se pudo obtener el ID de usuario.</p>';
            }
            ?>
    <br><br><br><br>
</body>
</html>
