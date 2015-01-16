	<?php require($_SERVER["DOCUMENT_ROOT"]."/lib/logic/logicaComun.php");?>
	<!DOCTYPE html>
	<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    <title>Log in</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/principal/agency.css" rel="stylesheet">
    <link href="css/content/fontsGoogle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/fonts-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Fuentes externas -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <!-- Principal -->
    <link href="css/principal/login.css" rel='stylesheet' type='text/css'>
 
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!-- jsValidate -->
   


</head>

	<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll"  href="#page-top">ESCOMnection</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li>
                        <a class="page-scroll "  href="#conocenos">Acerca de ESCOMnection</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Equipo</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    


    <header>
        
            <div id="login-container" class="container">
                
                <div class="intro-text">
                
                    <div class="intro-lead-in">ESCOMnection!</div>                   
                    
                </div>
                

                <form id="login-form" name="login-form" action="/lib/control/controlLogin.php" method="POST" class="form">

                    <div class="username">
                        <input type="text" id="username" placeholder="USUARIO" name="username" class="jsrequired input"  
                    </div>

                    <div class="password">
                      <input id="jsvalidator_search" type="password" id="password" placeholder="CONTRASEÑA" name="password" class="jsrequired input"/>
                    </div>

                    <div class="login">
                      <input  type="submit" value="Iniciar sesión" class="boton">
                    </div>

                </form>
                
            </div>
        
    </header>

   

   

    <!-- About Section -->
    <section id="conocenos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Acerca de ESCOMnection</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2014-2015</h4>
                                    <h4 class="subheading">ESCOMnection!</h4>
                                </div>
                                <div class="timeline-hola">
                                    <p class="text-muted">En este sitio web se facilitará la comunicación entre los alumnos y las empresas interesadas en ofrecer oportunidades laborales. De igual manera se mantendrá actualizada la información tanto de los alumnos como de los profesores mediante el llenado de un curriculum.</p>
                                </div>
                            </div>
                        </li>
                       
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4><br>
                                    &#218;nete !! 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Equipo</h2>
                    <h3 class="section-subheading text-muted">InspirADOO's</h3>
                </div>
            </div>
            <!-- Primera fila de fotografías -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Triana Galván</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Maykaren Gómez</h4>    
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Ruby Ramírez</h4>
                    </div>
                </div>
            </div>
            
            <!-- Segunda fila de fotografías -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/5.jpg" class="img-responsive img-circle" alt="">
                        <h4>Karina Núñez</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/6.jpg" class="img-responsive img-circle" alt="">
                        <h4>Brenda Ramírez</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/12.jpg" class="img-responsive img-circle" alt="">
                        <h4>Jessica Moreno</h4>
                    </div>
                </div>         
            </div>    
            <!-- Tercera fila de fotografías -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/8.jpg" class="img-responsive img-circle" alt="">
                        <h4>Enya Martínez</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/11.jpg" class="img-responsive img-circle" alt="">
                        <h4>Monserrat Monroy</h4>
                    </div>
                </div>                
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/7.jpg" class="img-responsive img-circle" alt="">
                        <h4>Brenda Ávalos</h4>
                    </div>
                </div>        
            </div>    
            <!-- Cuarta fila de fotografías -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/9.jpg" class="img-responsive img-circle" alt="">
                        <h4>Aldo Moreno</h4>
                    </div>
                </div>                 
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/4.jpg" class="img-responsive img-circle" alt="">
                        <h4>Rafael Ramo</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/10.jpg" class="img-responsive img-circle" alt="">
                        <h4>Miguel Hernández</h4>
                    </div>
                </div>                    
            </div>                





            
        </div>
    </section>

   
    <!-- jQuery Version 1.11.0 -->
    <script src="/js/jquery/jquery-1.11.0.js"></script>
  

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/js/principal/classie.js"></script>
    <script src="/js/principal/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->

    <!--<script src="js/principal/contact_me.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="/js/principal/agency.js"></script>
    
    <script type="text/javascript" language="javascript" src="js/scriptaculous/prototype.js"></script>
    <script type="text/javascript" language="javascript" src="js/scriptaculous/scriptaculous.js"></script>
    <script type="text/javascript" language="javascript" src="js/jsvalidate/jsvalidate.js"></script>

    
   

</body>

</html>
