<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACTURACIÓN</title>
    <link rel="icon" type="image/png" href="img/hogoweb_icon.png">

    
    <meta name="description" content="Página web de Hogogas, empresa dedicada
     a la venta de gasolina y combustible diésel.">

    <!-- === FONTS === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- === PREFETCH === -->
    <link rel="prefetch" href="http://hogoe13750.ddns.net:8088/controlGasfe/" as="document">
    <link rel="prefetch" href="http://hogoe13750.ddns.net:8080/ControlGasFE/FEinicio.aspx" as="document">


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
    <!-- === GASOLINERAS SECTION === -->

    <div class="contenedor">

        <!--<h3 class="centrar-texto  facturacion__titulo">FACTURACIÓN</h3>-->
        
        <div class="gasolinera" data-aos="fade-up">

            <div class="gas__imagen">
                <picture>
                    <img loading="lazy" src="img/Gas_Chalco.PNG" alt="Foto de Gasolinera de Chalco">
                 </picture>
            </div>

            <div class="gas__informacion">
                <h4 class="no-margin facturacion__titulo">FACTURACIÓN CHALCO E13770</h4>
                <p class="gas__descripcion centrar-texto">   
                    Autopista México - Puebla 267, San Marcos Huixtoco, 56643 Méx.
                    <br>
                    Teléfono: 5569689817
                </p>
                <p class="gas_label">
                    <span class="gas__info">
                        DALE CLICK AL BOTON FACTURAR PARA PORDER REALIZAR TU FACTURA
                    </span>
                </p>
                <a href="http://hogoe13750.ddns.net:8088/controlGasfe/" class="boton boton--secundario" target="_blank">facturar</a>
            </div><!--gasolinera info-fin-->
           
        </div><!--gasolinera-fin-->

        <br>

        <div class="gasolinera" data-aos="fade-down">

            <div class="gas__imagen">
                <picture>
                    <img loading="lazy" src="img/Gas_Ixtapaluca.PNG" alt="Foto de Gasolinera de Ixtapaluca">
                 </picture>
            </div>

            <div class="gas__informacion">
                <h4 class="no-margin facturacion__titulo">FACTURACIÓN IXTAPALUCA</h4>
                <p class="gas__descripcion centrar-texto">
                    Autopista México - Puebla 400, La Cañada, 56589 Jorge Jiménez Cantú, Méx.
                    <br>
                    Teléfono: 5569682864
                </p>
                <p class="gas_label">
                    <span class="gas__info">
                        DALE CLICK AL BOTON FACTURAR PARA PORDER REALIZAR TU FACTURA
                    </span>
                </p>
                <a href="http://hogoe13750.ddns.net:8080/ControlGasFE/FEinicio.aspx" class="boton boton--secundario" target="_blank">facturar</a>
            </div><!--gasolinera info-fin-->
           
        </div><!--gasolinera-fin-->

    </div>    

    <!-- === END GASOLINERAS SECTION === -->
    <!-- === FOOTER === -->

    <?php include "sections/footer.php"; ?>   

    <!-- === END FOOTER === -->

    <!-- === ANIMACIÓN === -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
			easing: 'ease-out-back',
			duration: 1200
		});
    </script>

    <script src="js/modernizr.js"></script>
    <script src="js/menu.js"></script>

</body>
</html>