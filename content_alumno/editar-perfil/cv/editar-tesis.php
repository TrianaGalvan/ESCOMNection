<?php 
    define("TITLE","Tesis");
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
                           Tesis dirigidas
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
                                <label> Título de la tesis: </label>
                                <input id="Titulo" name="Titulo" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Fecha de Conclusión: </label>
                                 <input id="fecha" name="fecha" type="date" placeholder="dd/mm/aaaa" input class="form-control">
                            </div>


                            <div class="form-group">
                                <label> Autor: </label>
                                <input id="autor" name="autor" class="form-control">
                            </div>                            

                            <div class="form-group">
                                <label> Grado Académico Obtenido: </label>
                                <input id="grado" name="grado" class="form-control">
                            </div>
                        </div><!-- end col-->
                        
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label> Fecha de Obtención del grado: </label>
                                 <input id="fechagrado" name="fechagrado" type="date" placeholder="dd/mm/aaaa" input class="form-control">
                            </div>

                           <div class="form-group">
                                <label> Organización o Institución: </label>
                                 <input id="organizacion" name="organizacion" type="date" placeholder="dd/mm/aaaa" input class="form-control">
                            </div>

                           <div class="form-group">
                                <label> Área del conocimiento: </label>
                                 <input id="area" name="area" type="date" placeholder="dd/mm/aaaa" input class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-primary" onClick="return confirm('¿Seguro que desea restablecer el formulario?')">Restablecer</button>
                            <button class="btn btn-primary" type="reset">Agregar</button> 

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
