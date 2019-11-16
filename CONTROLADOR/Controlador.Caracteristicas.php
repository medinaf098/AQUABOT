<?php
class ControladorCaracteristicas
{
    static public function ctrMostrarCaracteristicas($item, $valor)
    {
        # code...
        $tabla = "Caracteristicas1";
        $respuesta = ModeloCaracteristicas::MdlMostrarCaracteristica($tabla, $item, $valor);
        return $respuesta;
        
        
        
        
        

    }

    static public function ctrMostrarSlider($item, $valor)
    {
        # code...
        $tabla = "Caracteristicas1";
        $respuesta = ModeloCaracteristicas::MdlMostrarSlider($tabla, $item, $valor);
        return $respuesta;
        
        
        
        
        

    }

    static public function ctrMostrarGaleria($item, $valor)
    {
        # code...
        $tabla = "Caracteristicas1";
        $respuesta = ModeloCaracteristicas::MdlMostrarGaleria($tabla, $item, $valor);
        return $respuesta;
        
        
        
        
        

    }

    static public function ctrMostrarSliderGaleria($item, $valor)
    {
        # code...
        $tabla = "Caracteristicas1";
        $respuesta = ModeloCaracteristicas::MdlMostrarSliderGaleria($tabla, $item, $valor);
        return $respuesta;
        
        
        
        
        

    }

  
}



?>

