<?php
@include '../../modelo/conexion.php';
session_start();

$sql = "SELECT * FROM examenes";

$result = mysqli_query($conn, $sql);

// Verificar si se encontraron resultados
if (mysqli_num_rows($result) > 0) {
    // Array para almacenar los datos de la tabla
    $datos = [];

    // Iterar sobre los resultados y guardarlos en el array
    while($row = mysqli_fetch_assoc($result)) {
        $datos[] = $row;
    }

} else {
    // Si no se encontraron resultados, mostrar un mensaje
    echo "No se encontraron resultados";
}
?>