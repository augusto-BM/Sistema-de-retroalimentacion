<?php
session_start();
@include '../../../modelo/conexion.php';

if (!isset($_SESSION['backoffice_name'])) {
  header('location:../../login/login.php');
}
$nombre_sesion = $_SESSION['backoffice_name'];
$id_login = $_SESSION['id_login'];

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
  $sql_backoffice = "SELECT usuario from login WHERE id_login = $id_login ";
  $resultado = mysqli_query($conn, $sql_backoffice);
  if ($resultado && mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
  ?>
      <?php @include './backoffice-principal/sidebar_backoffice.php' ?>
  <?php
    }
  }
  mysqli_free_result($resultado);
  mysqli_close($conn);
  ?>
  <main>
    <h1>Datos de examenes</h1>
    <div class="container">
      <a href="./crud-examenes/backofficeCrearExamen.php"><button class="btn" style="background-color: blue; color: white; float: right">Agregar examen</button></a>
      <div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col" style="display: none;">id</th>
              <th scope="col">Tema</th>
              <th scope="col">Campaña</th>
              <th scope="col">Tipo</th>
              <th scope="col">Preguntas</th>
              <th scope="col">Tiempo</th>
              <th scope="col">Creado</th>
              <th scope="col">Empieza</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody>
            <?php
              @include '../../../modelo/conexion.php';
              $sql = "SELECT 
                        examenes.id_tematica AS id_examen,
                        examenes.id_tematica AS id_tematica,
                        examenes.id_rol_destino AS id_rol_destino,
                        examenes.cantidad_preguntas AS cantidad_preguntas,
                        examenes.duracion_examen AS duracion_examen,
                        examenes.fecha_creacion AS fecha_creacion,
                        examenes.fecha_realizacion AS fecha_realizacion,
                        examenes.estado AS estado,
                        tematica.nombre_tematica AS nombre_tematica,
                        rol.tipo_rol AS tipo_rol,
                        campaña.nombre_campaña AS nombre_campaña
                      FROM examenes
                      INNER JOIN tematica ON examenes.id_tematica = tematica.id_tematica
                      INNER JOIN rol ON examenes.id_rol_destino = rol.id_rol
                      INNER JOIN campaña ON tematica.id_campaña = campaña.id_campaña";

              $resultado = mysqli_query($conn, $sql);
              if ($resultado && mysqli_num_rows($resultado) > 0) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
                <tr>
                  <td style="display: none;"><?php echo $fila['id_examen']; ?></td>
                  <td><?php echo $fila['nombre_tematica']; ?></td>
                  <td><?php echo $fila['nombre_campaña']; ?></td>
                  <td><?php echo $fila['tipo_rol']; ?></td>
                  <td><?php echo $fila['cantidad_preguntas']; ?></td>
                  <td><?php echo $fila['duracion_examen']; ?></td>
                  <td><?php echo $fila['fecha_creacion']; ?></td>
                  <td><?php echo $fila['fecha_realizacion']; ?></td>
                  <td>
                    <button style="width: 100px;" class="btn <?php echo ($fila['estado'] == 'activo') ? 'btn-success' : 'btn-danger'; ?> estadoBtn" onclick="cambiarEstado(this)" data-id="<?php echo $fila['id_examen']; ?>">
                      <?php echo ($fila['estado'] == 'activo') ? 'Activo' : 'Inactivo'; ?>
                    </button>
                  </td>
                </tr>
            <?php
              }
            }
            mysqli_free_result($resultado);
            mysqli_close($conn);

            ?>
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