<?php
class ControladorContacto
{
    static public function ctrCrearContacto()
    {


            # code...
            if (isset($_POST["name"])) {
                # code...
                    if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["name"])) {
                        # code...
                        if (preg_match('/^[0-9]+$/', $_POST["tel_contacto"])) {
                            # code...

                            $tabla = "contacto";
                            $datos = array(
                                    "Nombre"    => $_POST["name"],
                                    "telefono"  => $_POST["tel_contacto"],
                                    "correo"  => $_POST["correo"],
                                    "mensaje"  => $_POST["message"]
                            );


                            $respuesta = ModeloContacto::MdlGuardarContacto($tabla, $datos);

                            if ($respuesta == "ok") {
                                # code...
                                 # Validacion del telefono...
                                echo '<script>Swal.fire({
                                    title: "Enviado!",
                                    text: "Pronto nos comunicaremo con usted.",
                                    imageUrl: "assets/img/sendEmail.gif",
                                    imageWidth: 400,
                                    imageHeight: 300,
                                    imageAlt: "Custom image",
                                  })</script>';  
                            }
                            else {
                                # Validacion del telefono...
                                echo '<script>Swal.fire({
                                title: "Disculpe las Molestias!",
                                text: "Tenemos un inconveniente, intente mas tarde , '.$respuesta.'",
                                confirmButtonText: "OK"
                                })</script>';                
                            
                            }




                        }else {
                            # Validacion del telefono...
                            echo '<script>Swal.fire({
                            title: "Error!",
                            text: "Formato telefonico incorrecto",
                            confirmButtonText: "OK"
                            })</script>';                
                        
                        }


                        
                    }else {
                        # code...
                        var_dump("no paso el pregmatch del nombre");
                    }
            }
    }
}



/* Generador de Objeto Contacto *//* Generador de Objeto Contactlp0ol0l0lo */