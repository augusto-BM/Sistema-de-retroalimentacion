<?php
@include '../../modelo/conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numPreguntas = 2; // Cambia esto al número de preguntas que tienes

    for ($i = 1; $i <= $numPreguntas; $i++) {
        $nombre_de_la_pregunta = $_POST['nombre_de_la_pregunta' . $i];
        $respuesta_correcta = $_POST['respuesta_correcta' . $i];
        $puntaje = $_POST['puntaje' . $i];
        $opcion_1 = $_POST['opcion_1' . $i];
        $opcion_2 = $_POST['opcion_2' . $i];
        $opcion_3 = $_POST['opcion_3' . $i];
        $opcion_4 = $_POST['opcion_4' . $i];
        $opcion_5 = $_POST['opcion_5' . $i];

        $sql_crearPreguntas = "INSERT INTO preguntas (pregunta_texto, opcion_1, opcion_2, opcion_3, opcion_4, opcion_5, respuesta_correcta, puntaje)
                    VALUES ('$nombre_de_la_pregunta', '$opcion_1', '$opcion_2', '$opcion_3', '$opcion_4', '$opcion_5', '$respuesta_correcta', '$puntaje')";

        $query = mysqli_query($conn, $sql_crearPreguntas);

        if (!$query) {
            $_SESSION['mensaje'] = "Error al crear pregunta";
            header("Location: ../../vista/dashboard/backoffice/crud-examenes/backofficeCrearExamen.php");
            exit;
        }
    }

    $_SESSION['mensaje'] = "Preguntas creadas exitosamente";
    header("Location: ../../vista/dashboard/backoffice/crud-examenes/backofficeCrearExamen.php");
}
?>