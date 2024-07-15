<?php
@include '../../modelo/conexion.php';

session_start();
//AL APRETAR EL BOTON DE EDITAR
if (isset($_POST['click_btn_editar'])) {

    $id = $_POST['user_id'];        //Obtener el id del usuario mediante  ajax    
    $array_datos_obtenidos = [];    //Array para almacenar los datos obtenidos de la base de datos  

    $sql = "SELECT  
                                    campaña.id_campaña as id_campaña,
                                    campaña.nombre_campaña as nombreCampaña, 
                                    empresa.razonsocial as nombreEmpresa 
                                FROM 
                                    campaña 
                                INNER JOIN 
                                    empresa ON campaña.id_empresa = empresa.idempresa 
                             where id_campaña = '$id'";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        while ($fila = mysqli_fetch_array($resultado)) {
            array_push($array_datos_obtenidos, $fila);
            header('Content-Type: application/json');
            echo json_encode($array_datos_obtenidos);
        }
    }
}

//AL APRETAR EL BOTON DE GUARDAR CAMBIOS EN EL MODAL EDITAR
if (isset($_POST['click_btn_editar_cambios'])) {

    $id = $_POST["id_campaña"]; //Este es el input invisible que contiene el id del usuario en el modal editar
    echo $id;
    $nombre_campaña = $_POST["nombre_campaña"];
    $nombre_empresa = $_POST["nombre_empresa"];

    /* $estado = "inactivo"; */

    // Preparar la consulta SQL para insertar los datos en la tabla
    $sql_editar = "UPDATE campaña SET nombre_campaña = '$nombre_campaña', nombre_empresa = '$nombre_empresa' WHERE id_campaña = '$id'";
    
    $query = mysqli_query($conn, $sql_editar);
    if ($query) {
        $_SESSION['mensaje'] = "Datos actualizados correctamente";
        header("Location: ../../../../vista/dashboard/principal/campañas.php");
    } else {
        $_SESSION['mensaje'] = "Error al actualizar los datos";
        header("Location: ../../../../vista/dashboard/principal/campañas.php");
    }
    
}

?>
