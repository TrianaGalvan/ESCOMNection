<?php 
    define("TITLE","Configuracion");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_profesor.php");
?>
 
		 <link  type="text/css" rel="stylesheet" href="../../../css/content/conf-general.css">    
        <div id="page-wrapper" style="height: 1300px;">
            <div class="container-fluid" style="height: 600px;">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li>
                        <a class="active" href="#privacidad" data-toggle="tab" role="tab">Privacidad</a>
                    </li>
                    <li>
                        <a href="#general" data-toggle="tab" role="tab">General</a>
                    </li>
                    
                </ul><!-- end ul-->
            </div><!-- end tabbable-->
            
            <div class="tab-content">
                
                <div class="tab-pane fade in active" id="privacidad"> 
                    <div class="container contenido">
                        <div class="row-fluid">
                            <div class="col-md-3  seccion-top-contrasena vertical-line" >
                                Contraseña
                            </div>

                            <div class="col-md-6 seccion-top-contrasena">
                                Cambiar contraseña:<input type="password" class="input-cambiar-contrasena"><br>
                                Repetir contraseña:<input type="password" class="input-repetir-contrasena"><br>
                            </div>
                        </div><!-- end row-->

                        <div class="row"></div>
                        <div class="row"></div>

                        <div  class="row seccion-top-perfil">
                            <div class="col-md-3 vertical-line" >
                                Foto de perfil
                            </div>

                            <div class="col-md-5">
                                Cambiar foto de perfil:
                            </div>

                            <div class="row-fluid section-load-image-top" >
                             <div class="col-md-3"></div>
                                <div class="col-md-5">
                                    <div class="input-group">                                        
                                        <input type="file" style="margin-top: 10px;">
                                    </div><!-- /input-group -->  
                                </div><!-- end col-md-8-->
                            </div>

                         </div><!-- end row-->

                        <div class="row section-bajas-top">
                            <div class="col-md-3 vertical-line">
                                Cuenta
                            </div>
                            <div class="col-md-5">
                                <a href="#">Dar de baja la cuenta</a>
                            </div>
                        </div><!-- end row-->
                            
                        </div><!-- end container-->
                        <button type="button" class="btn btn-info boton-top" >Guardar</button>
                </div><!-- end tab-pane-->
                
                <div class="tab-pane fade" id="general">
                    
                    <div class="row">
                        <h3 class="titulo">Información personal</h3>
                        <div class="col-md-4 ">    
                            <img src="../../../img/cv/persona.png" class="img-responsive imagenes" alt="Responsive image" style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado   
                            <h4 class="nombre-icono">Datos generales</h4>  
                            <a href="../datos/editar-datosg.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                       
                        <div class="col-md-4">
                           
                            <img src="../../../img/cv/consola.png" class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Otros datos</h4>
                            <a href="../datos/editar-otrosd.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                    </div><!-- end row-->
                    
                    
                    <!-------------------------------Curriculum Vitae------------------------------------->
                    <div class="row">
                        <h3 class="titulo">Curriculum Vitae</h3>
                        <div class="col-md-4 ">    
                            <img src="../../../img/cv/abscripcion.png" class="img-responsive imagenes" alt="Responsive image" style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado   
                            <h4 class="nombre-icono">Adscripción actual</h4> 
                            <a href="../cv/editar-adscripcion.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        
                        <div class="col-md-4">
                         
                            <img src="../../../img/cv/distincion.png"  class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Distinciones</h4>
                            <a href="../cv/editar-distinciones.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        <div class="col-md-4">
                           
                            <img src="../../../img/cv/grupos.png" class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Grupos de investigación</h4>
                            <a href="../cv/editar-gruposi.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        
                    </div><!-- end row-->
                 
                    <div class="row row-iconos">
                        
                        <div class="col-md-4 " style="margin-top: 20px;">    
                            <img src="../../../img/cv/proyectos.png" class="img-responsive imagenes" alt="Responsive image" style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado   
                            <h4 class="nombre-icono">Proyectos de investigación</h4> 
                            <a href="../cv/editar-proyectosi.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        
                        <div class="col-md-4">
                         
                            <img src="../../../img/cv/apoyos.png"  class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Apoyos CONACYT</h4>
                            <a href="../cv/editar-apoyos.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        <div class="col-md-4">
                           
                            <img src="../../../img/cv/divulgacion.png" class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Conferencias</h4>
                            <a href="../cv/editar-conferencias.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                            
                        </div>
                        
                    </div><!-- end row-->
                    
                    <div class="row row-iconos">
                        
                        <div class="col-md-4 ">    
                            <img src="../../../img/cv/libros.png" class="img-responsive imagenes" alt="Responsive image" style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado   
                            <h4 class="nombre-icono">Libros</h4> 
                            <a href="../cv/editar-libros.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        
                        <div class="col-md-4">
                         
                            <img src="../../../img/cv/reporte.png"  class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Reportes técnicos</h4>
                            <a href="../cv/editar-reportest.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        <div class="col-md-4">
                           
                            <img src="../../../img/cv/articulos.png" class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Artículos públicados</h4>
                            <a href="../cv/editar-articulos.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        
                    </div><!-- end row-->
                  
                    <div class="row row-iconos">
                     
                        <div class="col-md-4 ">    
                            <img src="../../../img/cv/docencia.png" class="img-responsive imagenes" alt="Responsive image" style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado   
                            <h4 class="nombre-icono">Docencia</h4>   
                            <a href="../cv/editar-docencia.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                            
                        </div>
                        
                        <div class="col-md-4">
                         
                            <img src="../../../img/cv/niveles.png"  class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Niveles/Grados académicos</h4>
                            <a href="../cv/editar-niveles.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        <div class="col-md-4">
                           
                            <img src="../../../img/cv/resenas.png" class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Reseñas</h4>
                            <a href="../cv/editar-resenas.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        
                    </div><!-- end row-->
               
                    <div class="row row-iconos">
                       
                        <div class="col-md-4 ">    
                            <img src="../../../img/cv/patentes.png" class="img-responsive imagenes" alt="Responsive image" style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado   
                            <h4 class="nombre-icono">Patentes</h4> 
                            <a href="../cv/editar-patentes.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                            
                        </div>
                        
                        <div class="col-md-4">
                         
                            <img src="../../../img/cv/desarrollo.png"  class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Desarrollos tecnológicos</h4>
                            <a href="../cv/editar-desarrollost.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>                            
                        </div>
                        <div class="col-md-4">
                           
                            <img src="../../../img/cv/experiencia.png" class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Experiencia laboral</h4>
                            <a href="../cv/editar-experiencia.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                
                    </div><!-- end row-->
                    
                    <div class="row row-iconos">
                       
                        <div class="col-md-4 ">    
                            <img src="../../../img/cv/tesis.png" class="img-responsive imagenes" alt="Responsive image" style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado   
                            <h4 class="nombre-icono">Tesis dirigidas</h4> 
                            <a href="../cv/editar-tesis.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        
                        <div class="col-md-4">
                         
                            <img src="../../../img/cv/idiomas.png"  class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Idiomas</h4>
                            <a href="../cv/editar-idiomas.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        <div class="col-md-4">
                           
                            <img src="../../../img/cv/constanciasm.png" class="img-responsive imagenes" alt="Responsive image"  style="margin-left:90px;">
                            <input type="checkbox" style="margin-left: 70px;"> Privado
                            <h4 class="nombre-icono">Certificaciones médicas</h4>
                            <a href="../cv/editar-certificacionesm.jsp">
                                <button type="button" class="btn btn-primary btn-xs boton-icono">Editar</button>
                            </a>
                        </div>
                        
                    </div><!-- end row-->
                    
                </div><!-- end tab-pane-->
            </div><!-- end tab-content-->
            
        </div><!-- end container-fluid-->
        </div><!-- end wrapper-->
    </body>
</html>
