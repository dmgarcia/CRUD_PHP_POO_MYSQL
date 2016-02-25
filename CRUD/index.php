<?php
include_once ('modulos/Enrutador.php');
include_once ('./modulos/Controlador.php');
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD Estudiantes</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <h1>
            Bienvenido a todos los estudiantes
        </h1>
        
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="?cargar=crear">Registrar</a></li>
            </ul>
        </nav>

        <section>
            <?php
            $enrutador = new Enrutador();
            if ($enrutador->validarGET($_GET['cargar'])) {
                $enrutador->cargarVista($_GET['cargar']);
            }
            ?>
        </section>

    </body>
</html>
