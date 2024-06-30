<?php
session_start();
@include '../../../modelo/conexion.php';

if (!isset($_SESSION['asesor_name'])) {
    header('location:../../login/login.php');
    exit(); // Asegura que el script se detenga después de redirigir
}

$nombre_sesion = $_SESSION['asesor_name'];
$id_login = $_SESSION['id_login'];

// Consulta SQL para obtener los exámenes destinados a asesores (id_rol_destino = 3)
$sql_examenes = "SELECT * FROM examenes WHERE id_rol_destino = 3";
$resultado = mysqli_query($conn, $sql_examenes);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../principal/style.css">
</head>
<body>
<?php @include './asesor-principal/sidebar-asesor.php'; ?>
<main>
    <h1>Examenes pendientes</h1>
    <div class="container">
        <div class="row m-3">
            
          
                <div class="col-sm-3">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Campaña</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h5 class="card-title">Tematica</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Fecha</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Hora</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <?php
            ?>
        </div>
    </div>
    <div class="container">
        <!-- Lista de examenes -->
        <h4>Lista de examenes</h4>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Campaña</th>
                <th scope="col">Creador</th>
                <th scope="col">Número de preguntas</th>
                <th scope="col">Tiempo</th>
                <th scope="col">Acción</th>
            </tr>
            </thead>
            <tbody>
            <?php
            // Reiniciar el cursor de la consulta para recorrer los resultados de nuevo
            mysqli_data_seek($resultado, 0);
            $contador = 1;
            while ($fila = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $contador; ?></th>
                    <td><?php echo htmlspecialchars($fila['titulo']); ?></td>
                    <td><?php echo htmlspecialchars($fila['id_colaborador_creador']); ?></td>
                    <td><?php echo htmlspecialchars($fila['cantidad_preguntas']); ?></td>
                    <td><?php echo htmlspecialchars($fila['duracion_examen']); ?></td>
                    <td><a href="./resolverExamen_asesor.php?id_examen=<?php echo $fila['id_examen']; ?>"><button
                                    class="btn btn-primary">Tomar examen</button></a></td>
                    <td><button onclick="imprimirResultado()" class="btn btn-primary">Imprimir resultado</button></td>
                    <script>
                        function imprimirResultado(){
                            var url = './imprimirResultado.php';
                            var ventana = window.open(url, '_blank');
                            ventana.onload = function(){
                                ventana.print();
                            };
                        }
                    </script>
                </tr>
                <?php
                $contador++;
            }
            ?>
            </tbody>
        </table>
    </div>
</main>
<script type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../principal/script.js"></script>
</body>
</html>

<?php
// No es necesario liberar el resultado aquí si vas a seguir utilizándolo
// mysqli_free_result($resultado);
mysqli_close($conn);
?>
