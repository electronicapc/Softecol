<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Softecol tecnología, redes, equipos comunicaciones, software a la medida, equipos móviles">
        <meta name="author" content="Softecol tecnología">
        <title>Softecol - Ingenier&iacute;a de Vanguardia</title>
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/theme.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,700,900,500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.8/typicons.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/pushy.css">
        <link rel="stylesheet" href="assets/css/masonry.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
        <script>
        window.odometerOptions = {
          selector: '.odometer',
          format: '(,ddd)', // Change how digit groups are formatted, and how many digits are shown after the decimal point
          duration: 53000, // Change how long the javascript expects the CSS animation to take
          theme: 'default'
        };
        </script>
        <style>
        @media screen and (min-width: 760px) and (orientation: landscape) {
			  #mylogo {
			    height: 180px;
			  }
			  #whatsapp{
			  	display: none;
			  }
			  
			  #whatsappcall{
			  	display: none;
			  }
		  }
		  @media (max-width:640px) and (min-width:100px){
			  #mylogo {
			    height: 80px;
			    float: left;
			  }
			  #saber{
			  	display: none;
			  }
		 }		  
		 </style> 
    </head>
    <body class="">
    <?php  
    if(empty($_GET))
	{}
	else
	{
		if($_GET["info"] == "true")
		{
	?>
			<div class="alert alert-success">
		  		<strong>Se recibi&oacute; su solicitud, pronto nos comunicaremos, gracias por elegirnos!!</strong>
			</div>
	<?php 
		}
	}
	?>

      <!-- Pushy Menu -->
      <nav class="pushy pushy-left navbar-fixed-top">
        <ul class="list-unstyled">
            <li><a href="#home">Inicio</a></li>
            <li><a href="#feat">Servicios</a></li>
            <li><a href="#about">Tecnolog&iacute;a</a></li>
            <li><a href="#news">Nosotros</a></li>
            <li><a href="http://softecol.com/tienda/public"  target="_blank">Tienda</a></li>
            <li><a href="#contact">Contactenos!</a></li>
           <!--  <li><a href="http://www.themeinthebox.com/ourtheme/mountain-king-bootstrap-template/" target="_blank">Download</a></li> -->
        </ul>
      </nav>

      <!-- Site Overlay -->
      <div class="site-overlay"></div>

        <header id="home">
            <div class="container-fluid">
                <!-- change the image in style.css to the class header .container-fluid [approximately row 50] -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-10">
                            <a href="#" class="thumbnail logo">
                                <img src="images/your_logo.png" alt="Softecol, tecnologia de vanguardia a su alcance" class="img-responsive" id="mylogo">
                            </a>
                        </div>
                        <div class="col-md-1 col-md-offset-8 col-xs-2 text-center">
                          <div class="menu-btn"><span class="hamburger"><i class="fa fa-bars"></i></span></div>
                        </div>
                    </div>
                    <div class="jumbotron">
                        <h1><small>Softecol</small>
						<strong>Software y Hardware</strong></h1>
                        <p>Servicios de software a la medida, implementaci&oacute;n de redes y hardware de tecnolog&iacute;a.</p>
                        <p>
                        <a class="btn btn-primary btn-lg" href="#feat" role="button" id="saber">Saber m&aacute;s</a>                         	
                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </header>
        <section id="feat">
            <div class="container">
                <div class="row features">
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="100ms">
                        <span class="typcn typcn-pencil x3"></span>
                        <h4>Desarrollo de software</h4>
                        <p>Tiene una necesidad en su compa&ntilde;&iacute;a?. Quiere que sus procesos fluyan, sean efectivos y sin errores? Desarrollamos software de acuerdo a sus necesidades. Si existe alg&uacute;n proceso, mÃ©todo o simplemente desea tener el control sobre un flujo, puede requerir una automatizaci&oacute;n, esta se realiza de acuerdo a su solicitud teniendo en cuenta las entradas y salidas del proceso, as&iacute; como el rumbo y visi&oacute;n del negocio.</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="300ms">
                        <span class="typcn typcn-cloud-storage-outline x3"></span>
                        <h4>Redes y comunicaciones</h4>
                        <p>Necesita la implementaci&oacute;n de su red de comunicaciones para peque&ntilde;a y mediana empresa? Implementamos sus requerimientos de comunicaciones. Sabemos que una compa&ntilde;&iacute;a siempre debe estar conectada, de la mejor manera y oportunamente, cualquier oportunidad de negocio depender&aacute; de ello</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="500ms">
                        <span class="typcn typcn-spanner-outline x3"></span>
                        <h4>Hardware de Tecnolog&iacute;a</h4>
                        <p>Insumos y suplementos para cualquier necesidad en su compa&ntilde;&iacute;a, Equipos (PC y port&aacute;tiles), copiadoras, impresoras, perifÃ©ricos.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="number wow fadeInUp" data-wow-delay="300ms">
            <!-- change the image in style.css to the class .number .container-fluid [approximately row 102] -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 opaline col-md-offset-6">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <h3>Software dise&ntilde;ado para us necesidades</h3>
                                    <h5>Desarrollos a la medida</h5>
                                    <p>Los procesos de su compa&ntilde;&iacute;a requieren el apalancamiento del software adecuado para reducir tiempos y costos.</p>
                                </div>
                            </div>
                            <div class="row text-center">
                                <!-- set the numbers in assets/js/scripts.js  -->
                                <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-1 col-md-offset-1 col-sm-6 wow fadeInUp">
                                    <h5>Creaci&oacute;n Software diario</h5>
                                    <h3 class="odometer 01">00000</h3>
                                    <h5>Y en aumento...</h5>
                                </div>
                                <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-2 col-md-offset-2 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                                    <h5>Instalaci&oacute;n procesos diarios automaticos en compa&ntilde;&iacute;as</h5>
                                    <h3 class="odometer 02">00000</h3>
                                    <h5>Y en aumento...</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="news" class="blog wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2>Quienes somos</h2>
                        <p>Somos una empresa Colombiana soportada en principios de fidelizaci&oacute;n y servicio al cliente. Generamos cadenas de valor para las compa&ntilde;&iacute;as nacionales e internacionales enfocadas en optimizar sus procesos</p>
                        <p>Implementamos un canal de ventas directo, en el momento que requiera alg&uacute;n insumo o producto, desde equipos de computo, copiadoras, multifuncionales, equipos de red, perifericos, equipos de telefon&iacute;a m&oacute;vil y en general cualquier requerimiento tecnol&oacute;gico .</p>
                        <a class="btn btn-danger btn-lg" href="http://softecol.com/tienda/public"  target="_blank">Tienda <i class="fa fa-arrow-circle-o-right"></i> </a>
                    </div>
                    <div class="col-md-5">
                        <a href="#">
                            <img src="https://picsum.photos/1200/1200?image=695" alt="Nuestra gente, un equipo que trabaja con ganas" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="history" class="story wow fadeInUp" data-wow-delay="300ms">
            <!-- change the image in style.css to the class .story .container-fluid [approximately row 141] -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 opaline">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <p class="lead"><i>A la vanguardia con grandes productores de tecnologia y servicios como Google, Microsoft, Apple, IBM, Oracle, Heroku</i></p>
                                    <p><i>Dise&ntilde;amos productos de Software con tecnolog&iacute;as PHP, COBOL, Perl, Python, Java, T-SQL, PL-SQL. Tecnolog&iacute;as cloud amazon AWS, Azure, Heroku. Equipos de comunicaciones Cisco, Huawei. Tecnologia de oficina HP, Dell, Lenovo, Sharp, Kyocera .</i></p>
                                    <h6 class="lead">Renta de Equipos</h6>
                                    <p><small>PC o portatiles<br>
       Gesti&oacute;n documental e impresi&oacute;n y copiado.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="photos" class="gallery wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="masonry image-gallery">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <div class="item item-width2">
                           <a href="http://php.net/manual/es/intro-whatis.php">
                              <img src="images/php.png" alt="" />
                            </a>

                        </div>
                        <div class="item">
                            <a href="https://www.microsoft.com/es-co">
                              <img src="images/microsoft.png" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://dashboard.heroku.com/">
                              <img src="images/heroku.png" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://aws.amazon.com/es/">
                              <img src="images/amazon.png" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.google.es/about/">
                              <img src="images/google.png" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.ibm.com/co-es/">
                              <img src="images/ibm.png" alt="" />
                            </a>
                        </div>
                       <div class="item">
                            <a href="http://www.sharp-world.com/">
                              <img src="images/sharp.png" alt="" />
                            </a>
                        </div>
                        <div class="item item-width2">
                            <a href="https://www.android.com/">
                              <img src="images/android.png" alt="" />
                            </a>
                        </div>
                       <div class="item">
                            <a href="https://www3.lenovo.com/co/es/">
                              <img src="images/lenovo.png" alt="" />
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="clients wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/logo-sample-01.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-02.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-03.png" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-04.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-05.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-06.png" class="img-responsive" />
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="prefooter wow fadeInUp" data-wow-delay="300ms">
            <!-- change the image in style.css to the class .prefooter .container-fluid [approximately row 154] -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Softecol tecnolog&iacute;a y software.</h3>
                            <p>Empresa Colombiana. Dir. Dg 2B No. 82 - 30. <br> Tel. Contacto 300 5672190. <br> E-mail: contacto@softecol.com. <br> Bogot&aacute; - Colombia. </p>
                            <div class="row">
                                <div class="col-md-6">
                                <form method="POST" action="envio_mail.php" accept-charset="UTF-8">
                                    <input type="email" required class="form-control" placeholder="Su Email aqu&iacute;..." name="email">
                                    <br>
                                    <button type="submit" class="btn btn-danger">Requerir informaci&oacute;n</button>
                                </form>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Softecol</h3>
                        <p>Â© 2018 Softecol. Designed and Developed by <a target="_blank" href="http://www.softecol.com">ThemeintheBox with Softecol</a></p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-right social">
	                        <a href="https://www.facebook.com/ThemeInTheBox/" target="_blank"><i class="typcn typcn-social-facebook-circular"></i></a>							
							<a href="https://twitter.com/ThemeintheBox" target="_blank"><i class="typcn typcn-social-instagram-circular"></i></a>
							<a href="whatsapp://send?text=http://softecol.com" target="_blank" id="whatsapp"><i class="typcn typcn-social-at-circular"></i> Compartir</a><br>
							<a href="tel:+573005672190" target="_blank" id="whatsappcall"><img src="images/whatsapp.png" alt="Llamada Whatsapp" width="30" height="30"> Llamanos!</a>
						</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap-scrollspy.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="https://masonry.desandro.com/masonry.pkgd.js"></script>
        <script src="assets/js/masonry.js"></script>
        <script src="assets/js/pushy.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/odometer.js"></script>
    </body>
</html>

<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34344036-1', 'auto');
  ga('send', 'pageview');

</script> -->
