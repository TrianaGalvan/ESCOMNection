<?php 
    define("TITLE","Otros datos");
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
                           Otros datos
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
                                <label> Lenguajes de programación: </label> <p></p>
                                <input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('lenguajes');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('lenguajes');" />
                                <table id="lenguajes"  name"lenguajes" >
                                    <TR>
                                        <TD><strong> Lenguaje </strong></TD>
                                        <TD><strong> Certificación </strong></TD>
                                    </TR>
                                </table>
                           </div>
                      
                            
                            <div class="form-group">
                                <label> Software que se conoce: </label><p></p>
                                <INPUT type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('software');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('software');" />
                                <table id="software"  name"software" >
                                    <tr>
                                        <td><strong> Software </strong></td>
                                        <td><strong> Porcentaje </strong></td>
                                    </tr>
                                </table>			
                           </div>
                              
                           <div class="form-group">
                               <label> Habilidades: </label><p></p>
                               <input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('habilidades');" /> 
                               <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('habilidades');" />
                               <table id="habilidades" name="habilidades">
                                    <tr>
                                    </tr>
                                </table>
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <label> Actividades culturales y/o deportivas: </label><p></p>
                                <INPUT type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('actividades');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('actividades');" />
                                <TABLE id="actividades"  name"actividades" >
                                    <TR>
                                        <TD><strong> Actividad </strong></TD>
                                        <td><strong> Horas por semana </strong></td>
                                    </TR>
                                </TABLE>			
                           </div>
                           
                           <div class="form-group">
                                <label> Hobbies: </label><p></p>
                                <INPUT type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('Hobbies');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('Hobbies');" />
                                <TABLE id="Hobbies"  name"Hobbies" >
                                    <TR>
                                        <TD><strong>Hobby</strong></TD>
                                        <td><strong>Horas por semana</strong></td>
                                    </TR>
                                </TABLE>
				
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
