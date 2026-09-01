<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController
{
    private $cliente;

    public function __construct()
    {
        global $conn;
        $this->cliente = new Cliente($conn);
    }

    public function registrar()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return false;
        }

        $nombre = trim($_POST['nombre'] ?? '');
        $apellido = trim($_POST['apellido'] ?? '');
        $correo = trim($_POST['correo'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $edad = intval($_POST['edad'] ?? 0);

        return $this->cliente->registrar(
            $nombre,
            $apellido,
            $correo,
            $telefono,
            $edad
        );
    }

    public function listar()
    {
        return $this->cliente->listar();
    }
}