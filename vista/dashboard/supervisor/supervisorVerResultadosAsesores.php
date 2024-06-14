<?php
session_start();
@include '../../../modelo/conexion.php';

if(!isset($_SESSION['supervisor_name'])){
   header('location:../../login/login.php');
}
$nombre_sesion = $_SESSION['supervisor_name'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../principal/style.css">
</head>

<body>
<?php @include './supervisor-principal/sidebar_supervisor.php'?>
<main>
  <h1>Hola soy supervisor</h1>

  <div class="container">
    <table class="table table-bordered">
    <thead>
      <tr>
        <td scope="row">#</td>
        <th scope="col">Nombre de examen</th>
        <th scope="col">Campaña</th>
        <th scope="col">Nombre de asesor</th>
        <th scope="col">Fecha</th>
        <th scope="col">Nota</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td>Primer examen</td>
        <td>energia</td>
        <td>Jose Suarez</td>
        <td>29/04/2024</td>
        <td>18</td>
      </tr>
      <tr>
      <td></td>
        <td>Primer examen</td>
        <td>energia</td>
        <td>Sergio Aguero</td>
        <td>29/04/2024</td>
        <td>12</td>
      </tr>
      <tr>
      <td></td>
        <td>Primer examen</td>
        <td>energia</td>
        <td>Daniel Espinoza</td>
        <td>29/04/2024</td>
        <td>15</td>
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