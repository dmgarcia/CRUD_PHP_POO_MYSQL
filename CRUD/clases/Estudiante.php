<?php

//CLASE DE CONEXION INCLUIDA
//include_once './Conexion.php';
include_once ('Conexion.php');

class Estudiante {

    //Atributos
    private $id;
    private $cedula;
    private $nombre;
    private $apellido;
    private $telefono;
    private $edad;
    private $promedio;
    private $fecha;
    private $con;

    //Metodos
    public function __construct() {
        $this->con = new Conexion();
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function listar() {
        $sql = "SELECT * FROM estudiantes";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function crear() {
        $sql2 = "SELECT * FROM estudiantes WHERE cedula = '$this->cedula'";
        $resultado = $this->con->consultaRetorno($sql2);
        
        $num = mysql_num_rows($resultado);

        if ($num != 0) {
            return FALSE;
        } else {
            $sql = "INSERT INTO estudiantes (cedula, nombre, apellido, telefono, edad,"
                    . " promedio, fecha) VALUES('{$this->cedula}', '{$this->nombre}',"
                    . " '{$this->apellido}', '{$this->telefono}', '{$this->edad}',"
                    . " '{$this->promedio}', NOW())";

            $this->con->consultaSimple($sql);
            return TRUE;
        }
    }

    public function eliminar() {
        $sql = "DELETE FROM estudiantes WHERE id = '($this->id)' ";
        $this->con->consultaSimple($sql);
    }

    public function ver() {
        $sql = "SELECT * FROM estudiantes WHERE id =  '$this->id'  LIMIT 1";
        $resultado = $this->con->consultaRetorno($sql);
        $row = mysql_fetch_assoc($resultado);

        //Set
        $this->id = $row['id'];
        $this->cedula = $row['cedula'];
        $this->apellido = $row['apellido'];
        $this->telefono = $row['telefono'];
        $this->edad = $row['edad'];
        $this->promedio = $row['promedio'];
        $this->fecha = $row['fecha'];
        
        return $row;
    }

    public function editar() {
        $sql = "UPDATE estudiantes SET nombre = '$this->nombre', apellido = '$this->apellido',"
                . "telefono = '$this->telefono', edad = '$this->edad' WHERE id = '$this->id'";
        echo $sql;
        $this->con->consultaSimple($sql);
    }

}
?>

