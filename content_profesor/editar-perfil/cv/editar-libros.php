<link href="../../../css/content/forms.css" rel="stylesheet">
<link href="../../../css/content/jsvalidate-forms.css" rel="stylesheet">

<?php 
    define("TITLE","Editar Idiomas");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_profesor.php");
?>
        <div id="page-wrapper">
            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Libros. 
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
                </div><!-- end heading-->
                
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" name="libros" id="form-libros">
                            <div class="form-group">
                                <label><i class="fa fa-asterisk"></i>N&uacutemero ISBN: </label>
                                <input id="ISBN" class="form-control jsrequired">
                            </div>
							
                            <div class="form-group">
                                <label>T&iacutetulo: </label>
                                <input id="titulo" class="form-control jsrequired">
                            </div>
                            
                            <div class="form-group">
                                <label>Editorial: </label>
                                <input id="editorial" class="form-control jsrequired">
                            </div>
							
                            <div class="form-group">
                                <label>Edici&oacuten: </label>
                                <input id="edicion" class="form-control jsrequired">
                            </div>			

                            <div class="form-group">
                                <label>A&ntildeo de Publicaci&oacuten: </label>
                                <input id="anio" class="form-control jsrequired">
                            </div>	
							
                            <div class="form-group">
                                <label>Volumen: </label>
                                <input id="vol" class="form-control jsrequired">
                            </div>								
                    </div><!-- end col-->
                
                    <div class="col-lg-6">	
                        <div class="form-group">
                            <label>Numero de P&aacuteginas: </label>
                            <input id="numpag" class="form-control jsrequired">
                        </div>			

                        <div class="form-group">
                            <label>Tiraje: </label>
                            <input id="tiraje" class="form-control jsrequired">
                        </div>	

                        <div class="form-group">
                            <label for="escolaridad"> Idioma</label>
                            <select id="Select" class="form-control">
                                <option>Espa&ntildeol</option>
                                <option>Ingl&eacutes</option>    
                                <option>Alem&aacuten</option>
                                <option>Franc&eacutes</option>
                                <option>Chino Mandar&iacuten</option>									
                            </select>
                        </div>  

                        <div class="form-group">						   
                            <label>&Aacuterea del Conocimiento:</label>
                            <input id="area" class="form-control jsrequired">
                        </div>
                        <button type="submit" class="btn btn-primary" onClick="return alert('La distinción se ha guardado con éxito.')">Guardar</button>
                        <button type="reset" class="btn btn-primary" onClick="return confirm('¿Seguro que desea restablecer el formulario?')">Restablecer</button>
                        <button class="btn btn-primary" type="reset">Agregar distinción</button>
                    </div><!-- end col-->
                     
                </form>                   
              </div><!-- end rrow-->
              
            </div><!--end container-->
        </div><!-- end wrapper-->
        
        <!--<script src="../js/content/operaciones_tablas.js"></script>-->
        <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/prototype.js"></script>
        <script type="text/javascript" language="javascript" src="../../../js/scriptaculous/scriptaculous.js"></script>
        <script type="text/javascript" language="javascript" src="../../../js/jsvalidate/jsvalidate.js"></script>
    </body>
</html>
