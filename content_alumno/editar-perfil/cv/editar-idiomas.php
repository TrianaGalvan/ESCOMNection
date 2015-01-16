<?php 
    define("TITLE","Idiomas");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_alumno.php");
?>
		<link href="../../../css/content/jsvalidate-forms.css" rel="stylesheet">
		<link href="../../../css/content/forms.css" rel="stylesheet">

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Idiomas
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-edit"></i>  Introduzca la informaci&oacuten que se le solicita.
                            </li>
                            <li class="active">
                                <i class="fa fa-asterisk"></i> Campos Obligatorios
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.Heading -->

                <div class="row">
                    <form role="form" id="Distinciones" name="Distinciones">
                         <div class="col-lg-6">


                            <div class="form-group">
                                <label> Idioma: </label>
                                 <input id="organizacion" name="organizacion" input class="form-control">
                            </div>    


    
                            <div class="form-group">
                                <label> Descipción: </label>
                                <input id="descripcion" name="descripcion" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="lengua"> Lengua materna: </label>
                                <select id="lenguamat" name="lenguamat" class="form-control">
                                    <option> SI </option>
                                    <option> NO </option>    
                                </select>
                            </div>  

                            <div class="form-group">
                                <label for="traductor"> Traductor: </label>
                                <select id="traductor" name="traductor" class="form-control">
                                    <option> SI </option>
                                    <option> NO </option>    
                                </select>
                            </div>  

                            <div class="form-group">
                                <label for="profe"> Profesor: </label>
                                <select id="profesor" name="profesor" class="form-control">
                                    <option> SI </option>
                                    <option> NO </option>    
                                </select>
                            </div>                              

                            <div class="form-group">
                                <label for="nivelC"> Nivel de Conversación: </label>
                                <select id="conversacion" name="conversacion" class="form-control">
                                    <option> Alto </option>
                                    <option> Medio </option>  
                                    <option> Bajo </option>                                        
                                </select>
                            </div>       
                        </div><!-- end col-->
                        
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nivelL"> Nivel de Lectura: </label>
                                <select id="lectura" name="lectura" class="form-control">
                                    <option> Alto </option>
                                    <option> Medio </option>  
                                    <option> Bajo </option>                                        
                                </select>
                            </div> 

                            <div class="form-group">
                                <label for="nivelE"> Nivel de Escritura: </label>
                                <select id="escritura" name="escritura" class="form-control">
                                    <option> Alto </option>
                                    <option> Medio </option>  
                                    <option> Bajo </option>                                        
                                </select>
                            </div> 

                            <div class="form-group">
                                <label> Fecha de Evaluación: </label>
                                 <input id="fechaev" name="fechaev" type="date" placeholder="dd/mm/aaaa" input class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Examen/ Documento Aprobatorio: </label>
                                 <input id="aprobatorio" name="aprobatorio" class="form-control">
                            </div>                            


                            <div class="form-group">
                                <label> Puntaje/Porcentaje obtenido: </label>
                                 <input id="puntaje" name="puntaje" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-primary" onClick="return confirm('¿Seguro que desea restablecer el formulario?')">Restablecer</button>
                            <button class="btn btn-primary" type="reset">Agregar distinción</button> 
                        </div><!-- end col--> 
                    </form>
                </div><!-- end row-->
            </div><!-- end container-->
         </div><!-- end wraper-->
        
        <!--<script src="../js/content/operaciones_tablas.js"></script>-->
       <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/prototype.js"></script>
       <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/scriptaculous.js"></script>
       <script type="text/javascript" language="javascript" src="../../../js/jsvalidate/jsvalidate.js"></script>
       <script type="text/javascript" language="javascript" src="../../../js/content/operaciones_tablas.js"></script>
    </body>
</html>
