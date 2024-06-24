<?php
// Conexión a la base de datos
include_once '../../../modelo/conexion.php';

// Recibir datos del cuerpo de la solicitud
$data = json_decode(file_get_contents("php://input"), true);

// Verificar si se recibieron datos válidos
if (isset($data['id_colaborador'], $data['id_examen'], $data['nota'])) {
    // Preparar la consulta para insertar el resultado
    $sql = "INSERT INTO resultados (id_colaborador, id_examen, nota) 
            VALUES (?, ?, ?)";
    
    // Preparar la declaración
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // Vincular parámetros y ejecutar la consulta
        $stmt->bind_param("iii", $data['id_colaborador'], $data['id_examen'], $data['nota']);
        if ($stmt->execute()) {
            // Éxito al insertar el resultado
            $response = [
                'status' => 'success',
                'message' => 'Resultado del examen guardado correctamente.'
            ];
            echo json_encode($response);
        } else {
            // Error al ejecutar la consulta SQL
            $response = [
                'status' => 'error',
                'message' => 'Error al guardar el resultado del examen.'
            ];
            echo json_encode($response);
        }
        // Cerrar la declaración
        $stmt->close();
    } else {
        // Error al preparar la consulta SQL
        $response = [
            'status' => 'error',
            'message' => 'Error al preparar la consulta para guardar el resultado.'
        ];
        echo json_encode($response);
    }
} else {
    // Datos incompletos recibidos
    $response = [
        'status' => 'error',
        'message' => 'Datos incompletos recibidos para guardar el resultado del examen.'
    ];
    echo json_encode($response);
}
// Cerrar la conexión a la base de datos
$conn->close();
?>
