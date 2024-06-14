<?php
session_start();
@include '../../../modelo/conexion.php';

if (!isset($_SESSION['supervisor_name'])) {
  header('location:../../login/login.php');
}
$nombre_sesion = $_SESSION['supervisor_name'];
$id_login = $_SESSION['id_login'];
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
  <?php
  $sql_supervisor = "SELECT usuario from login WHERE id_login = $id_login ";
  $resultado = mysqli_query($conn, $sql_supervisor);
  if ($resultado && mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
  ?>
      <?php @include './supervisor-principal/sidebar_supervisor.php' ?>
  <?php
    }
  }
  mysqli_free_result($resultado);
  mysqli_close($conn);
  ?>
  <main>

    <h1>Examenes pendientes</h1>
    <div class="container">
      <div class="row m-3">
        <div class="col-sm-3">
          <div class="card bg-primary">
            <div class="card-body">
              <h5 class="card-title">Campaña</h5>
              <p class="card-text">energía</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card bg-info">
            <div class="card-body">
              <h5 class="card-title">Tematica</h5>
              <p class="card-text">capa energia</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card bg-success">
            <div class="card-body">
              <h5 class="card-title">Fecha</h5>
              <p class="card-text">13/06/2024</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card bg-danger">
            <div class="card-body">
              <h5 class="card-title">Hora</h5>
              <p class="card-text">17:49</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Content here -->
      <h4>Lista de examenes</h4>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre del examen</th>
            <th scope="col">Campaña</th>
            <th scope="col">Creador</th>
            <th scope="col">Número de preguntas</th>
            <th scope="col">Tiempo</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Primer examen</td>
            <td>energia</td>
            <td>Jose</td>
            <td>10</td>
            <td>30 min</td>
            <td><button>Tomar examen</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Segundo examen</td>
            <td>luz</td>
            <td>Carlos</td>
            <td>8</td>
            <td>30 min</td>
            <td><button>Tomar examen</button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Tercer examen</td>
            <td>energia</td>
            <td>Maria</td>
            <td>10</td>
            <td>30 min</td>
            <td><button>Tomar examen</button></td>
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