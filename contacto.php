<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTO</title>
    <link rel="icon" type="image/png" href="img/hogoweb_icon.png">

    
    <meta name="description" content="Página web de Hogogas, empresa dedicada
     a la venta de gasolina y combustible diésel.">

     <!-- === FONTS === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- === ICONOS === -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- === PRELOAD === -->
    <link rel="preload" href="css/normalize.css" as="styyle">
    <link rel="stylesheet" href="css/normalize.css">
     
    <link rel="preload" href="css/style.css as="styyle">
    <link rel="stylesheet" href="css/style.css">

    <!-- === Script: Animated entrance === -->
    <script src='https://d33wubrfki0l68.cloudfront.net/js/fe6311b3c294cba469a3939f21603640522c41e5/aquamarine/js/animate-in.js'></script>
    <!-- === Animated entrance === -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body class="page__bo">

    <!-- === HEADER === -->
    <header class="headerr">
        <!-- === MENU === -->

        <?php include "sections/navbar.php"; ?>

        <!-- === END MENU === -->
    </header>
    
    <!-- === END HEADER === -->
    <!-- === FORMULARIO === -->

    <main class="contenedor">

        <div class="contacto-bg">
            <br>
            <h2 class="contacto__titulo no-margin">Contacto</h2>
            <br>
        </div>


        <form class="formulario" name="Contacto" action="php/enviar.php" method="post">
            <div class="campo">
                <label class="campo__label" 
                for="bname">Nombre</label>
                <input 
                class="campo__field"
                id="bname" name="name" type="text" placeholder="Tu Nombre">
            </div>
            <div class="campo">
                <label class="campo__label" 
                for="btel">Telefono</label>
                <input 
                class="campo__field"
                id="btel" name="tel" type="tel" placeholder="Tu Telefono">
            </div>
            <div class="campo">
                <label class="campo__label" 
                >Email</label>
                <input 
                class="campo__field"
                type="email" name="email" placeholder="Tu Email">

            </div>
            <div class="campo">
                <label class="campo__label" 
                for="txtmensaje">Mensaje</label>
                <textarea 
                class="campo__field campo__field--textarea" id="txtmensaje" name="mensaje" cols="20" rows="5"></textarea>

            </div>

            <div class="campo">
                <input type="submit" name="enviar" value="Enviar" class="boton boton--primario">
            </div>
        </form>

    </main>

    <!-- === END FORMULARIO === -->
    <!-- === CONTACTO === -->


    <div class="contenedor">

        <!--<h3 class="centrar-texto  facturacion__titulo">FACTURACIÓN</h3>-->
        
        <div class="gasolinera">

            <div class="gas__imagen">
                <picture>
                    <img loading="lazy" src="img/ubbicacion_chalco_qr.png" alt="Imagen QR Chalco"
                    data-aos="fade-up" width="250px" height="250px">
                </picture>
            </div>

            <div class="gas__informacion">
                <h4 class="no-margin facturacion__titulo">GASOLINERA CHALCO E13770</h4>
                <p class="gas__descripcion centrar-texto">   
                    Autopista México - Puebla 267, San Marcos Huixtoco, 56643 Méx.
                </p>

                <p class="gas__info">
                    Escanea el QR para saber nuestra ubicación o contáctanos por WhatsApp.
                </p>
                <a href="https://api.whatsapp.com/send/?phone=5215569689817&text&app_absent=0" class="boton boton--secundario" target="_blank">
                    ESCRÍBENOS <i class="fa fa-whatsapp" aria-hidden="true" ></i>
                </a>
                 
            </div><!--gasolinera info-fin-->
           
        </div><!--gasolinera-fin-->

        <br>

        <div class="gasolinera" >

            <div class="gas__imagen">
                <picture>
                    <img loading="lazy" src="img/ubicacion_ixta_qr.png" alt="Imagen QR Ixtapaluca"
                    data-aos="fade-down" width="250px" height="250px">
                 </picture>
            </div>

            <div class="gas__informacion">
                <h4 class="no-margin facturacion__titulo">GASOLINERA IXTAPALUCA E13750</h4>
                <p class="gas__descripcion centrar-texto">
                    Autopista México - Puebla 400, La Cañada, 56589 Jorge Jiménez Cantú, Méx.
                </p>
                <p class="gas__info">
                    Escanea el QR para saber nuestra ubicación o contáctanos por WhatsApp.
                </p>
                <a href="https://api.whatsapp.com/send/?phone=5215569682864&text&app_absent=0" class="boton boton--secundario" target="_blank">
                    ESCRÍBENOS <i class="fa fa-whatsapp" aria-hidden="true"></i>
                </a>
                 
            </div><!--gasolinera info-fin-->
           
        </div><!--gasolinera-fin-->

    </div>   

    <!-- === END CONTACTO === -->
    <!-- === FOOTER === -->

    <?php include "sections/footer.php"; ?>   

    <!-- === END FOOTER === -->

<!-- === ANIMACIÓN === -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
          easing: 'ease-out-back',
          duration: 350
      });
</script>

    <script src="js/modernizr.js"></script>
    <script src="js/menu.js"></script>

</body>
</html>