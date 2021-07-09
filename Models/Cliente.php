<?php

use Models\Conexion;

class Cliente
{

    private $id;
    private $nombre;
    private $primerApellido;
    private $segundoApellido;
    private $telefono;
    private $email;
    private $direccion;
    private $IdTienda;
    private $foto;
    private $createAt;

    public function __construct()
    {
        $this->con = new Conexion();
    }

    public function listar()
    {
        $sql = "select concat(C.nombre, ' ', C.primerApellido, ' ', C.segundoApellido) from cliente C ";
    }
}
