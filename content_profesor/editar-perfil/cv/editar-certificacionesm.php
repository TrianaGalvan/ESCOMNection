<link href="../../../css/content/jsvalidate-forms.css" rel="stylesheet">
<link href="../../../css/content/forms.css" rel="stylesheet">

<?php 
    define("TITLE","Editar certificaciones médicas");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_profesor.php");
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Certificaciones médicas
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
                    <form role="form" id="Distinciones" name="Distinciones">
                        <div class="col-md-7">
                                <div class="form-group">
                                    <label> Número de folio de la certificación: </label>
                                    <input id="folio" name="folio" input class="form-control">
                                </div>    

                                <div class="form-group">
                                    <label> Especialidad: </label>
                                    <input id="especialidad" name="especialidad" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label> Consejo que otorga la cetificación: </label>
                                    <input id="consejo" name="consejo" class="form-control">
                                </div>

                                <label>Vigencia del Certificado.</label>    

                                <div class="form-group">
                                    <label> Fecha de Inicio: </label>
                                    <input id="fechaini" name="fechaini" type="date" placeholder="dd/mm/aaaa" input class="form-control">
                                </div>

                                <div class="form-group">
                                    <label> Fecha Fin: </label>
                                    <input id="fechafin" name="fechafin" type="date" placeholder="dd/mm/aaaa" input class="form-control">
                                </div>      

                                <div class="form-group">
                                    <label> Tipo de certificación: </label>
                                    <input id="tipo" name="tipo" class="form-control">
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
