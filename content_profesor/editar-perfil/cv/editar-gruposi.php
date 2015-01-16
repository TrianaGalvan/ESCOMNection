 <link href="../../../css/content/jsvalidate-forms.css" rel="stylesheet">
<link href="../../../css/content/forms.css" rel="stylesheet">
<?php 
    define("TITLE","Editar grupos de investigación");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_profesor.php");
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Grupos de investigación
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
                    <form role="form" id="grupos-inv" name="grupos">               
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label> Nombre del grupo de investigación:</label>
                                <input class="form-control jsrequired" id="Titulo" name="Titulo" >
                            </div>


                            <div class="form-group">
                                <label> Fecha de creación: </label>
                                <input class="form-control jsrequired" id="Titulo" name="Titulo"  type="date" placeholder="dd/mm/aaaa">
                            </div>

                            <div class="form-group">
                              <label> ¿Es usted el lider?: </label>
                              <input name="lider" id="lider" type="checkbox">
                            </div>

                            <br>

                            <div class="form-group">
                                <label> Nombre: </label>
                                <input class="form-control jsrequired" id="nombre" name="nombre">
                            </div>

                            <div class="form-group">
                                <label> Impacto/Productividad: </label>
                                <input class="form-control jsrequired" id="impacto" name="impacto">
                            </div>

                            <div class="form-group">
                                <label> Vinculación con el sector social: </label>
                                <input class="form-control" id="vinculacionsocial" name="vinculacionsocial">
                            </div>

                            <div class="form-group">
                                <label> Administración: </label>
                                <input class="form-control" id="admin" name="admin">
                            </div>

                    </div>

                    <div class="col-lg-6">
                                   <h4>Estructura funcional</h4>
                               <div class="form-group">
                                   <label> Sector:</label>
                                    <input id="sector" name="sector" input class="form-control">
                               </div>

                               <div class="form-group">
                                   <label> Organización:</label>
                                   <input id="otorgante" name="otorgante" input class="form-control">
                               </div>

                               <br>

                               <div class="form-group">
                                   <label> Miembros: </label><p></p>
                                 <input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('Miembros');" /> 
                                   <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('Miembros');" />
                                   <p></p>
                                   <table id="Miembros" name="Miembros">
                                           <tr>
                                       </tr>
                                   </table>
                               </div>

                               <div class="form-group">
                                   <label> Vinculación con el sector productivo: </label>
                                   <input class="form-control" id="vinculacionprod" name="vinculacionprod">
                               </div>

                               <div class="form-group">
                                   <label> Colaboración: </label>
                                   <input class="form-control" id="colaboracion" name="colaboracion">
                               </div>

                               <div class="form-group">
                                   <label> Programa registrado: </label>
                                   <input class="form-control" id="programa" name="programa">
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
