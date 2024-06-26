<?php
session_start();
@include '../../../modelo/conexion.php';

if(!isset($_SESSION['general_name'])){
   header('location:../../login/login.php');
}
$nombre_sesion = $_SESSION['general_name'];
$id_login = $_SESSION['id_login'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRADOR - <?php echo $nombre_sesion; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php @include './php-principal/sidebar.php' ?>
    <main>
        <h1>Dashboard - <?php echo $nombre_sesion; ?></h1>
        <div class="row m-3">
    <div class="col-sm-3">
        <div class="card bg-primary">
            <div class="card-body">
                <h5 class="card-title">3</h5>
                <p class="card-text">cedes</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card bg-info">
            <div class="card-body">
                <h5 class="card-title">5</h5>
                <p class="card-text">Tematicas</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card bg-success">
            <div class="card-body">
                <h5 class="card-title">8</h5>
                <p class="card-text">Supervisores</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card bg-danger">
            <div class="card-body">
                <h5 class="card-title">27</h5>
                <p class="card-text">Asesores</p>
            </div>
        </div>
    </div>
</div>
<div class="row m-3">
    <div class="col-sm-3">
        <div class="card bg-warning">
            <div class="card-body">
                <h5 class="card-title">3</h5>
                <p class="card-text">Campañas</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card bg-success">
            <div class="card-body">
                <h5 class="card-title">7</h5>
                <p class="card-text">Preguntas</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card bg-primary">
            <div class="card-body">
                <h5 class="card-title">12</h5>
                <p class="card-text">Resultados</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card bg-info">
            <div class="card-body">
                <h5 class="card-title">52</h5>
                <p class="card-text">Usuarios</p>
            </div>
        </div>
    </div>
</div>

    </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>