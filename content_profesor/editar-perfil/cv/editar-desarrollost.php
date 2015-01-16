<link href="../../../css/content/jsvalidate-forms.css" rel="stylesheet">
<link href="../../../css/content/forms.css" rel="stylesheet">
<?php 
    define("TITLE","Editar desarrollos tecnológicos");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_profesor.php");
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Desarrollos tecnológicos
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
                                <label> Nombre del desarrollo: </label>
                                <input id="nombre" name="nombre" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="tipo"> Tipo:</label>
                                <select id="tipo" class="form-control">
                                    <option> Institucional </option>
                                    <option> Gubernamental </option>    
                                </select>
                            </div>  


                            <div class="form-group">
                                <label> Fecha de Inicio: </label>
                                 <input id="fechaini" name="fechaini" type="date" placeholder="dd/mm/aaaa" input class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Fecha de Término: </label>
                                 <input id="fechafin" name="fechafin" type="date" placeholder="dd/mm/aaaa" input class="form-control">
                            </div>                            


                            <div class="form-group">
                                <label> Horas hombre: </label>
                                <input id="hrs" name="hrs" class="form-control">
                            </div>                            

                            <div class="form-group">
                                <label> Costo: </label>
                                <input id="costo" name="costo" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Entidad: </label>
                                <br>
                                <input type="radio" name="publica" value="1"> Pública 
                                <br>
                                <input type="radio" name="privada" value="2" checked> Privada
                                <br>
                                <input type="radio" name="social" value="3"> Sector Social
                            </div>        
                        </div><!-- end col-->
                        
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label> Organización: </label>
                                 <input id="organizacion" name="organizacion" type="date" placeholder="dd/mm/aaaa" input class="form-control">
                            </div>

                           <div class="form-group">
                                <label> Organización o Institución: </label>
                                 <input id="organizacion" name="organizacion" type="date" placeholder="dd/mm/aaaa" input class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Resumen: </label>
                                <br>
                                <textarea id="resumen" class="resumen" rows="8" cols="70"></textarea>
                            </div>


                            <div class="form-group">
                                <label for="apoyo"> ¿Recibió apoyo de algún fondo o programa del CONACYT?: </label>
                                <select id="apoyo" name="apoyo" class="form-control">
                                    <option> SI </option>
                                    <option> NO </option>    
                                </select>
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
