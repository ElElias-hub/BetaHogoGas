<?php

    //$destino="def00731999@gmail.com";
    //$name=$_POST['name'];
    //$tel=$_POST['tel'];
    //$email=$_POST['email'];
    //$message=$_POST['txtmensaje'];

    //$asunto="CONTACTO HOGOGROUP";
    //$contenido="Nombre: " . $name . "\nCorreo: " . $email . "\nEnviado el " . date('d/m/Y', time()) ."\nTelefono: " . $tel . "\nMensaje: " . $message;

    //mail($destino,$asunto,utf8_decode($contenido));

    //print "<script>alert(\"Mensaje enviado.\");window.location='../index.html';</script>";


    if(isset($_POST['enviar'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['txtmensaje'])){

            $destino="def00731999@gmail.com";
            $name=$_POST['name'];
            $tel=$_POST['tel'];
            $email=$_POST['email'];
            $message=$_POST['txtmensaje'];

            $asunto="CONTACTO HOGOGROUP";
            $contenido="Nombre: " . $name . "\nCorreo: " . $email . "\nEnviado el " . date('d/m/Y', time()) ."\nTelefono: " . $tel . "\nMensaje: " . $message;

            $mail=mail($destino,$asunto,utf8_decode($contenido));

            if($mail){
                print "<script>alert(\"Mensaje enviado exitosamente.\");window.location='../index.html';</script>";
            }
            else{
                echo "Mensaje no enviado";
            }

        }
    }

?>