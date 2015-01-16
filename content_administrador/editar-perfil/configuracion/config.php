<?php 
	define("TITLE","Configuracion");
	include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_administrador.php");
?> 
   <link  type="text/css" rel="stylesheet" href="../../../css/content/conf-general.css">
    
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li>
                        <a class="active" href="#privacidad" data-toggle="tab" role="tab"> General</a>
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

                        
                         <button type="button" class="btn btn-info boton-top" >Guardar</button>   
                      </div><!-- end container-->
                 </div><!-- end tab-pane-->    
            </div><!-- end tab-content--> 
        </div><!-- end container-fluid-->
    </body>
</html>
