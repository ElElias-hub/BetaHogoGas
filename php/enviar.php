<?php

    $destino="def00731999@gmail.com";
    $name=$_POST['name'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $men=$_POST['mensaje'];

    $cabecerasCliente  = 'MIME-Version: 1.0' . "\r\n";
    $cabecerasCliente .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $asunto="CONTACTO HOGOGROUP";
    $contenido="Nombre: " . $name . "\nCorreo: " . $email . "\nEnviado el " . date('d/m/Y', time()) ."\nTelefono: " . $tel . "\nTelefono: ". $men ;

    $mail=mail($destino,$asunto,$contenido,$cabecerasCliente);
    if($mail){
        print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../Cuenta.php';</script>";
    }

?>