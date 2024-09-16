<?php
require_once("persona.php");
require_once("operaciones.php");
class Proveedor extends Persona{
    use Operaciones;
    public function __construct(
        public string $cuenta = "",
        public string $banco = ""
    ){
    }

    function productos(){
        return $this->validarRFC();
    }
}

?>