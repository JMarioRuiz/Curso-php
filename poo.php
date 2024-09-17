<?php
//PROGRAMACION ORIENTADA A OBJETOS
// phpinfo();
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

// require_once("persona.php");
// require_once("cliente.php");
// require_once("empleado.php");
require_once("autoload.php");
// $autoCarga = new AutoCarga();
// $autoCarga->cargarRutas();
(new AutoCarga())->cargarRutas();
$jesus = new Persona("Carlos","Lopez");
$jesus->hablar("Politica");
Persona::$idioma = "Español";
echo Persona::$idioma;
//$jesus->setTelefono("81213156113131321");

//echo $jesus->getTelefono();
var_dump($jesus->edad);

echo $jesus->apellido;

$sofia = new Persona();
$sofia->nombre = "Sofia";
$sofia->hablar("K-pop");
echo $sofia->nombre;
Persona::$idioma = "Ingles";
echo Persona::$idioma;

$cliente = new Cliente();
$cliente->nombre = "Carlos";
echo $cliente->nombre;
$cliente->comer();

//type hinting
//poder enviar un argumento de tipo objeto y este se pueda resibir en un metodo
$empleado = new Empleado();
$empleado->nombre = "Luis";
$cliente->saludar($empleado);

//polimorfismo
//solamente se puede sobrescribir funciones de la clase padres sobre la clase hijo
$cliente->hablar("Gatos");

//traits
//es un mecanismo de reutilizacion de codigo en leguale de herencia simple
//autocarga
//es mandar a llamar un archivo para cargar todas las rutas de los archivos


