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
    <script src="https://kit.fontawesome.com/73c70fe811.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../principal/style.css">
</head>

<body>
<?php
      @include './backoffice-principal/sidebar_backoffice.php'?>
  <main>
<h1>Hola soy backoffice</h1>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID Examen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha</th>
        <th scope="col">Creado por</th>
        <th scope="col">N° preguntas</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">001</td>
        <td>Prueba01</td>
        <td>29/04/2024</td>
        <td>Jose</td>
        <td>5</td>
        <td><button onclick="window.print()"><i class="fas fa-print"></i> Imprimir</button></td>
      </tr>
      <tr>
        <td scope="row">002</td>
        <td>Prueba02</td>
        <td>07/05/2024</td>
        <td>Carlos</td>
        <td>10</td>
        <td><button onclick="window.print()"><i class="fas fa-print"></i> Imprimir</button></td>
      </tr>
      <tr>
      <td scope="row">003</td>
        <td>Prueba03</td>
        <td>15/05/2024</td>
        <td>Juan</td>
        <td>6</td>
        <td><button onclick="window.print()"><i class="fas fa-print"></i> Imprimir</button></td>
      </tr>
    </tbody>
  </table>
  </main>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../principal/script.js"></script>
</body>
</html>