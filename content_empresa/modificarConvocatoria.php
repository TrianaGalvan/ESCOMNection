 <?php 
    define("TITLE","Modificar convocatoria");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_empresa.php");
?>

        <div id="page-wrapper">
            <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-12">
                       <ol class="breadcrumb" style="margin-top: 15px;">
                           <li>
                               <i class="fa fa-edit"></i>Modifique la convocatoria.
                         </li>
                       </ol>
                   </div>
               </div><!-- end row-->
                <form role="form" id="convocatorias" name="convocatorias">
                    <div class="row">
                        <div class="col-md-6">
                          <h1>Modificar convocatorias</h1>
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
                        
                            <a href="convocatorias.jsp">
                                <button type="button" class="btn btn-primary">Regresar</button>
                            </a>
                          
                      </div><!-- end col-->
                    </div><!-- end row-->                                                               
                </form>
            </div><!-- end container-->
        </div><!-- end wrapper-->
    </body>
</html>
