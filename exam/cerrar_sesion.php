<?php
session_start();

// Elimina todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige al usuario a la página de inicio de sesión o a cualquier otra página que desees
header("Location: login.php");
exit;
?>
<?php
// Iniciar o reanudar la sesión
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Si se desea destruir la cookie, también se puede hacer
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Finalmente, destruir la sesión
session_destroy();

// Redireccionar al usuario a una página de inicio de sesión o a donde prefieras
header("Location: login.php");
exit;
?>
