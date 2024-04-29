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
</head>

<body>
<?php @include '../../components/cerrarSesion.php'?>

<div class="container">
 <h1>Hola soy backoffice <?php echo $_SESSION['backoffice_name'] ?></h1>
 <?php
      @include '../components/header.php'?>
   <link rel="stylesheet" href="css/header.css" >

 <button type="button" class="btn btn-primary">Crear examen</button>
 <button type="button" class="btn btn-secondary">Ver resultados</button>
 <button type="button" class="btn btn-success">Imprimir resultados</button>

 <div class="">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id creador examen</th>
        <th scope="col">id tipo rol</th>
        <th scope="col">Nombre de examen</th>
        <th scope="col">Dia</th>
        <th scope="col">Fecha</th>
        <th scope="col">Nota</th>
        <th scope="col">Estado</th>
      </tr>
    </thead>
    <tbody>
        <?php
          // Iterar sobre los datos y mostrarlos en la tabla
          foreach ($datos as $fila) {
              echo "<tr>";
              echo "<td>{$fila['id_colaborador_creador']}</td>";
              echo "<td>{$fila['id_rol_destino']}</td>";
              echo "<td>{$fila['titulo']}</td>";
              echo "<td>{$fila['dia']}</td>";
              echo "<td>{$fila['fecha_creacion']}</td>";
              echo "<td>{$fila['nota']}</td>";
              echo "<td>{$fila['estado']}</td>";
              echo "</tr>";
                }
        ?>
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