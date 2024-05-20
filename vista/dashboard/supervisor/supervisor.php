<?php
session_start();
@include '../../../modelo/conexion.php';

if(!isset($_SESSION['supervisor_name'])){
   header('location:../../login/login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Supervisor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="supervisor.css">
    <link rel="stylesheet" href="../css/components/header.css">
  <link rel="stylesheet" href="../../css/components/header.css" >
  <link rel="stylesheet" href="../../css/components/footer.css" >
    <link rel="stylesheet" href="./login.css">
    <script src="https://kit.fontawesome.com/73c70fe811.js" crossorigin="anonymous"></script>
</head>

<body>
<?php @include '../../components/cerrarSesion.php'?>
<div class="container">
<h1>Hola soy supervisor</h1>
<div class="container-button">
 <a href="crud/supervisorCrearExamen.php"><button type="button" class="btn btn-primary">Crear examen</button></a>
 <a href="supervisorExamenesPendientes.php"><button type="button" class="btn btn-secondary">Examenes pendientes</button></a>
 <a href="supervisorVerResultados.php"><button type="button" class="btn btn-success">Ver resultados</button></a>
 <a href="supervisorVerResultadosAsesores.php"><button type="button" class="btn btn-success-1">Ver resultados de asesores</button></a>
</div>

</div>
<?php
      @include '../../components/footer.php'?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>