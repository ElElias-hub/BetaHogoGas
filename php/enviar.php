<?php

    $destino="def00731999@gmail.com";
    $name=$_POST["bname"];
    $tel=$_POST["btel"];
    $email=$_POST["bemail"];
    $message=$_POST["txtmensaje"];

    $asunto="CONTACTO HOGOGROUP"
    $contenido="Nombre: " . $nombre . "\nCorreo: " . $email . "\nEnviado el " . date('d/m/Y', time() .
    "\nTelefono: " . $tel . "\nMensaje: " . $message);

    mail($destino,$asunto,$contenido, utf8);
    print "<script>alert(\"Mensaje enviado.\");window.location='../index.html';</script>";


?>