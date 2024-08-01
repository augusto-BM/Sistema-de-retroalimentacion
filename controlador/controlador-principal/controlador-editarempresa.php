<?php
@include '../../modelo/conexion.php';

session_start();
//AL APRETAR EL BOTON DE EDITAR
if (isset($_POST['click_btn_editar'])) {

    $id = $_POST['user_id'];        //Obtener el id del usuario mediante  ajax    
    $array_datos_obtenidos = [];    //Array para almacenar los datos obtenidos de la base de datos  

    $sql = "SELECT * FROM empresa WHERE idempresa = '$id'";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        while ($fila = mysqli_fetch_array($resultado)) {
            $fila['log_registroempresa'] = date('Y-m-d', strtotime($fila['log_registroempresa']));
            array_push($array_datos_obtenidos, $fila);
        }
            header('Content-Type: application/json');
            echo json_encode($array_datos_obtenidos);
        }
    }

//AL APRETAR EL BOTON DE GUARDAR CAMBIOS EN EL MODAL EDITAR
if (isset($_POST['click_btn_editar_cambios'])) {

    $id = $_POST['idempresa'];
    echo $id; // Este es el input invisible que contiene el id de la empresa en el formulario
    $razonsocial = $_POST['razonsocial'];
    $rucempresa = $_POST['rucempresa'];
    $direccion = $_POST['direccion'];
    $ubicacion = $_POST['ubicacion'];
    $celular = $_POST['celular'];
    $log_registroempresa = $_POST['log_registroempresa']; 

    /* $estado = "inactivo"; */

       // Consulta SQL para actualizar el registro
    $sql_editar = "UPDATE empresa SET 
    razonsocial='$razonsocial', 
    rucempresa='$rucempresa', 
    direccion='$direccion', 
    ubicacion='$ubicacion', 
    celular='$celular', 
    log_registroempresa='$log_registroempresa' 
WHERE idempresa='$id'";

echo "Consulta SQL: $sql_editar<br>";
    
    $query = mysqli_query($conn, $sql_editar);
    if ($query) {
        $_SESSION['mensaje'] = "Datos actualizados correctamente";
        header("Location: ../../vista/dashboard/principal/empresas.php");
    } else {
        $_SESSION['mensaje'] = "Error al actualizar los datos";
        header("Location: ../../vista/dashboard/principal/empresas.php");
    }
    
}

?>
