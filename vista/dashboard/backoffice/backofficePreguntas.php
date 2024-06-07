

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backoffice</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../backoffice.css">
    <link rel="stylesheet" href="../css/components/header.css">
  <link rel="stylesheet" href="../../../css/components/header.css">
  <link rel="stylesheet" href="../../css/components/footer.css">
  <link rel="stylesheet" href="css/header.css" >
    <link rel="stylesheet" href="./login.css">
    <script src="https://kit.fontawesome.com/73c70fe811.js" crossorigin="anonymous"></script>
</head>

<body>
<?php @include '../../../../vista/components/cerrarSesion.php'?>

 
  
   <div class="container">
   <h1>Hola soy backoffice</h1>
 <a href="../crud/backofficeCrearExamen.php"><button type="button" class="btn btn-primary">Crear examen</button></a>
 <button type="button" class="btn btn-secondary">Ver resultados</button>
 <button type="button" class="btn btn-success">Imprimir resultados</button>

</div>
<?php
session_start();
@include '../../../modelo/conexion.php';

if(!isset($_SESSION['backoffice_name'])){
   header('location:../../login/login.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procesar los detalles del examen enviado aquí
    // ...
    // Luego, mostrar los campos de entrada para las preguntas
    $total_questions = $_POST['total']; // Obtener el número total de preguntas del formulario
    
    // Mostrar los campos de entrada para cada pregunta
    echo '<div class="row">';
    echo '<span class="title1" style="margin-left:40%;font-size:30px;"><b>Detalles del examen</b></span><br /><br />';
    echo '<div class="col-md-3"></div><div class="col-md-6">';
    echo '<form class="form-horizontal title1" name="form" method="POST">';
    echo '<fieldset>';

    for($i = 1; $i <= $total_questions; $i++) {
        echo '<div class="form-group">';
        echo '<label class="col-md-12 control-label" for="qns'.$i.'">Pregunta '.$i.'</label>';
        echo '<div class="col-md-12">';
        echo '<textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Escribe la pregunta número '.$i.' acá..." required></textarea>';
        echo '</div>';
        echo '</div>';

        // Aquí puedes mostrar los campos de entrada para las opciones de la pregunta
        // ...

        // También puedes mostrar un campo de selección para la respuesta correcta
        // ...
    }

    // Agregar un botón de envío para enviar las preguntas
    echo '<div class="form-group">';
    echo '<label class="col-md-12 control-label" for=""></label>';
    echo '<div class="col-md-12">'; 
    echo '<input type="submit" style="margin-left:45%" class="btn btn-primary" value="Enviar preguntas" class="btn btn-primary"/>';
    echo '</div>';
    echo '</div>';

    echo '</fieldset>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
} else {
    // Si no se ha enviado el formulario de detalles del examen, mostrar ese formulario
    // ...
}
?>

<!-- El resto de tu HTML sigue aquí -->


</div>
<?php @include '../../components/footer.php'?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>