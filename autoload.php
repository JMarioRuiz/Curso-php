<?php 

class AutoCarga{

    private function cargarClase($clase){
        $clase = strtolower($clase);
        $ruta = str_replace("\\","/",$clase).".php";
        if(file_exists( $ruta)){
            require_once($ruta);
        } else{
            echo($ruta);
        }
    }

    public function cargarRutas(){
        spl_autoload_register(array($this,"cargarClase"));
    }
}
?>