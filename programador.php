<?php

require_once ("Empleados.php");


class Programador extends Empleado  {

//atributos (lenguaje = lenguaje de programacion del Programador")
protected $lenguaje;
protected $profesion = "Programador";

//constructor de la clase
function __construct(int $id, String $nombre, String $apellido, int $edad) {
parent::__construct($id,$nombre,$apellido,$edad);
}


public function setLenguaje(String $lenguaje){
   
    if ((strtolower($lenguaje) == "php")||(strtolower($lenguaje) == "phyton")||(strtolower($lenguaje) == "net") ){
        $this->lenguaje = $lenguaje;   
       }
        else{
            echo '<br>Error los lenguajes que se manejan en el equipo de programadores pueden ser unicamente, PHP, NET y Phyton';
        }
    

}

public function getDatos(){

    $datos = "
  
    Nombre: {$this->nombre} <br>
    Apellido: {$this->apellido} <br>
    Edad: {$this->edad}<br>
    Lenguaje: {$this->lenguaje}<br> 
    Profesion: {$this->profesion}<br> 
    ";
   return $datos;

}



public function getLenguaje():String{

   return $this->lenguaje;
    
}


} //termina class Programador