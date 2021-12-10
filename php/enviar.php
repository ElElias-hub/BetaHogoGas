<?php

    $destino="def00731999@gmail.com";
    $name=$_POST['name'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $message=$_POST['txtmensaje'];

    $asunto="CONTACTO HOGOGROUP";
    $contenido="Nombre: " . $name . "\nCorreo: " . $email . "\nEnviado el " . date('d/m/Y', time()) ."\nTelefono: " . $tel . "\nMensaje: " . $message;

    $bool1=mail($destino,$asunto,utf8_decode($contenido));

    
    if($bool1){
        print "<script>alert(\"Mensaje enviado.\");window.location='../index.html';</script>";
    }
    else{
        echo "Mensaje no enviado";
    }
    

?>