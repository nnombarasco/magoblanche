﻿<?php

$filledPost = !empty($_POST['Nombre']) 
            && !empty($_POST['Email']) 
            && !empty($_POST['Telefono']) 
            && !empty($_POST['Asunto']) 
            && !empty($_POST['Nombre']);
$validCaptcha = false;

    if($filledPost && !empty($_POST['g-recaptcha-response'])) {

            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $fields = [
                'secret'=> '6Lce358UAAAAACYX034OJ5O68mjBf-R0kBspc8rm',
                'response' => $_POST['g-recaptcha-response'],
            ];

            $fields_string = http_build_query($fields);

            $ch = curl_init();

            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch,CURLOPT_POST, true);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

            $result = json_decode(curl_exec($ch), true);
            curl_close($ch);

            $validCaptcha = !empty($result['success']) && $result['success'] == true;

            if ($validCaptcha) { 
            $destinatario = "rgonzalezfro@gmail.com"; //TODO: REPLACE WITH MATIAS MAIL
            $asunto = "Contacto desde la web";
            $nombre = $_POST['Nombre'];
            $email = $_POST['Email'];
            $telefono = $_POST['Telefono'];
            $titulo = $_POST['Asunto'];
            $mensaje = $_POST['Mensaje'];
            if($nombre != NULL && $email != NULL && $telefono != NULL){
                $carta = "De: $nombre \n";
                $carta .= "Correo: $email \n";
                $carta .= "Telefono: $telefono \n";
                $carta .= "Asunto : $titulo \n";
                $carta .= "Mensaje: $mensaje";
                
                mail($destinatario, $asunto, $carta);
            }
        }
    }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./media/favicon.ico" type="image/x-icon" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+13px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"async defer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="./css/home.css" type="text/css" rel="stylesheet" />
    <title>Mago Blanche</title>
