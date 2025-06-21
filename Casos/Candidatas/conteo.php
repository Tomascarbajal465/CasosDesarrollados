<?php
session_start();

// Inicializar variables si aún no existen
if (!isset($_SESSION['candidata1'])) $_SESSION['candidata1'] = 0;
if (!isset($_SESSION['candidata2'])) $_SESSION['candidata2'] = 0;
if (!isset($_SESSION['candidata3'])) $_SESSION['candidata3'] = 0;
if (!isset($_SESSION['candidata4'])) $_SESSION['candidata4'] = 0;

// Detectar qué botón fue presionado
if (isset($_POST['btnBoton1'])) $_SESSION['candidata1']++;
if (isset($_POST['btnBoton2'])) $_SESSION['candidata2']++;
if (isset($_POST['btnBoton3'])) $_SESSION['candidata3']++;
if (isset($_POST['btnBoton4'])) $_SESSION['candidata4']++;

// Calcular total de votos
$_SESSION['total'] = $_SESSION['candidata1'] + $_SESSION['candidata2'] + $_SESSION['candidata3'] + $_SESSION['candidata4'];

// Redirigir de nuevo al formulario principal
header('Location: index.php');
exit;
?>
