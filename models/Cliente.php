<?php

class Cliente
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function registrar($nombre, $apellido, $correo, $telefono, $edad)
    {
        $sql = "INSERT INTO clientes 
                (nombre, apellido, correo, telefono, edad)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            return false;
        }

        $stmt->bind_param(
            "ssssi",
            $nombre,
            $apellido,
            $correo,
            $telefono,
            $edad
        );

        return $stmt->execute();
    }

    public function listar()
    {
        $sql = "SELECT id, nombre, apellido, correo, telefono, edad, fecha_registro
                FROM clientes
                ORDER BY id DESC";

        $resultado = $this->conn->query($sql);

        return $resultado;
    }
}