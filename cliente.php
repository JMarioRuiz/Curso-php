<?php
require_once("persona.php");
class Cliente extends Persona{
    public function __construct(
        public bool $esFrecuente = false,
        public string $correo = "",
    ){

    }
    
    function comer(){
        $this->setTelefono("1234567890");
        echo $this->getTelefono();
    }
}
?>