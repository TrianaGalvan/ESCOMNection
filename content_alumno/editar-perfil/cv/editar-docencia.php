<?php 
    define("TITLE","Docencia");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_alumno.php");
?>

		<link href="../../../css/content/forms.css" rel="stylesheet">
		<link href="../../../css/content/jsvalidate-forms.css" rel="stylesheet">
        <div id="page-wrapper">
            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Docencia. 
                        </h2>
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

                        <form role="form" name="docencia" id="form-docencia">
							
                            <div class="form-group">
                                <label><i class="fa fa-asterisk"></i> Instituci&oacuten: </label>
                                <input id="institucion" class="form-control jsrequired">
                            </div>

                            <div class="form-group">
                                <label for="escolaridad"> Nivel de Estudios:</label>
                                <select id="Select" class="form-control">
                                    <option>Doctorado</option>
                                    <option>Maestr&iacutea</option>    
				    <option>Licenciatura</option>
                                    <option>Bachillerato</option>            
				    <option>Secundaria</option>
                                    <option>Primaria</option>      
                                    <option>Preescolar</option>   									
                                </select>
                            </div>  
							
			    <div class="form-group">
                                <label>Nombre del programa acad&eacutemico: </label>
                                <input id="programa" class="form-control jsrequired">
                            </div>
							
			   <div class="form-group">
                                <label>Pa&iacutes:</label>
                                <input id="pais" class="form-control jsrequired">
                            </div>

                            <div class="form-group">
                                <label>Nombre del curso o asignatura:</label>
                                <input id="curso" class="form-control jsrequired">
                            </div>
							
							
							
                            <label>Per&iacutedo en el que se impart&iacuteo:</label>
                            <div class="form-group">
                                <label> De:</label>
                                <input class="form-control" type="date" placeholder="dd/mm/aaaa">
                                <label> A:</label>
                                <input class="form-control" type="date" placeholder="dd/mm/aaaa">								
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-primary" onClick="return confirm('¿Seguro que desea restablecer el formulario?')">Restablecer</button>
                            <button class="btn btn-primary" type="reset">Agregar distinción</button>	
                    </div><!-- end col-->
                </div><!-- end row-->
            </div><!-- end container-->
        </div><!-- end wrapper-->
        
        <!--<script src="../js/content/operaciones_tablas.js"></script>-->
        <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/prototype.js"></script>
        <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/scriptaculous.js"></script>
        <script type="text/javascript" language="javascript" src="../../../js/jsvalidate/jsvalidate.js"></script>
    </body>
</html>
