<?php
class ModeloContacto
{
    static public function MdlGuardarContacto($tabla, $datos)
    {
         # code...
         if ($datos != null) {
            # Guardamos en la base de datos...


            
            

            # Envia el Correo...
                        ini_set('SMTP','smtp.gmail.com');
                        ini_set('auth_username', "omedinagap@gmail.com");
                        ini_set('auth_password', "MEEDINA1820");
                        ini_set('smtp_port',465);
                        ini_set('force_sender',"omedinagap@gmail.com");



                        $to =  'medinaf098@hotmail.com';
                        
                        
                        $subject = "Solicitud de Comtacto";

                        date_default_timezone_set("America/Mazatlan");
                        $fechaI = date('l jS F Y, h:i A');
                        
                        $message = '<html>'.
                        '<br>'.
                        '<h5 style="color:#2c2c54;"> www.Acuabot.com</h5>'.
                        '<br>'.                      
                        '<br>'.
                        '<h5 style="color:#2c2c54;"> Nombre: '.$datos["Nombre"].'</h5>'.
                        '<h5 style="color:#2c2c54;"> Nombre: '.$datos["telefono"].'</h5>'.
                        '<h5 style="color:#2c2c54;"> Nombre: '.$datos["correo"].'</h5>'.
                        '<h5 style="color:#2c2c54;"> Nombre: '.$datos["mensaje"].'</h5>'.
                        '<br>'.
                        '</body>'.
                        '</html>';

                        // To send HTML mail, the Content-type header must be set
                        $headers[] = 'MIME-Version: 1.0';
                        $headers[] = 'Content-type: text/html; charset=utf-8';

                        // Additional headers
                        $headers[] = 'To: medinaf098@hotmail.com';
                        $headers[] = 'From: AcuaBot.com <Amedina@AcuaBot.net>';
                    
                        // Mail for driver and admin

                        if (mail($to, $subject, $message, implode("\r\n", $headers))) {
                            # code...
                            return "ok";

                        }else {
                            # code...
                            return "Error";
                        }





            
            
        }else {

            return "No hay nada";
            
           
        }
        

    }
}
