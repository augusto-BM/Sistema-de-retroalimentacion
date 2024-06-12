<?php
session_start();
@include '../../../modelo/conexion.php';

if(!isset($_SESSION['general_name'])){
   header('location:../../login/login.php');
}
$nombre_sesion = $_SESSION['general_name'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesores - <?php echo $nombre_sesion; ?></title>
</head>
<body>
    
</body>
</html>