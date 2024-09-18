<?php
require_once("conexion.php");
class crud extends Conexion{
    private $pdo;
    public function __construct(
        public string $tabla
    ){
        $this->pdo = $this->conexion();   
    }

    public function consultarUno(int $id){
        try {
            $stm = $this->pdo->prepare("SELECT * FROM $this->tabla WHERE id=$id");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    public function delete(int $id){
        try {
            $stm = $this->pdo->prepare("DELETE FROM $this->tabla WHERE id=?");
            $stm->execute([$id]);
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    public function crear(string $columnas, string $marcadores, array $datos){
        $stm = $this->pdo->prepare("INSERT INTO $this->tabla $columnas VALUES $marcadores");
        $stm->execute($datos);
    }

    public function modificacion(string $columnas, int $id){
        $stm = $this->pdo->prepare("UPDATE $this->tabla SET $columnas WHERE id=$id");
        $stm->execute([$id]);
    }
}
?>