</head>
<body>
    <a href="#" id="js_up" class="boton-subir">
        <i class="fa fa-rocket" aria-hidden="true"></i>
    </a>

    <!-- script para que funcione al 100% el botón ir arriba -->
    <script>
        function goToSection(section){
            window.location.href=section;
            $(".navbar-collapse").removeClass("show");
        }
        function recaptchaCallback(){
            $('.g-recaptcha').removeClass('captchaError');
            $('.emailError').remove();
            $('.emailSuccess').remove();
        }
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) { 
                $("#js_up").slideDown(300); 
            } else { 
                $("#js_up").slideUp(300);
            }
        });

        $("#js_up i").on('click', function (e) {
            e.preventDefault(); 
            $("body,html").animate({
                scrollTop: 0 
            }, 700); 
            return false;
        });
    </script>

    <!--Principal-->
    <section id="inicio" class="principal">
        <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" id="nav-main">
            <a class="navbar-brand blanche-button" href="#inicio">MAGO BLANCHE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a onClick="goToSection('#quiensoy');return false" class="nav-link navbar-button">QUIEN SOY?</a>
                    </li>
                    <li class="nav-item">
                        <a onClick="goToSection('#servicios');return false" class="nav-link navbar-button">SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a onClick="goToSection('#show');return false" class="nav-link navbar-button">SHOWS</a>
                    </li>
                    <li class="nav-item">
                        <a onClick="goToSection('#contacto');return false" class="nav-link navbar-button">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--Imagenes de Inicio-->
        <div class="container-fluid d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 flex-column d-flex justify-content-center">
                        <img class="w-100" src="./media/blanche.png" alt="blanche" />
                    </div>
                    <div class="col-lg-4">
                        <img src="./media/mago.png" alt="mago blanche" />
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center container-fluid d-lg-none d-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="./media/mago_mobile.png" alt="mago blanche" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Quien soy-->
    <section id="quiensoy" class="firstcolor">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xs-12 col-lg-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block" src="./media/quiensoy/asd2.jpg" alt="First slide" style="height:425px; width:350px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="./media/quiensoy/DSC8147.jpg" alt="Second slide" style="height:425px; width:350px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="./media/quiensoy/DSC8157.jpg" alt="Third slide" style="height:425px; width:350px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="./media/quiensoy/DSC8153.jpg" alt="four slide" style="height:425px; width:350px;">
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
                <div class="col-xs-12 col-lg-6">
                    </br>
                    <h3 class="title-quiensoy margin-8-percent">QUIEN SOY?</h3>
                    <P class="text-justify ">
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
    </section>


    <!--Servicios-->
    <section id="servicios" class="second-color">
        <div>
            <h1 class="title-Service top-container topper margin-8-percent">SERVICIOS</h1>
        </div>
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6">
                    <h3 class="title-prop top-container topper top margin-8-percent">Magia Infantil</h3>
                    <p class="text-justify  ">
                        Un show que combina magia, clown, globología y humor, pensado especialmente para niños.
                        Se utilizan elementos coloridos que atraen la atención de los niños.
                        Un show para chicos, que también disfrutan los grandes.
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="carta-box">
                        <div class="carta">
                            <div class="cara">
                                <img class="rounded-circle" src="./media/cartas/corazon2.png" width="270" height="270px">
                            </div>
                            <div class="cara detras">
                                <div class="image-container rounded-circle">
                                    <img src="./media/servicios/received.jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="title-prop top-container topper top">Magia y Humor para adultos</h3>
                    <br/>
                    <p class="text-justify  ">Ideal para cumpleaños, eventos empresariales, casamientos, despedidas, ocasiones especiales.</p>
                </div>
                <div class="col-lg-6">
                    <div class="carta-box">
                        <div class="carta">
                            <div class="cara">
                                <img class="rounded-circle" src="./media/cartas/picas2.png" width="270" height="270px">
                            </div>
                            <div class="cara detras">
                                <div class="image-container rounded-circle">
                                    <img src="./media/servicios/DSC-0042.JPG">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6">

                    <h3 class="title-prop top-container topper top">Recepciones</h3>
                    <br />
                    <p class="text-justify  ">
                        Comúnmente conocido como magia de cerca, o close up, donde la magia ocurre frente a los ojos de los invitados, e incluso en sus mismas manos.
                        Se utilizan elementos como cartas, anillos, bandas elásticas, pañuelos y, en ocasiones, elementos que puedan proporcionar los mismos invitados.
                        Se realizan efectos rápidos y sorpresivos, ofreciendo además la cuota de humor que caracteriza al artista.
                        Magia llevada hacia el invitado, donde todo ocurrirá tan cerca que su asombro será inevitable.
                    </p>
                </div>
                <div class="col-lg-6 align-self-start">
                    <div class="carta-box">
                        <div class="carta">
                            <div class="cara">
                                <img class="rounded-circle" src="./media/cartas/diamante2.png" width="270" height="270px">
                            </div>
                            <div class="cara detras">
                                <div class="image-container rounded-circle">
                                    <img src="./media/servicios/recepcion.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="title-prop top-container top topper">Apariciones de Agasajados</h3>
                    <br/>
                    <p class="text-justify  ">Tenga una aparición única en su evento. El mago presenta una pequeña rutina de efectos rápidos y visuales, para luego dar paso a la aparición del agasajado; logrando así una entrada única e inigualable, la cual nadie olvidará.</p>
                </div>
                <div class="col-lg-6">
                    <div class="carta-box">
                        <div class="carta">
                            <div class="cara">
                                <img class="rounded-circle" src="./media/cartas/trebol2.png" width="270" height="270px">
                            </div>
                            <div class="cara detras">
                                <div class="image-container rounded-circle">
                                    <img src="./media/servicios/caja.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Contacto-->
    <section id="contacto" class="four-color">
        <div class="container">
            <div class="d-flex justify-content-center margin-8-percent">
                <h1 class="text-center top title-Service">CONTACTO</h1>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                    <ul class="list-unstyled text-center container">
                        <li class="list-item">
                            <a href="https://wa.me/543413542015" target="_blank" class="ins-ic text-secondary social-color">
                                <i class="float-left fab fa-whatsapp fa-lg mr-md-5 mr-3 fa-2x"></i>
                                <p class="d-inline">+54 341-6472361</p>
                            </a>
                            
                        </li>
                        <li class="list-item">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/magoblanche/" target="_blank" class="fb-ic text-secondary social-color">
                                <i class="float-left fab fa-facebook fa-lg mr-md-5 mr-3 fa-2x"></i>
                                <p class="d-inline">/magoblanche</p>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="https://www.instagram.com/magoblanche/" target="_blank" class="ins-ic text-secondary social-color ">
                                <i class="float-left fab fa-instagram fa-lg mr-md-5 mr-3 fa-2x"></i>
                                <p class="d-inline">/magoblanche</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <hr class="clearfix w-100 d-lg-none">
                <div class="col-lg-6 col-md-12">
                    <form method="POST">
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-12 offset-lg-1 col-lg-10 margin-2-0">
                                <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required <?php if ($filledPost && !$validCaptcha) {echo('value="'.$_POST['Nombre'].'"');} ?>>
                            </div>
                            <div class="col-sm-12 col-lg-10 margin-2-0">
                                <input type="email" name="Email" class="form-control" placeholder="Email" required <?php if ($filledPost && !$validCaptcha) {echo('value="'.$_POST['Email'].'"');} ?>>
                            </div>
                            <div class="col-sm-12 offset-lg-1 col-lg-10 margin-2-0">
                                <input type="text" name="Telefono" class="form-control" placeholder="Telefono" required  <?php if ($filledPost && !$validCaptcha) {echo('value="'.$_POST['Telefono'].'"');} ?>>
                            </div>
                            <div class="col-sm-12 col-lg-10 margin-2-0">
                                <input type="text" name="Asunto" class="form-control" placeholder="Asunto" required  <?php if ($filledPost && !$validCaptcha) {echo('value="'.$_POST['Asunto'].'"');} ?>>
                            </div>
                            <div class="col-sm-12 offset-lg-1 col-lg-10 margin-2-0">
                                <textarea name="Mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"><?php if ($filledPost && !$validCaptcha) {echo($_POST['Mensaje']);} ?></textarea>
                            </div>
                        </div>
                        <div class="text-center margin-2-0 margin-8-percent">
                            <div class="g-recaptcha captcha-custom-style<?php if ($filledPost && !$validCaptcha) echo(' captchaError'); ?>" data-sitekey="6Lce358UAAAAAIc8Vo6dxvMoHjMTT7Ysu7q-h-BG" data-callback="recaptchaCallback"></div>
                            <?php 
                            if ($filledPost && $validCaptcha) { 
                                echo('<div class="emailSuccess">Email enviado exitosamente!</div>');
                            }
                            else if ($filledPost){
                                echo('<div class="emailError">Falla al verificar el captcha</div>');
                            }
                            ?>
                            <button type="submit" class="bottom-contacto btn btn-info prop-btn btn-lg">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Show-->

    <section id="show" class="second-color">
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

        <div class="container">
            <div class="row d-flex justify-content-center">
                <h1 class="title-Service top-container topper margin-8-percent">SHOWS</h1>
            </div>
            <div class="row flex-row-reverse justify-content-center">
                <div class="text-center col-xs-12 col-lg-4">
                    <img src="./media/IMG-20170907-WA0004.jpg" class="margin-8-percent img-responsive size-show" alt="show">
                </div>
                <div class="col-lg-8 text-center">
                    <div class="container">
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
                    </div>
                    <div class="row d-flex justify-content-center">
                        <img src="./media/show/IMG-20170907-WA0005.jpg" alt="..." class="margin-4-percent img-responsive rounded-circle img-show-sized">
                        <img src="./media/show/IMG-20170907-WA0007.jpg" alt="..." class="margin-4-percent img-responsive rounded-circle img-show-sized">
                        <img src="./media/show/IMG-20170907-WA0009.jpg" alt="..." class="margin-4-percent img-responsive rounded-circle img-show-sized">
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Footer -->
<footer class="page-footer footer font-small bg-dark pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="container">
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-12 mt-md-0 mb-3 text-center">
            <!-- Content -->
            <p>MATIAS BLANCHE - +54 341-6472361 - matiaseblanche@hotmail.com</p>
                <!--Facebook-->
            </div>
            <!-- Grid column -->
            <div class="col-md-12 mb-md-0 mb-3 vertical-center text-center">
                <ul class="list-unstyled list-inline text-center container">
                    <li class="list-inline-item">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/magoblanche/" target="_blank" class="fb-ic social-color">
                            <i class="fab fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/magoblanche/" target="_blank" class="ins-ic social-color">
                            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                    </li>
                </ul>
            </div>  
            <!-- <hr class="clearfix w-100 d-md-none"> -->
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright: Matias Blanche</div>
      <!-- <a href=""> </a> -->
    
    <!-- Copyright -->

</footer>
  <!-- Footer -->
</body>
</html>