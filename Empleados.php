<?php


abstract class Empleado
{
    public $id;
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


    public function getDatos(){

    }





    
} //termina la clase