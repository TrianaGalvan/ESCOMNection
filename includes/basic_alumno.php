<?php
	session_start();
	$nombre  = $_SESSION["username"];  
	define("USERNAME",$nombre);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo TITLE;?></title>
        
        <!-- Bootstrap Core CSS -->
        <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/css/content/sb-admin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- jQuery Version 1.11.0 -->
        <script src="/js/jquery/jquery-1.8.2.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap/bootstrap.min.js"></script>
	
		<!-- Arreglos de las tablas  -->
		<link href="/css/content/tables.css" rel="stylesheet" type="text/css">
		
  
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script>
        	 $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                           //previously active menu item 
        $(this)addClass('active');
        //for demo
        //$('#demo').addClass('active');
        //for sale 
        //$('#sale').addClass('active');
    });
        </script>
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.html">Bienvenid&#64; <?php echo USERNAME;?></a>
                </div>
                <!-- Top Menu Items -->
                
                <ul class="nav navbar-right top-nav" style="overflow:scroll visible;">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="/content_alumno/ver-perfil/mensajes.php">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Triana</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Miercoles 4:32 PM</p>
                                            <p>Mensaje de la empresa Microsoft..</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="/content_alumno/ver-perfil/mensajes.php">
                                    <div class="media"> 	
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Triana</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Miercoles 4:32 PM</p>
                                            <p>Mensaje de al empresa Oracle..</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="/content_alumno/ver-perfil/mensajes.php">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Triana Galvan</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Miercoles 4:32 PM</p>
                                            <p>Mensaje de la empresa Apple..</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-footer">
                                <a href="#">Leer nuevos mensajes</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Triana Galván <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/content_alumno/perfil.php"><i class="fa fa-fw fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="/content_alumno/editar-perfil/configuracion/config.php"><i class="fa fa-fw fa-gear"></i> Configuración</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="/index.php"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav side-nav">
                       
                        <li class="active">
                            <a href="/content_alumno/convocatorias.php" id="home"><i class="fa fa-users"></i>Empresas</a>
                        </li>
                        <li>
                            <a href="/content_alumno/tabla-profesores.php"><i class="fa fa-university"></i>Profesores</a>
                        </li>
                        
                        <li>
                            <a href="/content_alumno/ver-perfil/datos/datosGenerales.php" ><i class="fa fa-male"></i> Información personal</a>
                            
                        </li>
                        
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#curriculum" ><i class="fa fa-file-text-o"></i>
Curriculum Vitae<i class="fa fa-fw fa-caret-down"></i></a>
        
                            <ul class="collapse scrollable-menu" id="curriculum">
                                <li id="home">
                                    <a href="/content_alumno/ver-perfil/cv/ver-adscripcion.php" >Adscripción actual</a>
                                </li>
                                
                                <li> 
                                	<a href="/content_alumno/ver-perfil/cv/ver-adscripcion.php"  >Artículos publicados</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-articulos.php">Apoyos CONACYT</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-certificacionesm.php" >Certificaciones médicas</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-conferencias.php">Conferencias</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-desarrollost.php">Desarrollos tecnológicos</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-distinciones.php">Distinciones</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-docencia.php">Docencia</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-estancias.php">Estancias científicas</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-experiencia.php">Experiencia laboral</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-gruposinv.php" >Grupos de investigación</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-idiomas.php" >Idiomas</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-libros.php">Libros</a>
                                </li>
                                 
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-nivelogrado.php" >Nivel/Grado académico</a>
                                </li>
                                 
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-patentes.php" >Patentes</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-participacion.php" >Participación en congresos</a>
                                </li>
                                
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-proyectosinv.php" >Proyectos de investigación</a>
                                </li>
    
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-reportest.php" >Reportes técnicos</a>
                                </li>
                               
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-resenas.php" >Reseñas</a>
                                </li>
                              
                                <li>
                                    <a href="/content_alumno/ver-perfil/cv/ver-tesis.php">Tesis dirigidas</a>
                                </li>
                            </ul>
                        </li>
                       
                    </ul><!-- end side-nav-->
              </div>
              
                <!-- /.navbar-collapse -->
            </nav>

         