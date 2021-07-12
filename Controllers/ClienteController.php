<?php

namespace Controllers;


use Cliente as Cliente;

class ClienteController
{

    private $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente();
    }

    public function index()
    {
        $datos = $this->cliente->listar();
        return $datos;
    }

    public function agregar()
    {
        if (!$_POST) {
            $datos = $this->seccion->listar();
            return $datos;
        } else {
            $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
            $limite = 700;
            if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024) {
                $nombre = date('is') . $_FILES['imagen']['name'];
                $ruta = "Views" . DS . "template" . DS . "imagenes" . DS . "avatars" . DS . $nombre;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $this->cliente->set("nombre", $_POST['nombre']);
                $this->cliente->set("primerApellido", $_POST['primer_apellido']);
                $this->cliente->set("segundoApellido", $_POST['segundo_apellido']);
                $this->cliente->set("telefono", $_POST['telefono']);
                $this->cliente->set("email", $_POST['email']);
                $this->cliente->set("direccion", $_POST['direccion']);
                $this->cliente->set("imagen", $nombre);
                $this->cliente->add();
                header("Location: " . URL . "clientes");
            }
        }
    }
}
$clientes = new ClienteController();
