<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebApp-CIGR</title>
    <!--Plugins CSS-->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!--Plugins JS-->
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/c395014408.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Logotipo-->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>
    <!--Barra de menu-->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "register") : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=register" class="nav-link  active">
                                Registro
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=register" class="nav-link">
                                Registro
                            </a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "login") : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=login" class="nav-link active">
                                Ingreso
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=login" class="nav-link">
                                Ingreso
                            </a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "inicio") : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=editar" class="nav-link active">
                                Inicio
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=inicio" class="nav-link">
                                Inicio
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if ($_GET["pagina"] == "salir") : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=salir" class="nav-link active">
                                Salir
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=salir" class="nav-link">
                                Salir
                            </a>
                        </li>
                    <?php endif ?>

                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=login">Registro</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=register">Ingreso</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                    </li>

                <?php endif ?>

                <!--
                    GET: $_GET["variable"] Variables que se pasan como parametros via URL
                    (Tambien conocidos como cadena de consulta a traves de la URL).
                    Cuando es la primera variable se espera con ?
                    Las que siguen a continucion se separan con &
                -->
            </ul>
        </div>
    </div>
    <!--Contenido-->
    <div class="container-fluid">
        <div class="container py-5">
            <?php
            # Y NO ES NULL
            if (isset($_GET["pagina"])) {
                if ($_GET["pagina"] == "login" || 
                $_GET["pagina"] == "register" ||
                 $_GET["pagina"] == "inicio" ||
                 $_GET["pagina"] == "editar" || 
                 $_GET["pagina"] == "salir") {
                    include "paginas/" . $_GET["pagina"] . ".php";
                } else {
                    include "paginas/error404.php";
                }
            } else {
                include "paginas/registro.php";
            }
            ?>
        </div>
    </div>
</body>

</html>