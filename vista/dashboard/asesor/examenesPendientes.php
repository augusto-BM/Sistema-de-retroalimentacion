<?php
session_start();
@include '../../../modelo/conexion.php';

if(!isset($_SESSION['asesor_name'])){
   header('location:../../login/login.php');
}
$nombre_sesion = $_SESSION['asesor_name'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asesor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../principal/style.css">

</head>

<body>
  <?php @include './asesor-principal/sidebar-asesor.php'?>
  <main>
  <h1>Hola soy asesor</h1>
  <div class="container">
  <h1>No tienes examenes pendientes</h1>
  </div>

  </main>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../principal/script.js"></script>
</body>
</html>