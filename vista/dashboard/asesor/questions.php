<?php
session_start();
@include '../../../modelo/conexion.php';

if (!isset($_GET['id_examen'])){
    die("No se proporciono el id_examen.");
}

$id_examen = $_GET['id_examen'];    
// Consulta para obtener las preguntas
$sql = "SELECT p.id_pregunta, p.pregunta_texto, p.opcion_1, p.opcion_2, p.opcion_3, p.opcion_4, p.opcion_5, p.respuesta_correcta FROM preguntas p WHERE p.id_examen = $id_examen";
$result = $conn->query($sql);
 
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}

$preguntas = [];
if ($result->num_rows > 0) {
    // Recorrer los resultados y crear el array de preguntas
    while($row = $result->fetch_assoc()) {
        $pregunta = [
            'numb' => $row['id_pregunta'],
            'question' => $row['pregunta_texto'],
            'answer' => $row['respuesta_correcta'],
            'options' => [
                $row['opcion_1'],
                $row['opcion_2'],
                $row['opcion_3'],
                $row['opcion_4'],
                $row['opcion_5']
            ]
        ];
        array_push($preguntas, $pregunta);
    }
} else {
    echo "0 resultados";
}

// Convertir el array de preguntas a formato JSON para JavaScript
$preguntas_json = json_encode($preguntas);

// Cerrar la conexión
$conn->close();
// Encabezado para indicar que se devolverá contenido JavaScript
header('Content-Type: application/javascript');

// Salida de JavaScript que define la variable 'questions' con el contenido JSON de las preguntas
echo "var questions = " . $preguntas_json . ";";
?>
