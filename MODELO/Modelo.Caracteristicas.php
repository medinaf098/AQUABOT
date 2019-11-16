<?php
require_once "conexion.php";
class ModeloCaracteristicas
{
    static public function MdlMostrarCaracteristica($tabla, $item, $valor)
    {
        # code...
        if ($item!=null) {
            # code...
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:$item");
            $stmt-> bindparam(":".$item, $valor, PDO::PARAM_STR);
            $stmt-> execute();
            return $stmt -> fetch();

            
        }else {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
             
            $stmt-> execute();
            return $stmt -> fetchAll();
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function MdlMostrarSlider($tabla, $item, $valor)
    {
        # code...
        if ($item!=null) {
            # code...
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:$item");
            $stmt-> bindparam(":".$item, $valor, PDO::PARAM_STR);
            $stmt-> execute();
            return $stmt -> fetch();

            
        }else {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE Tipo = '5'");
             
            $stmt-> execute();
            return $stmt -> fetchAll();
        }
        $stmt -> close();
        $stmt = null;

    }

    static public function MdlMostrarGaleria($tabla, $item, $valor)
    {
        # code...
        if ($item!=null) {
            # code...
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE Tipo = '6'");
            $stmt-> bindparam(":".$item, $valor, PDO::PARAM_STR);
            $stmt-> execute();
            return $stmt -> fetch();

            
        }else {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE Tipo = '6'");
             
            $stmt-> execute();
            return $stmt -> fetchAll();
        }
        $stmt -> close();
        $stmt = null;

    }


    static public function MdlMostrarSliderGaleria($tabla, $item, $valor)
    {
        # code...
        if ($item!=null) {
            # code...
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE Tipo = '10'");
            $stmt-> bindparam(":".$item, $valor, PDO::PARAM_STR);
            $stmt-> execute();
            return $stmt -> fetch();

            
        }else {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE Tipo = '10'");
             
            $stmt-> execute();
            return $stmt -> fetchAll();
        }
        $stmt -> close();
        $stmt = null;

    }
   
}
