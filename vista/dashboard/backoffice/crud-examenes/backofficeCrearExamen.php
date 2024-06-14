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
    <link rel="stylesheet" href="../../principal/style.css">
</head>

<body>
<?php
      @include '../backoffice-principal/sidebar_backoffice.php'?>

<main>
   <h1>Agregar Examen</h1>
   <div class="container">
   <div class="row">
    <div class="col-sm-3">
        <div class="card bg-primary">
            <div class="card-body">
                <h5 class="card-title">Campañas</h5>
                <p class="card-text">energia</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card bg-info">
            <div class="card-body">
                <h5 class="card-title">Creador</h5>
                <p class="card-text">Sebastian Rodriguez</p>
            </div>
        </div>
    </div>
    </div>

  <div class="row">
<span class="title1" style="margin-left:29%;font-size:30px;"><b>Detalles del examen</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="../backofficePreguntas.php"  method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Ingrese el título del Quiz" class="form-control input-md" type="text" required>
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total" name="total" placeholder="Ingrese el número total de preguntas" class="form-control input-md" type="number" required>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="time"></label>  
  <div class="col-md-12">
  <input id="time" name="time" placeholder="Ingrese el límite de tiempo para la prueba en minutos" class="form-control input-md" min="1" type="number" required>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="desc"></label>  
  <div class="col-md-12">
  <textarea rows="8" cols="8" name="desc" class="form-control" placeholder="Escribe una descripción acá..." required></textarea>  
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <a href="../backoffice/backofficePreguntas.php"><input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Enviar" class="btn btn-primary"/></a>
  </div>
</div>

</fieldset>
</form></div>

</div>
</div>
</main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../principal/script.js"></script>
</body>
</html