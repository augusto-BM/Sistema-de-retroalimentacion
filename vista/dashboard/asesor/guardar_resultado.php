<?php

session_start();
@include '../../../modelo/conexion.php';

// Verificar sesión de usuario
if (!isset($_SESSION['asesor_name'])) {
    header('location: ../../login/login.php');
    exit;
}

// Obtener datos del cuerpo de la solicitud (JSON)
$data = json_decode(file_get_contents("php://input"), true);

// Verificar datos recibidos y conexión a la base de datos
if (isset($data['id_colaborador'], $data['id_examen'], $data['nota'], $conn)) {
    // Preparar la consulta para insertar el resultado
    $sql = "INSERT INTO resultados (id_colaborador, id_examen, nota) VALUES (?, ?, ?)";
    
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
        } else {
            // Error al ejecutar la consulta SQL
            $response = [
                'status' => 'error',
                'message' => 'Error al guardar el resultado del examen: ' . $stmt->error
            ];
        }
        // Cerrar la declaración
        $stmt->close();
    } else {
        // Error al preparar la consulta SQL
        $response = [
            'status' => 'error',
            'message' => 'Error al preparar la consulta para guardar el resultado: ' . $conn->error
        ];
    }
} else {
    // Datos incompletos recibidos
    $response = [
        'status' => 'error',
        'message' => 'Datos incompletos recibidos para guardar el resultado del examen.'
    ];
}

// Devolver respuesta JSON al cliente
echo json_encode($response);

// Cerrar la conexión a la base de datos
$conn->close();

?>
