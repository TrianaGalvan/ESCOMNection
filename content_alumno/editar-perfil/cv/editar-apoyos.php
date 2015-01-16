<?php 
    define("TITLE","Apoyos");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_alumno.php");
?>

  		<link href="../../../css/content/forms.css" rel="stylesheet">
		<link href="../../../css/content/jsvalidate-forms.css" rel="stylesheet">
        <div id="page-wrapper">
            <div class="container-fluid"> 
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Apoyos CONACYT.
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

                        <form role="form" id="lform" name="lform" >
							
				<div class="form-group">
                                <label>N&uacutemero de apoyo: </label>
                                <input id="numapoyo" class="form-control jsrequired" name="numapoyo">
                            </div>

                            <div class="form-group">
                                <label for="tipoapoyo"> Tipo de apoyo:</label>
                                <select id="Select" class="form-control">
                                    <option>Formaci&oacuten acad&eacutemica</option>
                                    <option>Investigaci&oacuten</option>    
                                </select>
                            </div>   

                            <div class="form-group">
                                <label for="subprograma">Subprograma CONACYT:</label>
                                <select id="Select" class="form-control">
                                    <option>Beca</option>
                                    <option>Est&iacutemulo Fiscal</option>  
                                    <option>N&oacutemina SNI</option>
                                    <option>Padr&oacuten Posgrado</option>  
                                    <option>Registro RENIECYT</option>
                                </select>
                            </div>                                                        

                           <div class="form-group">
                                <label>Fecha de Inicio: </label>
                                <input id="fechaI" type="date" class="form-control jsrequired"  name="fechaini" placeholder="dd/mm/aaaa">
                                 <label>Fecha Final: </label>
                                <input id="fechaF" type="date" class="form-control jsrequired"  name="fechafin" placeholder="dd/mm/aaaa">
                            </div>  
			    <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-primary" onClick="return confirm('¿Seguro que desea restablecer el formulario?')">Restablecer</button>
                            <button class="btn btn-primary" type="reset">Agregar distinción</button>
                        </form>
                        
                    </div>  
                </div><!--- end row-->
                 
            </div><!-- end cotainer-fluid-->
        </div><!-- end page-wrapper--> 
        <!--<script src="../js/content/operaciones_tablas.js"></script>-->
        <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/prototype.js"></script>
        <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/scriptaculous.js"></script>
        <script type="text/javascript" language="javascript" src="../../../js/jsvalidate/jsvalidate.js"></script>
    </body>
</html>
