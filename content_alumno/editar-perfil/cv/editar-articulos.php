<?php 
    define("TITLE","Articulos");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_alumno.php");
?>
		<link href="../../../css/content/jsvalidate-forms.css" rel="stylesheet">
		<link href="../../../css/content/forms.css" rel="stylesheet">
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="page-header">
                           Art&iacuteculos Publicados.
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

                <div class="row centrado">
                    <div class="col-lg-7">

                        <form role="form" id="formArticulos" name="articulos">
							
			   <div class="form-group">
                                <label>T&iacutetulo: </label>
                                <input id="titulo" name="tiulo" class="form-control jsrequired" >
                            </div>

                            <div class="form-group">
                                <label>Tipo de art&iacuteculo: </label>
                                <input id="tipo" name="tipo" class="form-control jsrequired">
                            </div>   


                            <div class="form-group">
                                <label>A&ntildeo de Publicaci&oacuten: </label>
                                <input id="anio" name="anio" class="form-control jsrequired">
                            </div>  

                            <div class="form-group">
                                <label>Revista de Publicaci&oacuten: </label>
                                <input id="revista" name="revista" class="form-control jsrequired">
                            </div>  

                            <label>P&aacuteginas que contempla:</label>

                            <div class="form-group">
                                <label>De: </label>
                                <input id="p1" class="form-control jsrequired">
                                 <label>A: </label>
                                <input id="p2" class="form-control jsrequired">
                            </div>  


                            <div class="form-group">                           
                                <label>&Aacuterea del Conocimiento:</label>
                                <input id="area" name="area" class="form-control jsrequired">
                            </div>


                            <div class="form-group">
                                <label>Breve descripci&oacuten: </label>
                            <textarea class="form-control" rows="3"></textarea>
                            </div>
                            
                        </form>
                        <button type="submit" class="btn btn-primary" onClick="return alert('La distinción se ha guardado con éxito.')">Guardar</button>
                        <button type="reset" class="btn btn-primary" onClick="return confirm('¿Seguro que desea restablecer el formulario?')">Restablecer</button>
                        <button class="btn btn-primary" type="reset">Agregar distinción</button>
                    </div><!-- end col-->		
		          </div><!-- end row-->
            </div><!-- end container-->
        </div><!--end wraper-->
        
         <!--<script src="../js/content/operaciones_tablas.js"></script>-->
        <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/prototype.js"></script>
        <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/scriptaculous.js"></script>
        <script type="text/javascript" language="javascript" src="../../../js/jsvalidate/jsvalidate.js"></script>
    </body>
</html>
