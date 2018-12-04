<?php
    //Force use HTTPS
    if($_SERVER["HTTPS"] != "on")
    {
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        exit();
    }
?>
<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: OPENFACT::</title>
	<!-- meta -->
	<meta name="description" content="OpenFact - Facutración electrónica" />
	<meta name="keywords" content="OpenFact, Facturación, Electrónica, Facturación Electrónica,SUNAT, gratis, Fact" />
	<meta name="author" content="CrazyMacer" />
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#ede211">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#ede211">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#ede211">
	<!-- favicon -->
	<link rel="shortcut icon" href="favicon.ico">
    <!-- Font -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Lightbox2 -->
    <link href="vendor/lightbox2/css/lightbox.css" rel="stylesheet">
    <!-- Main css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->
    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="./"><img src="images/openfact_logo_white3.png" height="50" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">INICIO <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">CARACTERISTICAS</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">CAPTURAS</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#pricing">PLANES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACTO</a> </li>
                                <li class="nav-item"><a href="http://openfact-search-pe-openfact-inpath.apps.console.sistcoop.org/" target="_blank" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">CONSULTAR COMPROBANTE</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div><!--./Nav Menu-->

    <!--Header-->
    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1 class="logo-text">OpenFact</h1>
            <p class="tagline">Sistema de Facturación Electrónica. </p>
            <div class="btn-group" style="margin-bottom:5px;">
                <a href="http://openfact-innpath.ddns.me/" target="_blank" class="btn btn-outline-light">Openfact Sur</a>
                <a href="http://Openfact.dnsfor.me " target="_blank" class="btn btn-outline-light">Openfact Centro</a>
            </div>
            <p>
                <a href="http://openfact-ui-openfact-development.apps.console.sistcoop.org:83" target="_blank" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">VER DEMOSTRACIÓN</a>
            </p>
        </div>
        <div class="img-holder mt-3"><img src="images/macbook-pro.png" alt="phone" class="img-fluid"><h3 class="home-logo-phone">Contáctanos: <a href="tel:+51931784179">(+51) 931784179</a> | <a href="tel:+51066283005">(+51) 066283005</a></h3></div>
        
    </header><!--./Header-->

    <!-- Expo files -->
    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-12">
                    
                    <h2 class="text-center">MATERIALES DE LA CONFERENCIA</h2>
                    <p class="mb-4 text-center">Presentaciones utilizadas en la conferencia realizada el día 23/08/2018</p>
                    <p class="text-center">
                        <a href="files/conferencia.pptx" target="_blank" class="btn btn-primary text-center">OpenFact</a>
                        <a href="files/cpe-see.pptx" target="_blank" class="btn btn-primary text-center">Sistema de Emisión Electrónica SEE</a>
                    </p>
                    
                    
                </div>
            </div>
            
        </div>

    </div><!-- Expo files -->
  
    <!--Features-->
    <div class="section light-bg" id="features">

        <div class="container">

            <div class="section-title">
                <small></small>
                <h3>Características</h3>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Simple</h4>
                                    <p class="card-text">Emite tus comprobantes electrónicos de manera fácil, rápida y gratuita.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Personalizable</h4>
                                    <p class="card-text">Personaliza el diseño de tus comprobantes electrónicos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Seguro</h4>
                                    <p class="card-text">Contamos con un sistema de respaldo </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--./Features-->
    
    <!--Features2-->
    <div class="section light-bg">
        <div class="container">
            <div class="section-title">
                <small></small>
                <h3>Ventajas de OpenFact</h3>
            </div>
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#communication">Gratuita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#schedule">Comprobantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages">Beneficios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#livechat">Soporte</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="communication">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="images/ventaja01.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>
                            <h2>Emite tus comprobantes gratis</h2>
                            <p class="lead">Disponemos de un plan libre </p>
                            <p>OpenFact ofrece una version gratuita para la emision de comprobantes electronicos mediante una interfaz amigable, tambien contamos con una version de pago que se ajusta a tu presupuesto y te ofrecemos multiples beneficios, espacio ilimitado para tus comprobantes, reportes y estadisticas de compras y ventas, envio automatico de reportes y alertas, entre muchas mas</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="schedule">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Diversidad de Comprobantes</h2>
                            <p class="lead">Múltiple comprobantes electrónicos. </p>
                            <p>OpenFact ofrece la emision de facturas, boletas de venta, notas de crédito, notas de 
                                debito y resumenes diarios de boletas. OpenFact ofrece otro servicio gratuito, donde 
                                podras encontrar todas las facturas de tus proveedores, ya no tendras que preocuparte 
                                por olvidar alguna
                            </p>
                        </div>
                        <img src="images/ventaja02.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
                <div class="tab-pane fade" id="messages">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="images/ventaja03.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>
                            <h2>Todas tus facturas</h2>
                            <p class="lead">Tus comprobantes en un solo lugar </p>
                            <p>OpenFact plus ofrece otro servicio gratuito, donde podras encontrar todas las facturas de tus proveedores, ya no tendras que preocuparte por olvidar alguna; Ofrecemos la recopilacion de comprobantes electronicos de compras y ventas de manera automática. Recolectamos todos los comprobantes electronicos emitidos a tu RUC y/o DNI.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="livechat">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Soporte en linea</h2>
                            <p class="lead">Brindamos asistencia ténica </p>
                            <p> ¿Tienes alguna dificultad o problema al emitir tus comprobantes electrónicos?, descuida, disponemos de un personal calificado dispuesto a brindarte una asesoría hasta solucionar tu problema, no dudes en contactarte con nosotros.
                            </p>
                        </div>
                        <img src="images/ventaja04.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
            </div>
        </div>
    </div><!--./Features2-->

    <!--Screenshots-->
    <div class="section light-bg" id="gallery">
        <div class="container">
            <div class="section-title">
                <small>GALLERIA</small>
                <h3>Capturas de Pantalla</h3>
            </div>
            <div class="img-gallery owl-carousel owl-theme">
                <img src="images/screen1.png" alt="image">
                <img src="images/screen2.png" alt="image">
                <img src="images/screen3.png" alt="image">
                <img src="images/screen4.png" alt="image">
            </div>
        </div>
    </div><!--./Screenshots-->

    <!--Pricing-->
    <div class="section" id="pricing2">
        <div class="container">
            <div class="section-title">
                <small>OPENFACT</small>
                <h3>ONLINE – OFFLINE (PSE AUTORIZADO POR LA SUNAT)</h3>
            </div>
            
            <!--Plans-->
            <div class="card-deck">

                <!--Plan-->
                <div class="card pricing popular price-gold">
                    <div class="card-head">
                        <small class="text-primary">PLAN OPENFACT</small>
                        <span class="price"  ><span style="text-decoration:line-through;color:red">S/ 89.90</span><sub >Antes</sub></span>
                        <span class="price"><span style="font-weight:bold;">S/ 49.90*</span><sub>/mes Ahora</sub></span>
                        <span class="price"><span style="font-weight:bold;font-size:30px;">S/ 562.00*</span><sub>/anual</sub></span>
                    </div>

                    <p style="" class="text-center">Con la versión <b>ONLINE</b> emite tus comprobantes desde la web</p>
                    <p class="text-center">Con la versión <b>OFFLINE</b>** instalamos nuestro software en tu PC.</p>

                    <ul class="list-group list-group-flush">
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Activación de cuenta inmediata.</span></div>
                            
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Facturas, Boletas de venta, Notas de Crédito y Débito, Anulaciones o bajas ilimitados. </span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Comprobantes de Retención y Percepción, Guías de Remisión Ilimitados***.</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Conectado con la SUNAT</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Disponibilidad de nuestro sistema 24/7/365</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Máximo nivel de seguridad</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Personalización de tus comprobantes con propio LOGOTIPO.</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Envió de comprobantes al correo versión (XML y PDF)</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Generación, envió y recepción de tus comprobantes </span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Soporte y mantenimiento</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Hasta 3 usuarios por empresa (más usuarios – consultar con nosotros)</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Servidor en la nube (respaldo y consulta de comprobantes)</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Consulta de documentos en línea</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Reportes en Excel</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Capacitación </span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Actualizaciones constantes de acuerdo a los cambios en las normas de la SUNAT</span></div>
                            <div class="list-group-item"><span class="title"><span class="tick-yes">✔</span> Certificado digital incluido.</span></div>
                    </ul>

                    <p class="text-center"><small>(*) Precios incluyen IGV<br>(**) Versión Offline tiene un costo adicional<br>(***) Los comprobantes de retención, percepción y guía de Remisión, tienen un costo adicional</small></p>
                    <p class="text-center"><small> </small></p>

                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#call" data-whatever="PLAN OPENFACT">Te Llamamos</a>
                    </div>
                </div><!--./ Plan-->

            </div><!--./End Plans-->
        </div>
    </div><!--./End Pricing-->



    


     <!--Authorize -->
    <div class="section light-bg" id="features">

        <div class="container">

            <div class="section-title">
                <small></small>
                <h3>Proveedor Autorizado por la SUNAT</h3>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                <p>Autorizado mediante Resolución N° 244-005-0000177/SUNAT</p>
                    <img src="images/sunat.png" alt="client logos" class="img-fluid">
                </div>
            </div>
        </div>
    </div><!--./Authorize -->

   

    
    <!--Partners-->
    <div class="client-logos my-5">
        <div class="section-title">
            <h3>Partners</h3>
        </div>
        <div class="container text-center">
            <img src="images/client-logos.png" alt="client logos" class="img-fluid">
        </div>
    </div><!--./Partners-->

    

  
    

    <!--

    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/dualphone.png" alt="dual phone" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                        <h2>Launch your App</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione </p>
                        <a href="#" class="btn btn-primary">Read more</a></div>
                </div>
            </div>

        </div>

    </div> -->

    <!--
    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>Create an Account</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem </p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>Share with friends</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem eveniet</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>Enjoy your life</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="images/iphonex.png" alt="iphone" class="img-fluid">
                </div>

            </div>

        </div>

    </div>-->

    <!--
    <div class="section">
        <div class="container">
            <div class="section-title">
                <small>TESTIMONIALS</small>
                <h3>What our Customers Says</h3>
            </div>

            <div class="testimonials owl-carousel">
                <div class="testimonials-single">
                    <img src="images/client.png" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Crystal Gordon</h5>
                    <p class="text-primary">United States</p>
                </div>
                <div class="testimonials-single">
                    <img src="images/client.png" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Crystal Gordon</h5>
                    <p class="text-primary">United States</p>
                </div>
                <div class="testimonials-single">
                    <img src="images/client.png" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Crystal Gordon</h5>
                    <p class="text-primary">United States</p>
                </div>
            </div>

        </div>

    </div> -->


    <!--
    <div class="section pt-0">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Preguntas Frecuentes</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">Can I try before I buy?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                    <h4 class="mb-3">What payment methods do you accept?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Can I change my plan later?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                    <h4 class="mb-3">Do you have a contract?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>

                </div>
            </div>
        </div>

    </div>-->
    
    <!--Home Video-->
    <div class="section bg-gradient">
        <div class="container">
            <div class="call-to-action">
                <h2>¿Cómo emitir una factura electrónica?</h2>
                <p class="tagline">
                    <iframe  src="https://www.youtube.com/embed/08xoOrMzBQs?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="width: 100%;height: 365px;"></iframe>
                </p>
                <div class="my-4">
                    <a href="http://openfact-test.ddns.me/" target="_blank" class="btn btn-light">Probar Ahora</a>
                </div>
                <p class="text-primary"><small><i>Para más información sobre el uso del sistema no dude en contactarnos. </i></small></p>
            </div>
        </div>

    </div><!--./Home Video-->

    
    <!--Contact-->
    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="section-title">
                <h3>Contáctanos</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span> OpenFact</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2" style="font-weight:bold;">
                            <span class="ti-email mr-2"></span> Correo electrónico: <a class="mr-4" href="mailto:support@mobileapp.com">ventas@openfact.pe</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0" style="font-weight:bold;">
                            <span class="ti-headphone-alt mr-2"></span> Teléfonos: <a href="tel:+51931784179">(+51) 931784179</a> | <a href="tel:+51066283005">(+51) 066283005</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <a href="http://facebook.com/openfact.pe" target="_blank"><span class="ti-facebook"></span></a>
                        <!--<a href="#"><span class="ti-twitter-alt"></span></a>
                        <a href="#"><span class="ti-instagram"></span></a>-->
                    </div>
                </div>
            </div>
        </div>
    </div><!--./Contact-->

    <!--Footer-->
    <footer class="my-5 text-center">
        <p class="mb-2"><small>COPYRIGHT © 2018. OPENFACT | TODOS LOS DERECHOS RESERVADOS<BR>POWERED BY <a href="#">INNPATH</a></small></p>
        <!--<small>
            <a href="#" class="m-2">PRESS</a>
            <a href="#" class="m-2">TERMS</a>
            <a href="#" class="m-2">PRIVACY</a>
        </small>-->
    </footer><!--./Footer-->

    <!--Modal-->
	<div class="modal fade" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header" style="background: gold;color: #333;border-radius: 10px 10px 0 0;">
                    <h6 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">NOS PONEMOS EN CONTACTO CONTIGO - PLAN: </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px;">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="call-logo" src="images/call.jpg" alt="" height="200" width="261" style="display: block;margin: 0 auto;">
                    <form id="call-form" method="POST" >
                        <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Plan:</label>
                        <input type="text" class="form-control" id="plan-name" name="plan-name" disabled>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="user-name" name="user-name" autocomplete="off">
                        </div>
                        <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Celular:</label>
                        <input type="text" class="form-control" id="user-phone" name="user-phone" maxlength="9" autocomplete="off">
                        </div>
                    </form>
                    <div id="call-form-error" class="alert alert-danger"></div>
                </div>
                <div class="modal-footer">
                    <button id="call-form-close"type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button  id="call-form-submit" type="button" class="btn btn-warning btn-call">Te Llamamos</button>
                </div>
            </div>
        </div>
    </div><!--./Modal-->

    <!-- Modal for events -->
    <a id="event" href="images/events/evento01.jpg"  style="display:none;" data-lightbox="image-1" data-title="Conferencia de Facturación Electrónica">Image #1</a>

    <!-- jQuery and Bootstrap -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Plugins JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Lightbox2 -->
    <script src="vendor/lightbox2/js/lightbox.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>