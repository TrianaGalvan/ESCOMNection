<?php 
    define("TITLE","Datos generales");
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
                           Datos generales
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
                            <h4>Semestre actual</h4>
                            
                            <div class="form-group">
                                <label for="email"> Materias inscritas: </label>
                                <input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('materias');" /> 
                            </div>
                            
                            <div class="form-group">
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('materias');" />
                                <table id="materias" name"materias">
                                    <tr>
                                         <td><strong>Nivel</strong></td>
                                         <td><strong>Materia</strong></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="form-group">
                              <label> Tipo de Beca:</label>
                              <select name="beca" id="beca" class="form-control">
                                <option value="NN" selected>Ninguna</option>
                                <option value="PR">Pronabes</option>
                                <option value="IN">Institucional</option>
                                <option value="TM">Telmex</option>
                                <option value="HH">Harp Helú</option>
                                <option value="BE">Bécalos</option>
                              </select>
                            </div>

                           <div class="form-group">
                                <label> Sección privada: </label>
                                <input name="privado" id="privado" type="checkbox">
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
