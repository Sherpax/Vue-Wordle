<?php
header('Content-Type: application/json');

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $conexion = new mysqli("localhost", "root", "", "database");

        if (isset($_GET['w']) && !empty($_GET['w'])) {
            $word = $_GET['w'];

            $sqlQuery = "SELECT * 
                        FROM palabra p
                        WHERE p.nom_palabra = ?
                        ";
            $sqlQuery = $conexion->prepare($sqlQuery);
            $sqlQuery->bind_param("s", $word);
            $resultado = $sqlQuery->execute();
            $palabra = $sqlQuery->get_result()->fetch_assoc();
        } else {

            $sqlQuery = "SELECT * 
                        FROM palabra
                        ORDER BY RAND()
                        LIMIT 1;";
            $palabra = $conexion->query($sqlQuery)->fetch_assoc();
        }

        echo json_encode($palabra);

        $conexion->close();
        break;

    default:
        break;
}
