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
    <title>Backoffice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    <link rel="stylesheet" href="../principal/style.css">
</head>

<body>

<?php
      @include './backoffice-principal/sidebar_backoffice.php'?>
        <main>
<h1>Hola soy backoffice</h1>
<div>
  <div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Nombre de examen</th>
        <th scope="col">Autor</th>
        <th scope="col">Fecha</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">Primer examen</td>
        <td>Jorge Suarez</td>
        <td>29/04/2024</td>
        <td class="">Ver</td>
      </tr>
      <tr>
        <td scope="row">Segundo examen</td>
        <td>Carlos Gomez</td>
        <td>07/05/2024</td>
        <td class="">Ver</td>
      </tr>
      <tr>
      <td scope="row">Tercer examen</td>
        <td>Luis Paredes</td>
        <td>15/05/2024</td>
        <td class="">Ver</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
        </main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../principal/script.js"></script>
</body>
</html>