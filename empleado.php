<?php 
require_once("persona.php");
class Empleado extends Persona{
    public function __construct(
        public string $cargo = "",
        public string $horario = "",

    ){
        
    }

    function cocinar(){

    }
}
?>