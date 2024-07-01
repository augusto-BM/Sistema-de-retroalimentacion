<?php
session_start();
@include '../../../modelo/conexion.php';

if (!isset($_SESSION['asesor_name'])) {
    header('location: ../../login/login.php');
    exit;
}
$id_colaborador = $_SESSION['id_login'];

if (isset($_GET['id_examen'])) {
  $id_examen = (int)$_GET['id_examen'];
} else {
  echo "No se ha proporcionado el ID del examen.";
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Aca muestra el resultado del examen</h1>
  <?php

  ?>

  <h2>Id examen: <?php echo $id_examen; ?></h2>
  <h2>Id colaborador: <?php echo $id_colaborador; ?></h2>
</body>

</html>