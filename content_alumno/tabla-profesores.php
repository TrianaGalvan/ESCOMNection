<?php
    define("TITLE","Profesores");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_alumno.php");
?>

        <link href="../../css/content/boton.css" rel="stylesheet" type="text/css">
        <link href="../../css/content/table.css" rel="stylesheet" type="text/css">



    <div id="page-wrapper" style="height: 800px;">
         <div class="container-fluid">
    		
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Profesores              
                            </h1>
                            
                        </div>
                    </div>
                    <!-- /.table -->

                    <div class="col-lg-4">

                        <div class="caption">Profesores</div>    
                        <div id="table">
                            <div class="header-row row">
                            <span class="cell primary">Profesor</span>
                            <span class="cell">Materia(s)</span>
                             <span class="cell">Curriculum</span>

                          </div>
                          <div class="row">
                            <input type="radio" name="expand">
                            <span class="cell primary" data-label="Vehicle">Maldonado Castillo Idalia</span>
                            <span class="cell" data-label="Exterior">Análisis y diseño orientado a objetos</span>
                            <span class="cell" data-label="Interior"><a href="perfilProfesor.php">Ver</span></a>
                          </div>
                          <div class="row">
                            <input type="radio" name="expand">
                            <span class="cell primary" data-label="Vehicle">García Ortega Victor Hugo</span>
                            <span class="cell" data-label="Exterior">Arquitectura de microcomputadoras</span>
                             <span class="cell" data-label="Interior"><a href="">Ver</a></span>

                          </div>
                          <div class="row">
                             <input type="radio" name="expand">
                            <span class="cell primary" data-label="Vehicle">Guttierrez Aldana Eduardo</span>
                            <span class="cell" data-label="Exterior">Redes de computadora</span>
                            <span class="cell" data-label="Interior"><a href="">Ver</a></span>
                          </div>
                          <div class="row">
                             <input type="radio" name="expand">
                            <span class="cell primary" data-label="Vehicle">Rueda Melendez Marco Antonio</span>
                            <span class="cell" data-label="Exterior">Teoría computacional</span>
                            <span class="cell" data-label="Interior"><a href="">Ver</a></span>
                          </div>
                          <div class="row">
                            <input type="radio" name="expand">
                             <input type="radio" name="expand">
                            <span class="cell primary" data-label="Vehicle">Maldonado Castillo Idalia</span>
                            <span class="cell" data-label="Exterior">Análisis y diseño orientado a objetos</span>
                            <span class="cell" data-label="Interior"><a href="perfilProfesor.php">Ver</span></a>
                          </div>
                          <div class="row">
                             <input type="radio" name="expand">
                            <span class="cell primary" data-label="Vehicle">Rojas Luna Hector</span>
                            <span class="cell" data-label="Exterior">Cálculo</span>
                            <span class="cell" data-label="Interior"><a href="">Ver</a></span>
                          </div>

                           <div class="row">
                             <input type="radio" name="expand">
                            <span class="cell primary" data-label="Vehicle">Castillo Marrufo Juan Antonio</span>
                            <span class="cell" data-label="Exterior">Matemática avanzadas para la ingeniería</span>
                            <span class="cell" data-label="Interior"><a href="">Ver</a></span>
                          </div>
                          <div class="row">
                             <input type="radio" name="expand">
                            <span class="cell primary" data-label="Vehicle">Cancino Calderon Sergio</span>
                            <span class="cell" data-label="Exterior">Instrumentación</span>
                            <span class="cell" data-label="Interior"><a href="">Ver</a></span>
                          </div>
                          <div class="row">
                             <input type="radio" name="expand">
                            <span class="cell primary" data-label="Vehicle">Carballo Jimenez Juan Manuel</span>
                            <span class="cell" data-label="Exterior">Análisis vectorial</span>
                            <span class="cell" data-label="Interior"><a href="">Ver</a></span>
                          </div>

                           <div class="row">
                             <input type="radio" name="expand">
                            <span class="cell primary" data-label="Vehicle">Hernandez Contreras Euler</span>
                            <span class="cell" data-label="Exterior">Bases de datos</span>
                            <span class="cell" data-label="Interior"><a href="">Ver</a></span>
                          </div>


                        <div class="row">
                             <input type="radio" name="expand">
                            <span class="cell primary" data-label="Vehicle">Peredo Valderrama RubeN</span>
                            <span class="cell" data-label="Exterior">Tecnologías para la web</span>
                            <span class="cell" data-label="Interior"><a href="">Ver</a></span>
                        </div>


                        <div class="row">
                                 <input type="radio" name="expand">
                                <span class="cell primary" data-label="Vehicle">Pescador Rojas Miriam</span>
                                <span class="cell" data-label="Exterior">Programación orientada a objetos</span>
                                <span class="cell" data-label="Interior"><a href="">Ver</a></span>
                        </div>


                       <div class="row">
                                 <input type="radio" name="expand">
                                <span class="cell primary" data-label="Vehicle">Ramirez Tenorio Rafael</span>
                                <span class="cell" data-label="Exterior">Administración financiera</span>
                                <span class="cell" data-label="Interior"><a href="">Ver</a></span>
                       </div>                       
                    </div>
                </div><!-- col-->
  				<!--button -->
      		
         </div><!-- cotainer-->
    </div><!-- wrapper-->
      
    </body>
</html>
