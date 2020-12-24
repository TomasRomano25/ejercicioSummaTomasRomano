<?php
require_once("Empleados.php");
require_once("programador.php");
require_once("diseñador.php");

//creo un array de empleados para guardarlos y para poder utilizarlos.
$listaEmpleados = array();


$TomasProgramador = new Programador(1, "Tomas", "Romano", 25);
$TomasProgramador->setLenguaje("php");

$LuciaDiseñadora = new Designer(2, "Lucia", "Gonzalez", 20);
$LuciaDiseñadora->setTipo("diseñador Grafico");

$MartinGomez = new Designer(3, "Martin", "Gomez", 24);
$MartinGomez->setTipo("diseñador web");

$MartinaRodriguez = new Programador(4, "Martina", "Rodriguez", 45);
$MartinaRodriguez->setLenguaje("Phyton");


//Inserto empleados en la lista de la empresa mediante un Array Push.
array_push($listaEmpleados, $LuciaDiseñadora);
array_push($listaEmpleados, $TomasProgramador);
array_push($listaEmpleados, $MartinGomez);
array_push($listaEmpleados, $MartinaRodriguez);


echo '<h2>Lista de Empleados</h2>';
foreach ($listaEmpleados as $empleado) {

    echo $empleado->getDatos();
    echo '<br>';
}

//para buscar un empleado por id necesitan pasar por parametro el id en primer lugar y la lista en donde se encuentra.
getEmpleadoById(1, $listaEmpleados);


//funcion para buscar empleado por id
function getEmpleadoById(int $id, $listaEmpleados)
{
    if (!empty($id)) {

        echo '<h1>Realizaste una busqueda por empleado y el resultado fue:</h1>';


        foreach ($listaEmpleados as $empleado) {

            if ($empleado->getId() == $id) {

                echo $empleado->getDatos();
            }
        }
    } else {

        echo 'Error, los campos estan vacios, Porfavor Vuelve a Intentarlo.';
    }
}


//Calcular Promedio de edad en los empleados de la empresa.
function calcularPromedioEdad($listaEmpleados){
$suma = 0;
$cantidadDeEmpleados = count($listaEmpleados);
    foreach ($listaEmpleados as $empleado){

    $suma += $empleado->getEdad();


    }

echo '<h1> Promedio de edad en los empleados de la empresa </h1>';
echo ($suma / $cantidadDeEmpleados);

}


calcularPromedioEdad($listaEmpleados);