<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

        <!-- STYLES CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">

        <!-- FONT AWESOME -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

        <title>Restaurante El Español &mdash; la mejor paella valenciana</title>
    </head>
    <body class="container">

      <!-- HEADBAR SECTION -->
      <section class="headbar">
        <h1 class="headbar__title">restaurante el español</h1>
        <div class="headbar__phone"><span class="fas fa-mobile-alt"></span><a href="tel:6188102327"> (618) 810 23 27</a> <span> | </span> <a href="tel:6778720289">(677) 872 02 89 (Canatlán)</a></div>
      </section>

      <!-- HEADER SECTION -->
      <header class="header">
        <div class="header__title">
          <h1>
            <span class="small-text">la mejor paella valenciana</span><br>
            <span class="big-text">¡date el gusto!</span>
          </h1>
        </div>
      </header>

      <!-- EVENTS FORM SECTION -->
      <div class="events"> <!-- events -->
        <div class="events__form"> <!-- events form -->
          <h2>Servicio de banquetes</h2>
          <form id="formContact" class="form-horizontal" method="post" class="form-horizontal" action="ajaxSubmit.php">

              <div class="form-group">

                  <input type="text" class="form-control"  placeholder=" NOMBRE" name="nombre" required>

              </div>

              <div class="form-group">

                  <input type="text" class="form-control" placeholder=" TELÉFONO" name="telefono" required>

              </div>

              <div class="form-group">

                  <input type="email" class="form-control" placeholder=" E-MAIL" name="email" required>

              </div>

              <div class="form-group">

                  <textarea class="form-control" rows="6" placeholder=" ESCRIBE AQUÍ TU MENSAJE" name="mensaje"  width="98%" required></textarea>

              </div>

              <div class="form-group">

              <button class="btn" type="submit" name="submit">
                <span class="btn__visible">Contáctanos</span>
                <span class="btn__invisible">¡Date el gusto!</span>
              </button>

              </div>

          </form><!-- ./form -->
        </div> <!-- ./events form -->

      <div class="events__logo"><!-- Company logo -->
        <img src="img/logo.png" alt="logo El Español">
      </div>
    </div> <!-- ./events -->

      <!-- DISHES SECTION -->

      <div class="dishes__title"> <!-- Section titlte -->
        <h1 class="u-big-title">Especialidad de la casa</h1>
      </div> <!-- ./Section titlte -->

      <section class="dishes"> <!-- Dishes -->
        <div class="dishes__box"> <!-- First dish -->
          <img src="img/dish-1.jpg" alt="Botana Española" class="dishes__img">
          <h2 class="dishes__name u-sub-title">Botana Española</h2>
          <p>
            Calamar y camarones a la plancha. Con un toque de ajo y especies,
            servidos sobre un cama de lechuga.
          </p>
        </div> <!-- ./First dish -->
        <div class="dishes__box"> <!-- Second dish -->
          <img src="img/dish-2.jpg" alt="Botana Española" class="dishes__img">
          <h2 class="dishes__name u-sub-title">Paella Valenciana</h2>
          <p>
            Una mezcla de ingredientes tradicionales de mar y tierra,
            con un toque de azafrán.
          </p>
        </div> <!-- ./Second dish -->
        <div class="dishes__box dish-3"> <!-- Third dish -->
          <img src="img/dish-3.jpg" alt="Botana Española" class="dishes__img">
          <h2 class="dishes__name u-sub-title">Camarones Adobados</h2>
          <p>
            Camarones bañados en salsa de la casa con chile chipotle, poblano,
            jalapeños, tomate y cebolla.
          </p>
        </div> <!-- ./Third dish -->
      </section> <!-- Dishes -->

      <button class="btn--link dishes__link" type="submit" name="submit"> <!-- Menu link button-->
        <span class="btn--link__visible"><a href="menu.html">Conoce todos nuestros platillos</a></span>
        <span class="btn--link__invisible"><a href="menu.html">¡Servicio a domicilio!</a></span>
      </button> <!-- ./Menu link button-->

      <!-- ABOUT MEDIA SECTION -->
      <div class="about__media">
        <div style="position: relative; padding-bottom: 56.25%;">
          <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/8vgZxUHJinI" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <!-- ABOUT MEDIA SECTION -->
      <div class="about__story">
        <h2 class="u-sub-title">Hace mucho tiempo...</h2>
        <p>
          El restaurante El Español fue fundado en 1996 por Fidel Alsasua Rubio un inmigrante
          originario de Pamplona a quién el pueblo de las manzanas (Canatlán, Dgo.) acogió
          con cariño y lo apodo "el español". Con los años el negocio prospero y gano
          reconocimiento gracias a su deliciosa paella valenciana la cuál se convirtió
          en su platillo estrella.
        </p>
      </div>

      <!-- TESTIMONIALS SECTION -->
      <section class="testimonials">
        <p class="item-1">
          La paella esta increíble!! De lo mejor que he probado <!--<span class="fas fa-quote-right"></span> -->
        </p>

        <p class="item-2">
          Excelente servicio, la comida esta exquisita en especial la paella y los camarones <!--<span class="fas fa-quote-right"></span>-->
        </p>

        <p class="item-3">
          Se come muy rico una de las especialidades la paella el pan de ajo todo muy delicioso <!--<span class="fas fa-quote-right"></span>-->
        </p>
      </section>

      <!-- FOOTER SECTION -->
      <section class="footer">
        <div class="footer__container">
          <div class="footer__contact">
            <h3 class="u-sub-title">Sucursales</h3>
            <div class="branchs">
              <div >
                <a href="https://www.google.com.mx/maps/place/Restaurante+El+Espa%C3%B1ol/@24.029579,-104.6537044,17z/data=!3m1!4b1!4m5!3m4!1s0x869bb7dc387a5c0b:0xa30a777ee7961d8d!8m2!3d24.0295741!4d-104.6515157">
                  <span class="fas fa-map-marker"></span> Cap. Francisco de Ibarra 1104,<br> Nueva Vizcaya, 34080 Durango, Dgo.</a> <br><br>
                  <a href="tel:6188102327"><span class="fas fa-mobile-alt"></span> (618) 810 23 27</a>
              </div>
              <div>
                <a href="https://www.google.com.mx/maps/place/Restaurante+El+Espa%C3%B1ol/@24.5273889,-104.7590489,17z/data=!4m5!3m4!1s0x869a3de0bbfa3cff:0x2166d2815e564bfc!8m2!3d24.527384!4d-104.7568602">
                  <span class="fas fa-map-marker"></span> Canatlán, Ejidal, Canatlán, Dgo.</a> <br><br>
                  <a href="tel:6778720289"><span class="fas fa-mobile-alt number-2"></span> (677) 872 02 89</a>
              </div>
            </div>
          </div>

          <div class="footer__social">
            <h3 class="u-sub-title">Síguenos</h3>
              <div class="media">
                <div>
                <p>EspanolRestaurante</p>
                <a href="https://www.facebook.com/EspanolRestaurante"><span class="fab fa-facebook-f"></span></a>
                <a href="https://www.instagram.com/espanolrestaurante/"><span class="fab fa-instagram"></span></a>
                </div>
             </div>
          </div>


        </div>
        <p class="copyright">
            MMXXVII Restaurante El Español | &copy; Copyright 2018 Leonardo Grinn.
        </p>
      </section>
    </body>
</html>


<!--
<div class="footer__social">
  <h3 class="u-sub-title">Siguenos</h3>
  <a href="https://www.facebook.com/EspDeCanatlan/"><span class="fab fa-facebook-f"></span> @EspDeCanatlan</a>
  <a href="https://www.instagram.com/espdecanatlan/"><span class="fab fa-instagram"></span> @EspDeCanatlan</a>
</div>
-->
