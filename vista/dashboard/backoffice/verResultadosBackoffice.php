<?php
session_start();
@include '../../../modelo/conexion.php';
@include '../../../controlador/controlador-crud-backoffice/listar-examenes.php';

if(!isset($_SESSION['backoffice_name'])){
   header('location:../../login/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backoffice</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="backoffice.css">
    <link rel="stylesheet" href="../css/components/header.css">
  <link rel="stylesheet" href="../../css/components/header.css" >
  <link rel="stylesheet" href="../../css/components/footer.css" >
    <link rel="stylesheet" href="./login.css">
    <script src="https://kit.fontawesome.com/73c70fe811.js" crossorigin="anonymous"></script>
    <script src="backoffice.js"></script>
</head>

<body>
<?php @include '../../../vista/components/cerrarSesion.php'?>


 <?php
      @include '../components/header.php'?>
   <link rel="stylesheet" href="css/header.css" >
<div class="container">
<h1>Hola soy backoffice</h1>
<div class="container-button">
<div class="dropdown">

  <button onclick="toggleDropdown()" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" aria-expanded="false" data-toggle="dropdown">
    Exámen
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <div class="btn-group-vertical">
    <li><a class="dropdown-item" href="../backoffice/crud/backofficeCrearExamen.php">Agregar examen</a></li>
    <li><a class="dropdown-item" href="../backoffice/crud/backofficeEditarExamen.php">Eliminar examen</a></li>
    </div>
  </ul>
</div>
  <a href="verResultadosBackoffice.php"><button type="button" class="btn btn-secondary">Ver resultados</button></a>
  <a href="imprimirResultados.php"><button type="button" class="btn btn-success">Imprimir resultados</button></a>
 </div>
</div>
<div>
  <div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Nombre de examen</th>
        <th scope="col">Dia</th>
        <th scope="col">Fecha</th>
        <th scope="col">Nota</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">Primer examen</td>
        <td>Lunes</td>
        <td>29/04/2024</td>
        <td class="nota">18</td>
      </tr>
      <tr>
        <td scope="row">Segundo examen</td>
        <td>Martes</td>
        <td>07/05/2024</td>
        <td class="nota">14</td>
      </tr>
      <tr>
      <td scope="row">Tercer examen</td>
        <td>Miercoles</td>
        <td>15/05/2024</td>
        <td class="nota">16</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
<?php @include '../../components/footer.php'?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>