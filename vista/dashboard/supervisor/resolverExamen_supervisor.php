<?php
    session_start();
    @include '../../../modelo/conexion.php';

if(!isset($_SESSION['supervisor_name'])){
   header('location:../../login/login.php');
}
$nombre_sesion = $_SESSION['supervisor_name'];
$id_login = $_SESSION['id_login'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen supervisor</title>
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="./supervisor.css">
    <script src="./questions.php"></script>
</head>
<body>
    <!-- start Quiz button -->
    <div class="start_btn"><button>Iniciar Examen</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Reglas de tu Examen en Línea</span></div>
        <div class="info-list">
            <div class="info">1. Solo tendrás <span>15 segundos</span> para responder cada pregunta.</div>
            <div class="info">2. Una vez que seleccionas tu respuesta, no se puede deshacer.</div>
            <div class="info">3. No puedes seleccionar ninguna opción una vez que se acaba el tiempo.</div>
            <div class="info">4. No puedes salir del Quiz mientras está corriendo el tiempo.</div>
            <div class="info">5. Obtendrás puntos con base en tus respuestas correctas.</div>
        </div>
        <div class="buttons">
            <button class="quit">Salir</button>
            <button class="restart">Continuar</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Examen en línea</div>
            <div class="timer">
                <div class="time_left_txt">Tiempo Restante</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Siguiente Pregunta</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Has finalizado tu examen!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Repetir</button>
            <a href="./supervisorExamenesPendientes.php"><button class="quit">Salir</button></a>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../principal/script.js"></script>
    <script src="./scripts.js"></script>
    <script src="./questions.php"></script>
</body>
</html>