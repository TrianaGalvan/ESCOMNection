<?php 
    define("TITLE","Buscar");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_empresa.php");
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Buscar Alumno
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-edit"></i>  Seleccione la información del perfil que debe cumplir cada alumno.
                          </li>
                        </ol>
                    </div>
                </div><!-- end row-->
                
                 <h1>Requisitos</h1>
                 
                 <form role="form" name="buscar" id="buscar">
                     <div class="row">
                         <div class="col-lg-6">
                             <div class="form-group">
                                 <label><i></i> Promedio mayor o igual a &nbsp;&nbsp;</label>
                            
                                 <select name="Promedio" id="Promedio" class="form-control">
                                    <option id="I" value="I">Indistinto</option>
                                    <option id="10" value="10" style="text-align:center;">10</option>
                                    <option id="9" value="9" style="text-align:center;">9</option>
                                    <option id="8" value="8" style="text-align:center;">8</option>
                                    <option id="7" value="7" style="text-align:center;">7</option>
                                    <option id="6" value="6" style="text-align:center;">6</option>
                                    <option id="5" value="5" style="text-align:center;">5</option>
                                    <option id="4" value="4" style="text-align:center;">4</option>
                                    <option id="3" value="3" style="text-align:center;">3</option>
                                    <option id="2" value="2" style="text-align:center;">2</option>
                                    <option id="1" value="1" style="text-align:center;">1</option>
                                    <option id="0" value="0" style="text-align:center;">0</option>
                                </select>
                             </div><!-- end group-->

                             <div class="form-group">
                                <label for="sexo"> Sexo</label>
                                <select id="Sexo" name="Sexo" class="form-control">
                                    <option id="I" value="I">Indistinto</option>
                                    <option id="M" value="M">Masculino</option>
                                    <option id="F" value="F">Femenino</option>
                                </select>
                            </div>  <!-- end group-->

                            <div class="form-group">
                                <label> Lenguaje de programación:&nbsp; &nbsp;&nbsp;&nbsp;</label><input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('Lenguajes');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('Lenguajes');" />
                                <table id="Lenguajes" name="Lenguajes">
                                        <tr>
                                        </tr>
                                </table>
                           </div> <!-- end group-->  
                        </div><!-- end col-->
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Último grado de estudios &nbsp;&nbsp;</label>
                                <select id="GradoEstudios" class="form-control">
                                	<option id="I" value="I">Indistinto</option>
                                    <option id="Preparatoria" value="Preparatoria">Preparatoria</option>
                               	  <option id="Tecnico" value="Tecnico">Técnico</option>
                                  <option id="Ingenieria" value="Ingerniera">Ingeniería</option>
                                  <option id="Maestria" value="Maestria">Maestría</option>
                                  <option id="Doctorado" value="Doctorado">Doctorado</option>
                                </select>
                            </div><!-- end group-->
                            
                            <div class="form-group">
                                <label>Experiencia laboral</label>
                                <select id="GradoEstudios" class="form-control">
                                  <option id="S" value="S">Si</option>
                               	  <option id="N" value="N">No</option>
                                </select>
                            </div><!-- end group-->
                            
                            <div class="form-group">
                                <label> Idiomas: &nbsp; &nbsp;&nbsp;&nbsp;</label>
                                <input type="button" class="btn btn-default" value="Añadir campo" onClick="return addRow('Idiomas');" />
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('Idiomas');" />
                                <p></p>
                                <table id="Idiomas" name="Idiomas">
                                	<tr>
                                    </tr>
                                </table>
                            </div><!-- end group-->
                            <button type="submit" class="btn btn-primary">Buscar</button>
                            <button onClick="return confirm('¿Restablecer búsqueda?')" type="reset" class="btn btn-primary">Reestablecer</button>
                        </div><!-- end col-->
                    </div><!-- end row-->
                 </form><!-- end form-->
            </div><!-- end container-->
        </div><!-- end wrapper-->
        
        <!---- scripts---->
        <script type="text/javascript" src="/../../js/content/operaciones_tablas.js"></script>
    </body>
</html>
