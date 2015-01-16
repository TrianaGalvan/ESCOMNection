<link href="../../../css/content/forms.css" rel="stylesheet">
<link href="../../../css/content/jsvalidate-forms.css" rel="stylesheet">
<?php 
    define("TITLE","Editar reportes técnicos");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_profesor.php");
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Reportes T&eacutecnicos.
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
                        <form role="form" name="tecnico" id="form-tecnico">
							
                            <div class="form-group">
                                <label>T&iacutetulo del Reporte: </label>
                                <input id="titulo" class="form-control jsrequired">
                            </div>

                            <div class="form-group">
                                <label>Instancia a la que se presenta el Reporte: </label>
                                <input id="instancia" class="form-control jsrequired">
                            </div>

                            <div class="form-group">
                                <label>Descripci&oacuten del Reporte: </label>
                                <input id="descripcion" class="form-control jsrequired">
                            </div>			

                            <div class="form-group">
                                <label>N&uacutemero de P&aacuteginas: </label>
                                <input id="numpag" class="form-control jsrequired">
                            </div>	

                            <div class="form-group">                           
                                <label>&Aacuterea del Conocimiento:</label>
                                <input id="area" class="form-control jsrequired">
                            </div>

                            <label>Fecha de publicaci&oacuten:</label>
                            <div class="form-group">
                                <input class="form-control" type="date" placeholder="dd/mm/aaaa">           
                            </div>


                            <div class="form-group">
                                <label>Objetivo del Reporte: </label>
                            <textarea id="objetivo" class="form-control" rows="3"></textarea>
                            </div>
			
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-primary" onClick="return confirm('¿Seguro que desea restablecer el formulario?')">Restablecer</button>
                            <button class="btn btn-primary" type="reset">Agregar distinción</button>                         
					
                    </div><!-- end col-->					
                </div><!-- end row-->
            </div><!-- end container-->
        </div><!-- end page wrapper-->
        
         <!--<script src="../js/content/operaciones_tablas.js"></script>-->
        <script type="text/javascript" language="javascript" src="../js/scriptaculous/prototype.js"></script>
        <script type="text/javascript" language="javascript" src="../js/scriptaculous/scriptaculous.js"></script>
        <script type="text/javascript" language="javascript" src="../js/jsvalidate/jsvalidate.js"></script>
    </body>
</html>
