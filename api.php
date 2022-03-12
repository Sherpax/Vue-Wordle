<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $conexion = new mysqli("localhost", "root", "", "diccionario");

        if (isset($_GET['w']) && !empty($_GET['w'])) {
            $word = $_GET['w'];
            //TODO: Cambiar y ponerlo con BIND
            $sqlQuery = "SELECT * 
                        FROM palabra p
                        WHERE p.nom_palabra = '$word'
                        ";
        } else {

            $sqlQuery = "SELECT * 
                        FROM palabra
                        ORDER BY RAND()
                        LIMIT 1;";
        }

        $palabra = $conexion->query($sqlQuery)->fetch_assoc();

        header('Content-Type: application/json');

        echo json_encode($palabra);

        $conexion->close();
        break;

    default:
        # code...
        break;
}
