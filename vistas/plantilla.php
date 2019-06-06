<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>USeguros</title>
    <!--Fontawesome-->
    <link rel="stylesheet" href="vistas/css/fontawesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!--Normalize-->
    <link rel="stylesheet" href="vistas/css/normalize.css">
    <link rel="stylesheet" href="vistas/css/estilos.css">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <header class="cabezote">
        <!--=====================================
                LOGOTIPO
        ======================================-->
        <a href="#" class="logo">
            <span>USeguros</span>
        </a>
        
        <!--=====================================
                BARRA DE NAVEGACION
        ======================================-->
        
        <!-- Botón de menú -->
        <div class="nav-bar">
            <div class="nav-bar-izquierda">
                <a href="#" class="push-menu"><i class="fas fa-bars"></i></a>
            </div>
            <!-- perfil de usuario -->
            <div class="nav-bar-derecha">
                <ul>
                    <li>
                        <a href="#">
                            <img class="img-usuario" src="vistas/img/usuarios/anonymous.png" alt="imagen de usuario">
                            <span>Usuario Administrador</span>
                        </a>
                        <ul class="salir">
                            <li><a href="#">Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    
    <!--=====================================
                        MENU
    ======================================-->
    <div class="contenedor-nav">
        <nav>
            <ul class="menu">
                <li><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li>
                    <a href="#"><i class="fas fa-laptop-medical"></i><span>Seguros</span><i class="icono derecha fas fa-chevron-right"></i></a>
                    <ul class="sub-menu">
                        <li><a href="#">No Conformidad</a></li>
                        <li><a href="#">Calcular</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-taxi"></i><span>SOAT</span><i class="icono derecha fas fa-chevron-right"></i></a>
                    <ul class="sub-menu">
                        <li><a href="#">Formulario1</a></li>
                        <li><a href="#">Formulario2</a></li>
                        <li><a href="#">Formulario3</a></li>
                        <li><a href="#">Formulario4</a></li>
                        <li><a href="#">Formulario5</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-tools"></i><span>Mantenimiento</span><i class="icono derecha fas fa-chevron-right"></i></a>
                    <ul class="sub-menu">
                        <li><a href="#">Mantenimiento1</a></li>
                        <li><a href="#">Mantenimiento2</a></li>
                        <li><a href="#">Mantenimiento3</a></li>
                        <li><a href="#">Mantenimiento4</a></li>
                        <li><a href="#">Mantenimiento5</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-chart-bar"></i><span>Reportes</span><i class="icono derecha fas fa-chevron-right"></i></a>
                    <ul class="sub-menu">
                        <li><a href="#">Reporte1</a></li>
                        <li><a href="#">Reporte2</a></li>
                        <li><a href="#">Reporte3</a></li>
                        <li><a href="#">Reporte4</a></li>
                        <li><a href="#">Reporte5</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="vistas/js/jquery.js"></script>
    <script src="vistas/js/main.js"></script>
</body>
</html>