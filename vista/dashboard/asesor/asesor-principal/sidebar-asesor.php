<div class="menu">
    <ion-icon name="menu-outline"></ion-icon>
    <ion-icon name="close-outline"></ion-icon>
</div>

<div class="barra-lateral">
    <div>
        <div class="nombre-pagina">
            <ion-icon id="cloud" name="cloud-outline"></ion-icon>
            <span>ASESOR</span>
        </div>
        <!-- <button class="boton">
                <ion-icon name="add-outline"></ion-icon>
                <span>Create new</span>
            </button> -->
    </div>
    <div class="linea mb-3"></div>

    <nav class="navegacion">
        <div class="seccion">
            <p><sub>Menu Principal</sub></p>
            <ul>
                <li>
                    <a id="inbox" href="../asesor/asesor.php">
                        <ion-icon name="mail-unread-outline"></ion-icon>
                        <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a id="inbox" href="../asesor/examenesPendientes.php">
                        <ion-icon name="mail-unread-outline"></ion-icon>
                        <span>Examenes pendientes</span>
                    </a>
                </li>
                <li>
                    <a id="inbox" href="../asesor/verResultados.php">
                        <ion-icon name="mail-unread-outline"></ion-icon>
                        <span>Ver Resultados</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Datos Principales
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="./empresas.php">Empresa</a></li>
                            <li><a class="dropdown-item" href="./campañas.php">Campañas</a></li>
                            <li><a class="dropdown-item" href="./tematica.php">Tematica</a></li>
                            <li><a class="dropdown-item" href="./backoffice.php">Backoffice</a></li>
                            <li><a class="dropdown-item" href="./supervisores.php">Supervisores</a></li>
                            <li><a class="dropdown-item" href="./asesores.php">Asesores</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dropdown">

                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Relacion
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Empresa-curso</a></li>
                            <li><a class="dropdown-item" href="#">Clase-backoffice</a></li>
                            <li><a class="dropdown-item" href="#">Clase-supervisor</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="star-outline"></ion-icon>
                        <span>Banco de preguntas</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="seccion">
            <p><sub>Reportes</sub></p>
            <ul>
                <li>
                    <a href="#">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Resultado de examenes</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="seccion">
            <p><sub>Administrador</sub></p>
            <ul>
                    <li>
                        <a href="#">
                            <ion-icon name="mail-unread-outline"></ion-icon>
                            <span>Administrador de usuarios</span>
                        </a>
                    </li>
                <li>
                    <a href="#">
                        <ion-icon name="star-outline"></ion-icon>
                        <span>Configuracion</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>



    <div>
        <div class="linea"></div>

        <div class="modo-oscuro">
            <div class="info">
                <ion-icon name="moon-outline"></ion-icon>
                <span>Modo Dark</span>
            </div>
            <div class="switch">
                <div class="base">
                    <div class="circulo">

                    </div>
                </div>
            </div>
        </div>


        <div class="usuario">
            <img src="/Jhampier.jpg" alt="">
            <div class="info-usuario">
                <div class="nombre-email">
                    <span class="nombre">General</span>
                    <span class="email">general@gmail.com</span>
                </div>
                <ion-icon name="ellipsis-vertical-outline"></ion-icon>
            </div>
        </div>
    </div>

</div>