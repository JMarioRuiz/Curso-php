<?php
class Conexion{
    public function __construct(
        public string $driver = "mysql",
        public string $host = "localhost",
        public string $user = "root",
        public string $pass = "",
        public string $dbName = "sunny_side",
        public string $charset = "utf8"
    ){

    }

    protected function conexion(){
        try {
            $pdo = new PDO("$this->driver:host=$this->host;
            dbname=$this->dbName;
            charset=$this->charset",$this->user);
            return $pdo;
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }
}
?>