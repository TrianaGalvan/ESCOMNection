 <?php 
    define("TITLE","Convocatorias");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_empresa.php");
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li>
                            <a class="active" href="#modificar" data-toggle="tab" role="tab">Modificar convocatorias</a>
                        </li>
                        <li>
                            <a class="active" href="#publicar" data-toggle="tab" role="tab">Publicar convocatorias</a>
                        </li>
                        <li>
                            <a class="active" href="#ver" data-toggle="tab" role="tab">Ver convocatorias</a>
                        </li>
                    </ul><!-- end ul-->
                </div><!-- end tabbable-->
                
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="modificar">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Modificar convocatoria</h1>
                                <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-edit"></i> Seleccione la convocatoria a modificar.</li>
                                </ol>
                            </div>
                        </div><!-- end row-->
                        
                        <div class="row">
                            <div class="col-lg-10">
                                
                                <table class="table table-hover table-responsive table-striped" style="margin-left:60px;">
                                    <tr>
                                        <th>
                                            Nombre de la convocatoria 
                                        </th>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                           <a href="${pageContext.request.contextPath}/content_empresa/modificarConvocatoria.jsp" > Convocatoria1 </a>
                                        </td>
                                           
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                             <a href="${pageContext.request.contextPath}/content_empresa/modificarConvocatoria.jsp" > Convocatoria2 </a>
                                        </td>
                                    </tr>
                                </table>            
                            </div><!-- end col-->
                        </div><!-- end row-->
                    </div><!-- end tab-pane-->
                    
                    <div class="tab-pane" id="publicar">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <ol class="breadcrumb" style="margin-top: 15px;">
                                    <li>
                                        <i class="fa fa-edit"></i>Publique la convocatoria correspondiente
                                  </li>
                                </ol>
                            </div>
                        </div><!-- end row-->
                         
                         <form role="form" id="convocatorias" name="convocatorias">
                             <div class="row">
                                 <div class="col-md-6">
                                     <h1>Publicar convocatorias</h1>
                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Nombre de la convocatoria </label>
                                        <input id="nombre" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Puesto </label>
                                        <input id="puesto" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label> Fecha de Publicación </label>
                                        <input class="form-control" type="date" placeholder="dd/mm/aaaa">
                                    </div>

                                    <div class="form-group">
                                        <label> Sueldo Máximo</label>
                                        <input class="form-control">
                                    </div>  

                                    <div class="form-group">
                                        <label> Sueldo Mínimo </label>
                                        <input class="form-control">
                                    </div>
                                     
                                    <div class="form-group">
                                        <label for="escolaridad"> Escolaridad </label>
                                        <select id="Select" class="form-control">
                                            <option>Indistinto</option>
                                            <option>Preparatoria</option>    
                                                                                <option>Técnico</option>
                                            <option>Ingeniería</option>            
                                                                                <option>Maestría</option>
                                            <option>Doctorado</option>                         
                                        </select>
                                    </div>                                                                                                       
                                    
                                    <div class="form-group">
                                        <label> Lenguajes de programación </label>
                                        <input  type="button" class="btn btn-default" style="margin-left: 50px;" value="Añadir campo" onClick="return addRow('Lenguajes');" /> 
                                        <input  type="button" class="btn btn-default" value="Eliminar campo" onClick="return deleteRow('Lenguajes');" />
                                        <p></p>
                                        <table id="Lenguajes" name="Lenguajes">
                                                <tr>
                                                </tr>
                                        </table>
                                    </div>  
                                     
                                    <div class="form-group">
                                        <label for="tiempo"> Experiencia Mínima</label>
                                        <select name="select" class="form-control" id="select">
                                          <option>Ninguna</option>
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                          <option>6</option>
                                          <option>7</option>
                                          <option>8</option>
                                          <option>9</option>
                                          <option>10</option>
                                          <option>11</option>
                                        </select>
                                        <select name="select" class="form-control" id="select">
                                          <option>Ninguna</option>
                                          <option>Años</option>
                                          <option>Meses</option>
                                          <option>Años</option>
                                        </select>
                                    </div>
						  
                                    <div class="form-group">
                                        <label> Idiomas </label>
                                        <input type="button" class="btn btn-default" style="margin-left: 190px;" value="Añadir campo" onClick="return addRow('Idiomas');" />
                                        <input type="button" class="btn btn-default" value="Eliminar campo" onClick="return deleteRow('Idiomas');" />
                                        <table id="Idiomas" name="Idiomas">
                                            <tr>
                                            </tr>
                                        </table>
                                    </div>
						  
                                    <div class="form-group">
                                        <label> Prestaciones </label>
                                        <input type="button" class="btn btn-default" style="margin-left: 156px;" value="Añadir campo" onClick="return addRow('Prestaciones');" />
                                        <input type="button" class="btn btn-default" value="Eliminar campo" onClick="return deleteRow('Prestaciones');" />
                                        <table id="Prestaciones" name="Prestaciones">
                                            <tr>
                                            </tr>
                                        </table>
                                    </div>
                                     
                                    <div class="form-group">
                                        <label> Zona de Trabajo </label>
                                        <input name="Input" class="form-control">
                                    </div>
                                     
                                     <div class="form-group">
                                        <label> Observaciones </label>
                                        <input name="Input2" class="form-control">
                                    </div>
                                 </div><!-- end col-->
                                 
                                 <div class="col-md-6">
                                     <h1>Datos de Reclutador</h1>
                                     <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Nombre de la Empresa</label>
                                         <input id="empresa" input class="form-control">
                                     </div>
                                     
                                     <div class="form-group">
                                         <label><i class="fa fa-asterisk"></i> Nombre de Contacto de Reclutador</label>
                                         <input id="contacto" input class="form-control">
                                     </div>
                            
                                     <div class="form-group">
                                         <label><i class="fa fa-asterisk"></i> Email</label>
                                         <input id="email" input class="form-control">
                                     </div> 
                                     <button type="submit" class="btn btn-primary">Agregar</button>
                                     <button type="reset" class="btn btn-primary">Reestablecer</button>
                                 </div><!-- end col-->
                             </div><!-- end row-->                                                               
                         </form>
                    </div><!-- end tab-pane-->
                    
                    <div class="tab-pane" id="ver">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Ver convocatoria</h1>
                                <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-edit"></i> Seleccione la convocatoria para desplegar los postulantes en la misma.</li>
                                </ol>
                            </div>
                        </div><!-- end row-->
                        
                        <div class="row">
                            <div class="col-lg-10">
                                
                                <table class="table table-hover table-responsive table-striped" style="margin-left:60px;">
                                    <tr>
                                        <th>
                                            Nombre de la convocatoria 
                                        </th>
                                        <th>
                                            Postulantes
                                        </th>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                           <a href="javascript:;" data-toggle="collapse" data-target="#Convocatoria1"> Convocatoria1 <i class="fa fa-fw fa-caret-down"></i></a></span>
                                           <ul id="Convocatoria1" class="collapse">
                                                <p align="center"><a href="#">Pedro</a></p>
                                                <p align="center"><a href="#">Juan</a></p>
                                                <p align="center"><a href="#">Luis</a></p> 
                                            </ul>
                                        </td>
                                        <td>
                                             3
                                        </td>    
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <a href="javascript:;" data-toggle="collapse" data-target="#Convocatoria2"> Convocatoria1 <i class="fa fa-fw fa-caret-down"></i></a></span>   
                                             <ul id="Convocatoria2" class="collapse">
                                                <p align="center"><a href="#">Pedro</a></p>
                                            </ul>
                                        </td>
                                        <td>
                                            1
                                        </td>
                                    </tr>
                                </table>            
                            </div><!-- end col-->
                        </div><!-- end row-->
                    </div><!-- end tab-pane-->
                </div><!-- end tab content-->
            </div><!-- end cotainer-->
        </div><!-- end wrapper-->
    </body>
</html>
