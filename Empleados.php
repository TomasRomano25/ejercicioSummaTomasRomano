<?php

class Empleado
{
    protected $id;
    protected $nombre;
    protected $apellido;
    protected $edad;


    function __construct($id, $nombre, $apellido, $edad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }


    public function getDatos()
    {
    }


    public function GetEdad(){

     return $this->edad;

    }

    public function GetId(){


        return $this->id;
    }
} //termina la clase