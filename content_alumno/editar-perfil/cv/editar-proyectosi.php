<?php 
    define("TITLE","Proyectos de investigacion");
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
                           Proyectos de investigación
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
                                <label> Tipo de proyecto:</label>
                              <input id="tipo" name="tipo" class="form-control jsrequired">
                            </div>
                            
                            <div class="form-group">
                                <label> Título del proyecto:</label>
                                <input id="Titulo" name="Titulo" class="form-control jsrequired">
                            </div>

                            <div class="form-group">
                                <label> Entidad:</label>
                              <input id="entidad" name="entidad" class="form-control jsrequired">
                            </div>
                            
                            <div class="form-group">
                                <label> Fecha inicio: </label>
                              <input id="fechainicio" name="fechainicio" class="form-control" type="date" placeholder="dd/mm/aaaa">
                            </div>
                            
                            <div class="form-group">
                                <label> Fecha fin: </label>
                              <input id="fechafin" name="Tfechafin" class="form-control" type="date" placeholder="dd/mm/aaaa">
                            </div>
							
                            <div class="form-group">
                                <label>Otras instituciones/Empresas participates: </label><p></p>
                                <input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('Instituciones');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('Instituciones');" />
                                <p></p>
                                <table id="Instituciones" name="Instituciones">
                                    <tr>
                                    </tr>
                                </table>
                            </div>
                             
                             <div class="form-group">
                                <label>Becarios participantes: </label><p></p>
                              <input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('Becarios');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('Becarios');" />
                                <p></p>
                                <table id="Becarios" name="Becarios">
                                	<tr>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="form-group">
                                <label> Organización:</label>
                                <input id="organizacion" name="organizacion" input class="form-control">
                            </div>
                        
                            <div class="form-group">
                                <label> Investigadores participantes:</label><p></p>
                              <input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('Investigadores');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('Investigadores');" />
                                <p></p>
                                <table id="Investigadores" name="Investigadores">
                                	<tr>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="form-group">
                                <label> Aportación a Vinculación/Sector productivo, social y público: </label>
                                <input class="form-control" id="aportacion" name="aportacion">
                            </div>
                            
                            <div class="form-group">
                                <label> Principales logros: </label><p></p>
                                <input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('Logros');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('Logros');" />
                                <p></p>
                                <table id="Logros" name="Logros">
                                	<tr>
                                        </tr>
                                </table>
                            </div>
                           
                      </div><!-- end col-->
                      
                      
                      <div class="col-lg-6">
                        <h4>Estructura funcional</h4>
                        <div class="form-group">
                            <label> Sector:</label>
                            <input id="sector" name="sector" input class="form-control">
                        </div>
                            
                        <div class="form-group">
                            <label> Organización:</label>
                            <input id="organizacion" name="organizacion" input class="form-control">
                        </div>
                            
                        <h4>Área de conocimiento</h4>
                        <div class="form-group">
                            <label> Área: </label>
                            <input class="form-control" id="areaconocimi" name="areaconocimi">
                        </div>
                                
                        <div class="form-group">
                            <label> Disciplina:</label>
                            <input class="form-control" id="disciplina" name="disciplina">
                        </div>
                                
                        <div class="form-group">
                            <label> Subdisciplina: </label>
                            <input class="form-control" id="subdisciplina" name="subdisciplina">
                        </div>

                        <div class="form-group">
                            <h4>Área de económica</h4>
                            <label> Sector: </label>
                            <input class="form-control" id="esector" name="esector">
                        </div>
                            
                        <div class="form-group">
                            <label> Rama:</label>
                            <input class="form-control" id="rama" name="rama">
                        </div>
                            
                        <div class="form-group">
                            <label> Clase: </label>
                            <input class="form-control" id="clase" name="clase">
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
