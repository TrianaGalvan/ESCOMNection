<?php 
	define("TITLE","Adscripcion");
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
                           Adscripción
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
                                <label for="entidad"> Entidad:</label>
                              <input id="entidad" name="entidad" class="form-control jsrequired">
                            </div>
                            
                            <div class="form-group">
                                <label for="fechainicioads"> Fecha inicio: </label>
                              <input id="fechainicioads" name="fechainicioads" class="form-control jsrequired" type="date" placeholder="dd/mm/aaaa">
                            </div>
                            
                            <div class="form-group">
                                <label for="fechafinads"> Fecha fin: </label>
                              <input id="fechafinads" name="fechafinads" class="form-control jsrequired" type="date" placeholder="dd/mm/aaaa">
                            </div>
							
                            
                            <div class="form-group">
                              <label for="nombramiento"> Nombramiento: </label>
                              <input class="form-control jsrequired" id="nombramiento" name="nombramiento">
                            </div>
                            
                            
                            <div class="form-group">
                              <label for="direccionads"> Dirección: </label>
                              <input class="form-control" id="direccionads" name="direccionads">
                            </div>
                         
                            <div class="form-group">
                              <label for="privado"> Sección privada: </label>
                              <input name="privado" id="privado" type="checkbox">
                            </div>
                            
                        </div> <!-- end col-->
                        
                        <div class="col-lg-6">
                            <h4>Estructura funcional</h4>
                            <div class="form-group">
                                <label for="sector"> Sector:</label>
                                <input id="sector" name="sector" input class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="organizacion"> Organización:</label>
                                 <input id="organizacion" name="organizacion" input class="form-control">
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
    </body>
</html>
