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
    private $foto;
    private $createAt;

    private $con;

    public function __construct()
    {
        $this->con = new Conexion();
    }

    public function listar()
    {
        $sql = "select C.NOMBRE. concat(C.PRIMER_APELLIDO, ' ', C.SEGUNDO_APELLIDO) apellidos from clientes C ";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }

    public function add()
    {
        $sql = "INSERT INTO clientes(id, nombre, primer_apellido, segundo_apellido, telefono, email, direccion, foto, create_at) 
        VALUES(null, '{$this->nombre}','{$this->primerApellido}','{$this->segundoApellido}','{$this->telefono}','{$this->email}',
        '{$this->direccion}','{$this->foto}', NOW()";

        $this->con->consultaSimple($sql);
    }

    public function delete()
    {
        $sql = "DELETE FROM clientes WHERE id = '{$this->id}'";
        $this->con->consultaSimple($sql);
    }

    public function update()
    {
        $sql = "UPDATE FROM clientes SET nombre = '{$this->nombre}', primer_apellido = '{$this->primerApellido}',
        segundo_apellido = '{$this->segundoApellido}', telefono = '{$this->telefono}', email = '{$this->email}', 
        direccion='{$this->direccion}' WHERE id = '{$this->id}'";
        $this->con->consultaSimple($sql);
    }

    public function view()
    {
        $sql = "SELECT c FROM clientes c WHERE id = '{$this->id}";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }
}
