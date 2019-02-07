﻿<!--<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$titulo = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	//datos para el correo
	$destinatario = "roque.d_cos@outlook.com";
	$asunto = "Contacto desde nuestra web";

	$carta = "De: $nombre \n";
	$carta .= "Correo: $email \n";
	$carta .= "Telefono: $telefono \n";
	$carta .= "Asunto : $titulo \n";
	$carta .= "Mensaje: $mensaje";

	//enviando mensaje
	mail($destinatario, $asunto, $carta);
?>-->
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./css/home.css" type="text/css" rel="stylesheet" />
    <link href="./media/favicon.ico" type="image/x-icon" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>
    <title>Mago Blanche</title>
</head>
<body>
    <a href="#" id="js_up" class="boton-subir">
        <!-- link del icono http://fontawesome.io/icon/rocket/ -->
        <i class="fa fa-rocket" aria-hidden="true"></i>
    </a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- script para que funcione al 100% el botón ir arriba -->
    <script>
        //invocamos al objeto (window) y a su método (scroll), solo se ejecutara si el usuario hace scroll en la página
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) { //condición a cumplirse cuando el usuario aya bajado 301px a más.
                $("#js_up").slideDown(300); //se muestra el botón en 300 mili segundos
            } else { // si no
                $("#js_up").slideUp(300); //se oculta el botón en 300 mili segundos
            }
        });

        //creamos una función accediendo a la etiqueta i en su evento click
        $("#js_up i").on('click', function (e) {
            e.preventDefault(); //evita que se ejecute el tag ancla (<a href="#">valor</a>).
            $("body,html").animate({ // aplicamos la función animate a los tags body y html
                scrollTop: 0 //al colocar el valor 0 a scrollTop me volverá a la parte inicial de la página
            }, 700); //el valor 700 indica que lo ara en 700 mili segundos
            return false; //rompe el bucle
        });

    </script>

    <!--Principal-->
    <div class="principal h-100 f">
        <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
            <a class="navbar-brand blanche-button" href="#imagentop">BLANCHE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link navbar-button" href="#quiensoy">QUIEN SOY?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-button" href="#servicios">SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-button" href="#show">SHOWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-button" href="#contacto">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--Imagenes de Inicio-->
        <div id="imagentop" class="container-fluid">
            <div>
                <img class="float-left blanche-img" src="./media/blanche.png" alt="balnche" />
            </div>
            <div>
                <img class="mago-img" src="./media/mago.png" alt="mago blanche" />
            </div>
        </div>
    </div>


    <!--Quien soy-->
    <div id="quiensoy" class="firstcolor">
        <div class="container-fluid">
            <div class="row justify-content-center background">
                <div class="col-xs-12 col-lg-3">
                    <div class="border-box">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-30 img-thumbnail" src="./media/quiensoy/asd2.jpg" alt="First slide" style="height:425px; width:350px;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-70 img-thumbnail" src="./media/quiensoy/DSC8147.jpg" alt="Second slide" style="height:425px; width:350px;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-70 img-thumbnail" src="./media/quiensoy/DSC8157.jpg" alt="Third slide" style="height:425px; width:350px;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-70 img-thumbnail" src="./media/quiensoy/DSC8153.jpg" alt="four slide" style="height:425px; width:350px;">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-6">
                    </br>
                    <h3 class="title-quiensoy">QUIEN SOY?</h3>
                    <P class="text-justify text-color">
                        Mi nombre es Matias Blanche, nacido en la ciudad de Rosario, provincia de Santa Fe, Argentina.
                        A los 16 años de edad, comencé mis estudios en el arte de la Magia, orientado por un reconocido mago rosarino.
                        Con el correr de los años, incrementé mis conocimientos asistiendo a congresos, conferencias, y realizando diversos
                        cursos de stand up, ventriloquóa, actuación, clown, improvisación y humor.
                        Gracias a estos conocimientos, es que construyo un personaje divertido y muy particular, ofreciendo variedad y
                        situaciones poco cotidianas; buscando siempre el humor y asombro del público.
                        Una experiencia única de magia y humor para toda la familia.
                    </P>

                </div>
            </div>
        </div>
    </div>


    <!--Servicios-->
    <div id="servicios" class="second-color">
        <div>
            <h1 class="title-Service top-container topper">SERVICIOS</h1>
        </div>
        <div class="row top-container topper">
            <div class="offset-lg-1 col-lg-3">
                <div class="carta-box">
                    <div class="carta">
                        <div class="cara justify-content-center">
                            <img class="rounded-circle border border-warning" src="./media/cartas/corazon2.png" width="270" height="270px">
                        </div>
                        <div class="cara detras justify-content-center">
                            <img class="rounded-circle border border-warning" src="./media/servicios/received.jpeg" width="270" height="270px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="title-prop top-container topper top text-center">Magia Infantil</h3>
                <p class="text-justify text-color ">
                    Un show que combina magia, clown, globología y humor, pensado especialmente para niños.
                    Se utilizan elementos coloridos que atraen la atención de los niños.
                    Un show para chicos, que también disfrutan los grandes.
                </p>
            </div>
        </div>
        <div class="top row serv-color">
            <div class="offset-lg-1 col-lg-6">
                <h3 class="title-prop top-container topper top text-center">Magia y Humor para adultos</h3>
                <br/>
                <p class="text-justify text-color ">Ideal para cumpleaños, eventos empresariales, casamientos, despedidas, ocasiones especiales.</p>
            </div>
            <div class="col-lg-3">
                <div class="carta-box">
                    <div class="carta">
                        <div class="cara">
                            <img class="rounded-circle border border-warning" src="./media/cartas/picas2.png" width="270" height="270px">
                        </div>
                        <div class="cara detras">
                            <img class="rounded-circle border border-warning" src="./media/servicios/DSC-0042.JPG" width="270" height="270px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="margin-8-percent row top">
            <div class="offset-lg-1 col-lg-3">
                <div class="carta-box">
                    <div class="carta">
                        <div class="cara">
                            <img class="rounded-circle border border-warning" src="./media/cartas/diamante2.png" width="270" height="270px">
                        </div>
                        <div class="cara detras">
                            <img class="rounded-circle border border-warning" src="./media/servicios/recepcion.png" width="270" height="270px">
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-6">
                    <h3 class="title-prop top-container topper top text-center">Recepciones</h3>
                    <p class="text-justify text-color ">
                        Comúnmente conocido como magia de cerca, o close up, donde la magia ocurre frente a los ojos de los invitados, e incluso en sus mismas manos.
                        Se utilizan elementos como cartas, anillos, bandas elásticas, pañuelos y, en ocasiones, elementos que puedan proporcionar los mismos invitados.
                        Se realizan efectos rápidos y sorpresivos, ofreciendo además la cuota de humor que caracteriza al artista.
                        Magia llevada hacia el invitado, donde todo ocurrirá tan cerca que su asombro será inevitable.
                    </p>
                </div>
            </div>
        <div class="top row serv-color">
            <div class="offset-lg-1 col-lg-6">
                <h3 class="title-prop top-container top topper text-center">Apariciones de Agasajados</h3>
                <br/>
                <p class="text-justify text-color ">Tenga una aparición única en su evento. El mago presenta una pequeña rutina de efectos rápidos y visuales, para luego dar paso a la aparición del agasajado; logrando así una entrada única e inigualable, la cual nadie olvidará.</p>
            </div>
            <div class="col-lg-3">
                <div class="carta-box">
                    <div class="carta">
                        <div class="cara">
                            <img class="rounded-circle border border-warning" src="./media/cartas/trebol2.png" width="270" height="270px">
                        </div>
                        <div class="cara detras">
                            <img class="rounded-circle border border-warning" src="./media/servicios/caja.png" width="270" height="270px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Contacto-->
    <div id="contacto" class="four-color">
        <div class="contacto topp">
            <h1 class="text-center top title-Service">CONTACTO</h1>
            <form action="index.php" method="post">
                <div class="row">
                    <div class="col-sm-12 offset-lg-1 col-lg-5 margin-2-0">
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="col-sm-12 col-lg-5 margin-2-0">
                        <input  name="email" type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-sm-12 offset-lg-1 col-lg-5 margin-2-0">
                        <input name="telefono" type="text" class="form-control" placeholder="Telefono" required>
                    </div>
                    <div class="col-sm-12 col-lg-5 margin-2-0">
                        <input name="asunto" type="text" class="form-control" placeholder="Asunto" required>
                    </div>
                    <div class="col-sm-12 offset-lg-1 col-lg-10 margin-2-0">
                        <textarea name="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje" required></textarea>
                    </div>
                </div>
                <div class="offset-lg-8 text-center margin-2-0 ">
                    <input class="bottom-contacto btn btn-info prop-btn btn-lg" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>

    <!--Show-->

    <div id="show" class="second-color">
        <script>
    window.twttr = (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0],
                    t = window.twttr || {};
                if (d.getElementById(id)) return t;
                js = d.createElement(s);
                js.id = id;
                js.src = "https://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);

                t._e = [];
                t.ready = function (f) {
                    t._e.push(f);
                };

                return t;
            }(document, "script", "twitter-wjs"));
        </script>

        <div>
            <h1 class="title-Service top-container topper">SHOWS</h1>
        </div>
        <div class="row top-container topper col-xs-12">
            <div class="col-lg-5 offset-lg-1 text-center top">
                <h1 class="title-prop">Magia comica, Unipersonal</h1>
                <p class="text-show">Un artista versátil y disparatado que combina distintas disciplinas logrando un momento único de magia y humor</p>
                <div class="row bottom justify-content-center topper">
                    <a class="twitter-share-button"
                       href="http://magoblanche.com/posts/view/4/magia-comica-unipersonal"
                       data-size="large">
                        Tweet
                    </a>
                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fmagoblanche.com%2Fposts%2Fview%2F4%2Fmagia-comica-unipersonal&layout=button&size=large&mobile_iframe=true&width=99&height=28&appId" width="99" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
                <div class="row justify-content-center topper bottom-show">
                    <img src="./media/show/IMG-20170907-WA0005.jpg" alt="..." class="margin-4-percent img-responsive rounded-circle border border-warning img-show-sized">
                    <img src="./media/show/IMG-20170907-WA0007.jpg" alt="..." class="margin-4-percent img-responsive rounded-circle border border-warning img-show-sized">
                    <img src="./media/show/IMG-20170907-WA0009.jpg" alt="..." class="margin-4-percent img-responsive rounded-circle border border-warning img-show-sized">
                </div>
            </div>
            <div class="margin-left--9 text-center offset-xs-1 col-xs-5 col-lg-5">
                <img src="./media/IMG-20170907-WA0004.jpg" class=" img-responsive size-show border border-warning" alt="show">
            </div>
        </div>
    </div>

    
    <!-- Footer -->
<footer class="page-footer footer font-small bg-dark pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
          <!-- Content -->
          <h5 class="text-uppercase">Matias Blanche</h5>
          <p>TEL: +54 341-6472361.</p>
          <p>MAIL: matiaseblanche@hotmail.com</p>
            <!--Facebook-->
        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
            <ul class=" tupper top list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/magoblanche/" class="fb-ic social-color">
                        <i class="fab fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.instagram.com/magoblanche/" class="ins-ic social-color">
                        <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                </li>
                
                <li class="list-inline-item">
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                </li>
            </ul>
        </div>  
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center bg-secondary py-3">© 2018 Copyright:
      <a href=""> </a>
    </div>
    <!-- Copyright -->

</footer>
  <!-- Footer -->
</body>
</html>