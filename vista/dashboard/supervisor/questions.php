<?php
session_start();
@include '../../../modelo/conexion.php';
// Consulta para obtener las preguntas
$sql = "SELECT id_pregunta, pregunta_texto, opcion_1, opcion_2, opcion_3, opcion_4, opcion_5, respuesta_correcta FROM preguntas";
$result = $conn->query($sql);

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


