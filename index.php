<?php

require_once 'controllers/ClienteController.php';

$controller = new ClienteController();

$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($controller->registrar()) {
        $mensaje = "Cliente registrado correctamente.";
    } else {
        $mensaje = "No se pudo registrar el cliente.";
    }
}
    if (isset($_GET['registro']) && $_GET['registro'] === 'ok') {
    $mensaje = "Cliente registrado correctamente."; 
}

$clientes = $controller->listar();

require_once 'views/clientes.php';