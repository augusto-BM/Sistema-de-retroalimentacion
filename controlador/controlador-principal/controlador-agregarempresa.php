<?php
session_start();
// Verificar si se recibió el formulario
if(isset($_POST['submit'])) {
    // Incluir archivo de conexión
    include '../../modelo/conexion.php';

    // Obtener datos del formulario
    $razonSocial = $_POST['razon_social'];
    $rucEmpresa = $_POST['ruc_empresa'];
    $direccion = $_POST['direccion-empresa'];
    $ubicacion = $_POST['ubicacion'];
    $celular = $_POST['celular-empresa'];
    $estado = $_POST['estado-empresa'];
    $fecharegistro_empresa = $_POST['fecharegistro-empresa'];

        // Verificar que la fecha no esté vacía
        if (!empty($fecharegistro_empresa)) {
            // Convertir la fecha al formato YYYY-MM-DD si es necesario
            $fecharegistro_empresa = date("Y-m-d", strtotime($fecharegistro_empresa));
        } else {
            $fecharegistro_empresa = null;
        }

    // Preparar consulta SQL para inserción
    $sql = "INSERT INTO `empresa`(`razonsocial`, `rucempresa`, `direccion`, `ubicacion`, `celular`, `estadoempresa`, `log_registroempresa`) 
            VALUES ('$razonSocial', '$rucEmpresa', '$direccion', '$ubicacion', '$celular', '$estado', '$fecharegistro_empresa')";

    // Ejecutar consulta
    if(mysqli_query($conn, $sql)) {
        mysqli_commit($conn);
        $_SESSION['mensaje'] = "Empresa registrada correctamente.";

    } else {
        // Error en la inserción
        echo "<script>alert('Error al registrar empresa');</script>";
        echo "Error: " . mysqli_error($conn);
    }

    // Cerrar conexión
    mysqli_close($conn);
    header("Location: ../../vista/dashboard/principal/empresas.php");
}
?>
