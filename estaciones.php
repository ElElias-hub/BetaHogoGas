<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTACIONES</title>
    <link rel="icon" type="image/png" href="img/hogoweb_icon.png">

    <meta name="description" content="Página web de Hogogas, empresa dedicada
     a la venta de gasolina y combustible diésel.">

    <!-- === FONTS === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">


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

    <!-- === MAP === -->
    <div class="contenedor contenido_estaciones" >

        <h2 class="precio__titulo">búsqueda de estaciones hogogroup</h2>

        <div class="mapa">
            <iframe src="https://www.google.com/maps/d/embed?mid=1E3wzR2alManyLBLvtd51LrbW6ZCFhf8S" width="640" height="480"></iframe>
        </div>
        
    </div>

     <!-- === END MAP === -->
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