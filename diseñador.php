<?php


class Designer extends Empleado {

    // Atributo "Tipo de diseñador"
protected $tipo;


//constructor de la clase
function __construct(int $id, String $nombre, String $apellido, int $edad) {
    parent::__construct($id,$nombre,$apellido,$edad);
    }
    
    
    public function setTipo(String $tipo){
        
        if ((strtolower($tipo) == "diseñador grafico")||(strtolower($tipo) == "diseñador web") ){
         $this->tipo = $tipo;   
        }
         else{
             echo '<br>Error los tipos de Diseñador solo pueden ser Diseñador Grafico o Diseñador Web';
         }
    
    }
    
    
    public function getDatos(){

        
        $datos = "
        id: {$this->id} <br>
        Nombre: {$this->nombre} <br>
        Apellido: {$this->apellido} <br>
        Edad: {$this->edad}<br>
        Profesion: {$this->tipo}<br> 
        ";
       return $datos;
    
    }
    



    public function getTipo():String{
    
       return $this->tipo;
        
    }
    
    
    } //termina class diseñador