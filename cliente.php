<?php
require_once("persona.php");
require_once("empleado.php");
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

    function saludar(Empleado $empleado){
        echo "Relicidades chef ", $empleado->nombre;
    }

    function hablar($tema){
        echo "Hola mi tema es:", $tema;
    }
}
?>