<?php
//abstract class Persona
class Persona{
    // public $nombre;
    // public $apellido;
    // public $edad;
    // public $telefono;
    static $idioma;

    // public function __construct(
    //     $nombre = "",
    //     $apellido = "",
    //     $edad = 0,
    //     $telefono = "",
    // ){
    //     $this->nombre = $nombre;
    //     $this->apellido = $apellido;
    //     $this->edad = $edad;
    //     $this->telefono = $telefono;
    //     echo "Inicio del objeto";
    // }

    //constructor v8
    public function __construct(
        public int|string $nombre = 0,
        public string $apellido = "",
        public int|float $edad = 0,
        public string $telefono = "",
    ){

    }

    function hablar($tema){
        echo "Soy --- y hablo sobre $tema", $this->temaEsExtenso($tema);
    }

    protected function getTelefono(){
        return $this->telefono;
    }

    protected function setTelefono($telefono){
        $this->telefono = $this->validarTelefono($telefono);
    }

    //manera abreviada para get y set
    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value){
        switch ($name) {
            case 'telefono':
                return $this->$name = $this->validarTelefono($value);
                break;
            
            default:
                return $this->name=$value;
                break;
        }
    }

    function ver(){
        
    }

    function cantar(){

    }

    private function temaEsExtenso($tema){
        return ($tema == "Political") ? "tema extenso" : "tema no extenso";
    }
    
    private function validarTelefono($telefono){
        if(preg_match('/^[0-9]{10}$/', $telefono)){
            return $telefono;
        } else {
            return "estructura incorrecta";
        }
    }

    public function __destruct(){
        echo "Finaliza el objeto";
    }
}
?>