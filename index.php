<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOGOGAS</title>
    <link rel="icon" type="image/png" href="img/hogoweb_icon.png">

    <meta name="description" content="Página web de Hogogas, empresa dedicada
     a la venta de gasolina y combustible diésel.">

    <!-- === FONTS === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">


     <!-- === PREFETCH === -->
     <link rel="prefetch" href="facturacion.html" as="document">

     <!-- === PRELOAD === -->
    <link rel="preload" href="css/normalize.css" as="styyle">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="preload" href="css/style.css as="styyle">
    <link rel="stylesheet" href="css/style.css">


    <!-- === Script: Animated entrance === -->
    <script src='https://d33wubrfki0l68.cloudfront.net/js/fe6311b3c294cba469a3939f21603640522c41e5/aquamarine/js/animate-in.js'></script>
    <!-- === Animated entrance === -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- === JQUERY === -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- === COUNTER-UP/WAYPOINTS === -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 5,
                time: 1000
            });
        });
    </script>

</head>
<body class="page__bo">
    
    <!-- === HEADER === -->

    <header class="header">
        
        <!-- === MENU === -->

        <?php include "sections/navbar-index.php"; ?>

        <!-- === END MENU === -->
        <!-- === HOME SECTION === -->

        <div class="header_texto" id="HM">
            <br>
            <h2 class="no-margin header_texto-titulo">¡Bienvenido a HogoGroup!</h2>
            <p class="no-margin header_texto-p" >Combustibles de Transición Energética</p>

            <main class="servicios">

                <div class="servicio" >
                    <div class="iconos" data-aos="zoom-in">
                        <a href="facturacion.php">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-money" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                <rect x="9" y="3" width="6" height="4" rx="2" />
                                <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                                <path d="M12 17v1m0 -8v1" />
                            </svg>
                        </a>
                    </div>
                    <h4>FACTURACIÓN</h4>
                </div>

                <div class="servicio">
                    <div class="iconos" data-aos="zoom-in">
                        <a href="#ES">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="12" cy="11" r="3" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                            </svg>
                        </a>
                    </div>
                    <h4>ESTACIONES</h4>
                </div>

                <div class="servicio" >
                    <div class="iconos" data-aos="zoom-in">
                        <a href="contacto.php">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-mobile-message" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M11 3h10v8h-3l-4 2v-2h-3z" />
                                <path d="M15 16v4a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1h2" />
                                <path d="M10 18v.01" />
                            </svg>
                        </a>
                    </div>
                    <h4  id="SB">CONTACTO</h4>
                </div>

            </main>

        </div>

        <!-- === END HOME SECTION === -->

    </header>

    <!-- === END HEADER === -->
    <!-- === ABOUT SECTION === -->


    <div class="contenedor contenido_principal" >
        <div class="entrada__imagen">
            <picture>
               <!--<source loading="lazy" srcset="img/blog1.webp" type="imagen/webp"> -->
               <img loading="lazy" src="img/hogoweb_icon.png" alt="imagen blog">
            </picture>
            
            
        </div>

        <p > 
            Somos una empresa del sector petrolífero, dedicada a la venta de gasolinas y combustible diésel, con 
            el objetivo principal de satisfacer las necesidades de los consumidores ofreciendo calidad en el servicio, 
            a través de personal capacitado, eficiente y eficaz que garantiza la preferencia y lealtad de nuestros clientes.
            
            Misión
            Somos una empresa del sector petrolífero, dedicada a la venta de gasolinas y combustible diésel, con el 
            objetivo principal de satisfacer las necesidades de los consumidores ofreciendo calidad en el servicio, a
            través de personal capacitado, eficiente y eficaz que garantiza la preferencia y lealtad de nuestros clientes.
        </p>

        
    </div>

    <!-- === END ABOUT SECTION === -->
    <!-- === MAP SECTION === -->

    <div class="contenedor contenido_secundario" id="ES">
        <br><br><hr><br>
        <h2 class="precio__titulo no-margin">BÚSQUEDA DE ESTACIONES HOGOGROUP </h2>
        <div class="entrada__imagen">
            <div class="mapa">
                <iframe src="https://www.google.com/maps/d/embed?mid=1E3wzR2alManyLBLvtd51LrbW6ZCFhf8S"></iframe>
            </div>
        </div>
        <br>
        <a href="estaciones.php" class="boton boton--secundario" >estaciones</a>    
        
    </div>

    <!-- === END MAP SECTION === -->
    <!-- === SERVICES SECTION === -->
    
    <?php include "sections/services-index.php"; ?>

    <!-- === END SERVICES SECTION === -->
    <!-- === PRECIOS SECTION === -->

    <?php include "sections/precios-index.php"; ?>

    <!-- === END PRECIOS SECTION === -->
    <!-- === AFILACIONES SECTION === -->

    <div class="contenedor">
        <br><hr><br>
        <h2 class="precio__titulo no-margin">Nuestras Afiliaciones</h2>
        <br>
        <div class="afilaciones">
            <img src="img/afiliaciones-hogogroup.png" alt="">
        </div>
    </div>

    <!-- === END AFILACIONES SECTION === -->
    <!-- === FOOTER === -->

    <?php include "sections/footer.php"; ?>             

    <!-- === END FOOTER === -->

    <!-- -https://michalsnik.github.io/aos/_- -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
			easing: 'ease-out-back',
			duration: 1400
		});
  </script>

    <script src="js/modernizr.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>