<?php 
    define("TITLE","Datos Generales");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_alumno.php");
	include($_SERVER["DOCUMENT_ROOT"]."/lib/control/controlDatosPersonales.php");
	include($_SERVER["DOCUMENT_ROOT"]."/lib/logic/logicaComun.php");
?>

<link type="text/css" rel="stylesheet" href="../../../css/content/conf-general.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>

    <div id="page-wrapper">
        <div class="container-fluid">
            
            <div class="tabbable">
                
                <ul class="nav nav-tabs">
                    <li>
                        <a class="active" data-target="#generales" data-toggle="tab">Datos generales</a>
                    </li>
                    <li>
                        <a href="#escolares" data-toggle="tab">Datos escolares</a>
                    </li>
                    <li>
                        <a href="#otros" data-toggle="tab">Otros datos</a>
                    </li>
                </ul><!-- end nav-tbs-->
                
            </div><!-- en tabbable-->
            
            <div class="tab-content">
               
                <div class="tab-pane fade in active" id="generales">
                    <div class="row">
                         <div class="row">
                            <div class="col-md-4"><h3 style="margin-left:10px;">Datos personales</h3></div>
                            <div class="col-md-8"><h3 style="margin-left:140px;">Dirección</h3></div>
                        </div><!-- end row-->
                
                        
                        <div class="col-md-1 vertical-line"></div>
                        
                        <div class="col-md-2">
                                Nombre:  
                        </div>
                        
                        <div class="col-md-3 vertical-line">                            
                        		<?php 
                        			if(!empty($DatosGenerales->get_nombre())){
                        				echo $DatosGenerales->get_nombre();	
                        			}									
									else{
										echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
									}
                        			
                        		?>
                        </div>
                        
                        <div class="col-md-2">
                                Calle:                            
                        </div>
                        
                        <div class="col-md-push-5">
                                <?php 
                        			if(!empty($direccion->get_calle())){
                        				echo htmlentities($direccion->get_calle());	
                        			}									
									else{
										echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
									}
                        			
                        		?>    
                        </div>
                        
                    </div><!end row-->
                    
                    <div class="row">
                            <div class="col-md-1 vertical-line"></div>
                            <div class="col-md-2">
                                <p>
                                    Apellido paterno:
                                </p>
                            </div>
                            <div class="col-md-3 vertical-line">
                                <p>
                                    <?php 
                        			if(!empty($DatosGenerales->get_ApPat())){
                        				echo $DatosGenerales->get_ApPat();	
                        			}									
									else{
										echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
									}
                        			
                        		?>
                                </p>
                            </div>
                            
                             <div class="col-md-2">
                                 Número exterior:                            
                             </div>
                        
                            <div class="col-md-push-5">
                                 <?php 
                        			if(!empty($direccion->get_numExt())){
                        				echo $direccion->get_numExt();	
                        			}									
									else{
										echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
									}
                        			
                        		?>    
                            </div>
                        
                    </div><!-- end row-->
                    
                    <div class="row">
                            <div class="col-md-1 vertical-line"></div>
                            <div class="col-md-2">
                                <p>
                                    Apellido materno:
                                </p>
                            </div>
                            <div class="col-md-3 vertical-line">
                                <p>
                                    <?php 
	                        			if(!empty($DatosGenerales->get_ApMat())){
	                        				echo $DatosGenerales->get_ApMat();	
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			?>
                                </p>
                            </div>
                            
                             <div class="col-md-2">
                                Número interior:                            
                            </div>

                            <div class="col-md-push-5">
                                   <?php 
	                        			if(!empty($direccion->get_numInt())){
	                        				echo $direccion->get_numInt();	
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			
                        			?> 
                            </div>
                        
                    </div><!-- end row-->
                    
                    <div class="row">
                    	
							<div class="col-md-1 vertical-line"></div>
								<div class="col-md-2">
									<p>
										CURP:
									</p>
								</div>
								<div class="col-md-3 vertical-line">
									<p>
										<?php 
	                        			if(!empty($DatosGenerales->get_curp())){
	                        				echo $DatosGenerales->get_curp();	
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			
                        			?> 
									</p>
								</div>								
								<div class="col-md-2">
									<p>
										Colonia:
									</p>
								</div>
								<div class="col-md-push-5">
									<p>
										<?php 
	                        			if(!empty($direccion->get_colonia())){
	                        				$imp  = (string)$direccion->get_colonia();
	                        				echo htmlentities($imp);	
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			
                        			?> 
									</p>
								</div>
							</div><!-- end row-->
							<div class="row">
								<div class="col-md-1 vertical-line"></div>
								<div class="col-md-2">
									<p>
										Sexo:
									</p>
								</div>
								<div class="col-md-3 vertical-line">
									<p>
										<?php 
	                        			if(!empty($DatosGenerales->get_sexo())){
	                        				// verificando la clave de el sexo
	                        				if($DatosGenerales->get_sexo() == 1){
	                        					echo "Mujer";	
	                        				}
											else if($DatosGenerales->get_sexo() == 0){
												echo "Hombre";
											}
	                        					
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			
                        			?>   
									</p>
								</div>
								<div class="col-md-2">
									Código postal:                            
								</div>

								<div class="col-md-push-5">
									<?php 
	                        			if(!empty($direccion->get_codigoPostal())){
	                        				echo $direccion->get_codigoPostal();	
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			
                        			?> 
								</div>
							</div><!-- end row-->
							<div class="row">
								<div class="col-md-1 vertical-line"></div>
								<div class="col-md-2">
									<p>
										Estado civil:
									</p>
								</div>
								<div class="col-md-3 vertical-line">
									<p>
										<?php 
	                        			if(!empty($estadoCivil->get_EstadoCivil())){
	                        				echo $estadoCivil->get_EstadoCivil();	
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			
                        			?>   
									</p>
								</div>
								<div class="col-md-2">
										Estado:                            
								</div>
								<div class="col-md-push-5">
										<?php 
	                        			if(!empty($direccion->get_estadoRepublica_id())){
	                        				echo $direccion->get_estadoRepublica_id();	
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			
                        			?> 
								</div>
							</div><!-- end row-->
                    
							<div class="row">
								<div class="col-md-1 vertical-line"></div>
								<div class="col-md-2">
									<p>
										Fecha de nacimiento:
									</p>
								</div>
								<div class="col-md-3 vertical-line">
									<p>
										15/10/1993   
									</p>
								</div>
								<div class="col-md-2">
									Delegación o municipio:                            
								</div>

								<div class="col-md-push-5">
										<?php 
	                        			if(!empty($direccion->get_municipio())){
	                        				echo $direccion->get_municipio();	
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			
                        			?>     
								</div>	
							</div><!-- end row-->
							<div class="row">
								<div class="col-md-1 vertical-line"></div>
								<div class="col-md-2">
									<p>
										País de nacimiento:
									</p>
								</div>
								<div class="col-md-3">
									<p>
										México  
									</p>
								</div>
							</div><!-- end row-->
                    
							<div class="row">
								<div class="col-md-1 vertical-line"></div>
								<div class="col-md-2">
									<p>
										Entidad de nacimiento:
									</p>
								</div>
								<div class="col-md-3">
									<p>
										México
									</p>
								</div>
							</div><!-- end row-->
                    
							<div class="row">
								<div class="col-md-1 vertical-line"></div>
								<div class="col-md-2">
									<p>
										Teléfono:
									</p>
								</div>
								<div class="col-md-3">
									<p>
										 <?php 
	                        			if(!empty($DatosGenerales->get_telefono())){
	                        				echo $DatosGenerales->get_telefono();	
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			
                        			?>        
									</p>
								</div>
							</div><!-- end row-->
                    
							<div class="row">
								<div class="col-md-1 vertical-line"></div>
								<div class="col-md-2">
									<p>
										Móvil:
									</p>
								</div>
								<div class="col-md-3">
									<p>
										<?php 
	                        			if(!empty($DatosGenerales->get_movil())){
	                        				echo $DatosGenerales->get_movil();	
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			
                        			?> 
									</p>
								</div>
							</div><!-- end row-->
                    
							<div class="row">
								<div class="col-md-1 vertical-line"></div>
								<div class="col-md-2">
									<p>
										Correo electrónico:
									</p>
								</div>
								<div class="col-md-3">
									<p>
										<?php 
	                        			if(!empty($DatosGenerales->get_correo())){
	                        				echo $DatosGenerales->get_correo();	
	                        			}									
										else{
											echo LogicaComun::MSJNOHAYDATOSREGISTRADOS;
										}
                        			
                        			?> 
									</p>
								</div>
							</div><!-- end row-->
							
						</div><!-- end tab-pane-->
              	
                         
                
                <!-------------------------------------- tab Datos escolares----------------------------------------> 
                <div class="tab-pane fade" id="escolares">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="titulo">Semestre actual</h3>
                        </div>
                    </div><!-- end row-->
                    
                     <div class="row center_div" style="margin-left:140px;">
                        <div class="col-md-10">
                        <div class="panel panel-default" style="margin-top: 20px;">
                            <div class="panel-heading">
                              <h3 class="panel-title">Información académica</h3>
                            </div>
                            <div class="panel-body">
                                <strong>Tiene beca: </strong>Si<br>
                                <strong>Tipo de beca: </strong>Pronabes<br>
                                <strong>Promedio: </strong>9<br>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-md-12">
                            <h4 class="titulo">Materias inscritas</h4>
                        </div>
                    </div>
                    
                    <div class="col-md-8 center_div">
								<table class="table table-hover table-responsive table-striped" style="margin-top: 30px;">
									<th>Nivel</th>
									<th>Materia</th>
										
									<tr>
										<td>1</td>
										<td>Análisis y Diseño Orientado a Objetos</td>
									</tr>

									<tr>
										<td>2</td>

										<td>Teoría de Comunicaciones y Señales</td>
									</tr>

									<tr>
										<td>3</td>
										<td>Sistemas Operativos</td>
									</tr>
								</table>
							</div><!-- end col-md-8-->
                    
							<div class="row">
								<div class="col-md-12">
									<h4 class="titulo">Materias cursadas</h4>
								</div>
							</div>
                    
							<div class="col-md-8 center_div">
								<table class="table table-hover table-responsive table-striped" style="margin-top: 30px;">
									<th>Nivel</th>	
									<th>Materia</th>
									<th>Calificación</th>
									<tr>
										<td>2</td>
										<td>Redes de computadoras</td>
										<td>10</td>
									</tr>

									<tr>
										<td>2</td>
										<td>Probabilidad y estadística</td>
										<td>8</td>
									</tr>

									<tr>
										<td>2</td>
										<td>Diseño de sistemas digitales</td>
										<td>9</td>
									</tr>
									<th>Promedio</th>	
									<th> </th>
									<th>9.0</th>									
								</table>
							</div><!-- end col-md-8-->
                 
                </div><!-- end tab-pane-->
                
                 
                    
                    
                <div class="tab-pane fade" id="otros">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="titulo">Lenguajes de programación</h4>
                        </div>
                    </div>
                    
                    <div class="col-md-8 center_div">
                        <table class="table table-hover table-responsive table-striped" style="margin-top: 30px;">
                            
                            <th>
                                Nombre de el lenguaje
                            </th>
                            <th>
                                Certificación
                            </th>
                            <tr>
                                <td>
                                    C
                                </td>
                                <td>
                                    No
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    MySQL
                                </td>

                                <td>
                                    No
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Pyton
                                </td>
                                <td>
                                    Si
                                </td>
                            </tr>
                        </table>
                    </div><!-- end col-md-8-->
                    <!------------------------------------ table software--------------------------------------->
                     <div class="row">
                        <div class="col-md-12">
                            <h4 class="titulo">Software que conoces</h4>
                        </div>
                    </div>
                    
                    <div class="col-md-8 center_div">
                        <table class="table table-hover table-responsive table-striped" style="margin-top: 30px;">
                           
                            <th>
                               Nombre del software
                            </th>
                            
                            <tr>
                                <td>
                                    Paquetería Ofiice
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Adobe Illustrator
                                </td>
                            </tr>

                        </table>
                    </div><!-- end col-md-8-->
                    
                    <!----------------------------------- table habilidades---------------------------------------->
                     <div class="row">
                        <div class="col-md-12">
                            <h4 class="titulo">Habilidades</h4>
                        </div>
                    </div>
                    
                     <div class="col-md-8 center_div">
                        <table class="table table-hover table-responsive table-striped" style="margin-top: 30px;">
                                               
                            <tr>
                                <td>
                                    Autoconocimiento
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Toma de decisiones
                                </td>
                            </tr>

                        </table>
                    </div><!-- end col-md-8-->
                    
                    <!---------------------------------------- table actividades culturales o deportivas---------------------->
                     <div class="row">
                        <div class="col-md-12">
                            <h4 class="titulo">Actividades culturales y/o deportivas</h4>
                        </div>
                    </div>
                    
                    <div class="col-md-8 center_div">
                        <table class="table table-hover table-responsive table-striped" style="margin-top: 30px;">
                            
                            <th>
                                Actividades
                            </th>
                            <th>
                                Horas por semana
                            </th>
                            <tr>
                                <td>
                                    Correr
                                </td>
                                <td>
                                    2
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Yoga
                                </td>
                                <td>
                                    1
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nadar
                                </td>
                                <td>
                                    1
                                </td>
                            </tr>

                        </table>
                    </div><!-- end col-md-8-->
                    
                    <!---------------------------------------- table Hobbies----------------------------------------------->
                     <div class="row">
                        <div class="col-md-12">
                            <h4 class="titulo">Hobbies</h4>
                        </div>
                    </div>
                    
                    <div class="col-md-8 center_div">
                        <table class="table table-hover table-responsive table-striped" style="margin-top: 30px;">
                                                        
                            <tr>
                                <td>
                                   Escuchar música
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Ir al cine
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Comer helado
                                </td>
                                
                            </tr>
                            <tr>
                                 <td>
                                Aprender nuevas cosas
                                </td>
                            </tr>
                           

                        </table>
                    </div><!-- end col-md-8-->
                </div><!-- end tab-pane-->
            </div><!-- end tab-content-->
        </div><!-- end container fluid-->
    </div><!-- wrapper-->
        
        <script type="text/javascript" src="../../../js/content/modernizr.custom.04022.js"></script>
    </body>
</html>
