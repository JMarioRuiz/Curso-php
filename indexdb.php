<?php
require_once("usuario.php");
$usuario = new Usuario(
    2,
    "Sofia",
    "Jimenez",
    "321323",
    "18",
);
//$usuario->insertar();
//var_dump($usuario->consultarTodo());
var_dump($usuario->consultarUno(1))
?>