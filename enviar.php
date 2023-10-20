<?php

$correo =$_POST['correo'];
$nombre =$_POST['nombre'];
$numero =$_POST['numero'];
$mensaje =$_POST['mensaje'];


//echo $correo . " " . $nombre." " .$numero ." " .$mensaje;

$destinatario="marcillokenny@gmail.com";
$asunto="contacta con nosotros desde la web de Animal center";
$cuerpo= '
    <html>
        <head>
            <title>Envio de correo , formulario</title>
        </head>

        <body>
            <h1>Solicitud de contacto desde correo de prueba! para Animal center </h1>
            <p>

                Contacto: '.$nombre . ' - '  . $asunto .' <br>

                Numero telefonico: '.$numero .' <br>

                Mensaje: '.$mensaje.' 


            </p>
        </body>
    </html>


';

//para el envio en formato HTML
$headers = "MIME-Version: 1.0\r\n"; 
//$headers.= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 


//direccion del remitente
$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);


echo"Correo enviado";
?>

<a href="index.html">Volver a inicio</a>





