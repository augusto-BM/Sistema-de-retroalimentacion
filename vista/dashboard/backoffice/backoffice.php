<?php
session_start();
@include '../../../modelo/conexion.php';

if(!isset($_SESSION['backoffice_name'])){
   header('location:../../login/login.php');
}
$nombre_sesion = $_SESSION['backoffice_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRADOR - PRINCIPAL</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../principal/style.css">

</head>

<body>
    <?php @include './backoffice-principal/sidebar_backoffice.php' ?>
    <main>
        <h1>Dashboard BACKOFFICE</h1>

        <div class="container">
        <table class="table" style="background-color: white">
  <thead>
    <tr>
      <th colspan="2" class="text-left" >Información del Colaborador</th>
    </tr>
    <tr>
      <th scope="col">Nombre</th>
      <th>Carlos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Email</th>
      <td>carlosbackoffice@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">Campaña</th>
      <td>energia</td>
    </tr>
  </tbody>
</table>
        </div>
    </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../principal/script.js"></script>
</body>

</html>