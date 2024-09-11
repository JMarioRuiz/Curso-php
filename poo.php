<?php
//PROGRAMACION ORIENTADA A OBJETOS
// phpinfo();
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

require_once("persona.php");
$jesus = new Persona("Carlos","Lopez");
$jesus->hablar("Politica");
Persona::$idioma = "Español";
echo Persona::$idioma;
$jesus->setTelefono("81213156113131321");

echo $jesus->getTelefono();
var_dump($jesus->edad);

echo $jesus->apellido;

$sofia = new Persona();
$sofia->nombre = "Sofia";
$sofia->hablar("K-pop");
echo $sofia->nombre;
Persona::$idioma = "Ingles";
echo Persona::$idioma;