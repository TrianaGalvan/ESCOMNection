<?php 
    define("TITLE","Conferencias");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_alumno.php");
?>

		<link href="../../../css/content/jsvalidate-forms.css" rel="stylesheet">
		<link href="../../../css/content/forms.css" rel="stylesheet">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Conferencias. 
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
                        <form role="form" id="form-conferencia" name="conferencia">
                            <div class="form-group">
                                <label><i class="fa fa-asterisk"></i>T&iacutetulo: </label>
                                <input id="titulo" class="form-control jsrequired" name="titulo">
                            </div>
							
                            <div class="form-group">
                                <label><i class="fa fa-asterisk"></i>Dependencia Responsable: </label>
                                <input id="dependencia" class="form-control jsrequired" name="dependencia">
                            </div>
							
							
                            <div class="form-group">
                                <label for="escolaridad"> Dirigido a:</label>
                                <select id="Select" class="form-control">
                                    <option>Estudiantes</option>
                                    <option>Docentes</option>    
                                    <option>Investigadores</option>
                                </select>
                            </div>  
							
                            <div class="form-group">
                                <label>Nombre del programa acad&eacutemico: </label>
                                <input id="programa" class="form-control jsrequired" name="programa">
                            </div>
							
					  							
							
                            <label>Fecha en que se impartio por primera vez:</label>
                            <div class="form-group">
                                <input class="form-control" type="date" placeholder="dd/mm/aaaa">			
                            </div>
							
                            <div class="form-group">
                                <label for="escolaridad"> Autor&iacutea:</label>
                                <select id="Select" class="form-control">
                                    <option>Propia</option>
                                    <option>junto con otros autores</option>    
                                </select>
                            </div>  							
							
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-primary" onClick="return confirm('¿Seguro que desea restablecer el formulario?')">Restablecer</button>
                            <button class="btn btn-primary" type="reset">Agregar distinción</button>	                   
                </div><!-- end row-->
            </div><!-- end container-->
        </div><!-- end wrapper-->
        
         <!--<script src="../js/content/operaciones_tablas.js"></script>-->
        <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/prototype.js"></script>
        <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/scriptaculous.js"></script>
        <script type="text/javascript" language="javascript" src="../../../js/jsvalidate/jsvalidate.js"></script>
    </body>
</html>
