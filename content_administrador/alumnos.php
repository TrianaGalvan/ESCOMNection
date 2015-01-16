<?php
	define("TITLE","Alumnos");
	include("../includes/basic_administrador.php");
;?>
       
    <!-- Mensajes -->
		<div class="modal fade" id="mensajeCerrarCuenta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Mensajes de Alerta.</h4>
			  </div>
			  <div class="modal-body">
				¿Seguro que desea cerrar la cuenta del Alumno?
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
			  </div>
			</div>
		  </div>
		</div>	
		<div class="modal fade" id="mensajeDatosVacios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Mensajes de Error.</h4>
			  </div>
			  <div class="modal-body">
				Uno o más campos obligatorios se encuentran vacíos.
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
			  </div>
			</div>
		  </div>
		</div>		
		<div class="modal fade" id="mensajeConfirmacionAlta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Mensajes de confirmación.</h4>
			  </div>
			  <div class="modal-body">
				Se ha dado de alta al Alumno correctamente.
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
			  </div>
			</div>
		  </div>
		</div>	
		<div class="modal fade" id="mensajeErrorFormato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Mensajes de Error.</h4>
			  </div>
			  <div class="modal-body">
				Campo(s) con formato incorrecto. Uno o más campos no cumplen con el formato establecido.
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
			  </div>
			</div>
		  </div>
		</div>			

    <div id="page-wrapper">
    	
        <div class="container-fluid">
        	
            <div class="tabbable">
                 <ul class="nav nav-tabs">
                    <li>
                        <a class="active" href="#alta" data-toggle="tab" role="tab"> <i class="fa fa-check"></i> Alta de cuenta</a>
                    </li>
                    <li>
                        <a class="active" href="#baja" data-toggle="tab" role="tab"><i class="fa fa-times"></i> Baja de cuenta</a>
                    </li>
                    <li>
                        <a class="active" href="#reestablecer" data-toggle="tab" role="tab"><i class="fa fa-cogs"></i> Restablecer contraseña</a>
                    </li>
                                            <li>
                        <a class="active" href="#buscar" data-toggle="tab" role="tab"><i class="fa fa-search"></i>
    Búsqueda</a>
                    </li>
                </ul><!-- end ul-->
            </div><!-- end tabbable-->

            <div class="tab-content">
                <div class="tab-pane fade in active" id="alta">
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Agregar Alumno
                                </h1>
                                <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-edit"></i>  Introduzca los datos del Alumno para dar de alta su perfil.
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-asterisk"></i> Campos Obligatorios
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- /.Heading -->

                        <div class="row">
                            <div class="col-lg-6">

                                <h1>Datos generales</h1>
                                <form role="form">

                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Nombre</label>
                                        <input class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Apellido Paterno</label>
                                        <input class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Apellido Materno</label>
                                        <input class="form-control">
                                    </div>  

                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> CURP</label>
                                        <input class="form-control">
                                    </div>       

                                    <div class="form-group">
                                        <label for="sexo"><i class="fa fa-asterisk"></i> Sexo</label>
                                        <select id="Select" class="form-control">
                                            <option>Masculino</option>
                                            <option>Femenino</option>                                    
                                        </select>
                                    </div>                                                                                                       
                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Fecha de nacimiento</label>
                                        <input class="form-control" placeholder="aaaa-mm-dd">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                    <button type="reset" class="btn btn-primary">Limpiar</button>

                                </form>

                            </div>
                            <div class="col-lg-6">
                                <h1>Datos de acceso</h1>

                                <form role="form">
                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Número de boleta</label>
                                        <input class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Contraseña</label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Repetir contraseña</label>
                                        <input type="password" class="form-control">
                                    </div> 
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div><!-- end pane-->

                 <div class="tab-pane fade" id="baja">
                    <div class="container-fluid">
                            <!-- Page Heading -->
                            <div class="page-header">
                                <h1>Baja Alumno</h1>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                	<div class="form-group">
                        		        <label><i class="fa fa-asterisk"></i> Número de boleta</label>
                                        <input class="form-control">
                                	</div>
                                        <button type="submit" class="btn btn-primary">Buscar</button>
                                        <button type="reset" class="btn btn-primary">Limpiar</button>
                                </div>	
                            </div>				

                            <div class="page-header">

                            </div>

                            <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Avalos Reyes Brenda Mirel</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/7.jpg" alt="Image" />
                                    2013630511
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    

                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>	
									


								
									
                                </div>
                            </div>
                        </div><!-- end col-->

                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Díaz Monroy Blanca Monserrat</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/11.jpg" alt="Image" />
                                    2013630179
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
                                </div>
                            </div>
                        </div><!-- end col-->

                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Gómez Chávez Maykaren</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/16.jpg" alt="Image" />
                                    2013630214
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
                                </div>
                            </div>
                        </div><!-- end col-->

                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Hernández Hernández Miguel</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/10.jpg" alt="Image" />
                                        2013630233
                                        &nbsp;&nbsp;&nbsp;&nbsp;

                                        &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>								
                                </div>
                            </div>
                        </div><!-- end col-->

                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Martínez Paredes Enya Valeria</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/8.jpg" alt="Image" />
                                    2013630026
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
                                </div>
                            </div>
                        </div>

                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Moreno Salinas Jessica</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/12.jpg" alt="Image" />
                                    2013630026
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
                                </div>
                            </div>
                        </div>

                         <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Moreno Tinoco Aldo</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/9.jpg" alt="Image" />
                                    2013630007
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>								
                                </div>
                            </div>
                        </div>

                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Nuñez Rubio Karina Juana</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/5.jpg" alt="Image" />
                                    2013630319
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
                                </div>
                            </div>
                        </div>

                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Prieto Galván Triana Andalucía</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/1.jpg" alt="Image" />
                                        2013630348
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>								
                                </div>
                            </div>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ramírez Flores Brenda Paola</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/6.jpg" alt="Image" />
                                    2013630356
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
                                </div>
                            </div>
                        </div>

                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ramírez García Ana Rubí</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/3.jpg" alt="Image" />
                                    2013630357
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>								
                                </div>
                            </div>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ramo Jacobo Rafael Rodrigo</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="/img/listado/4.jpg" alt="Image" />
                                     2013630581
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>								
                                </div>
                            </div>
                        </div>
                    </div><!-- end container-->
                </div><!-- end pane-->

                <div class="tab-pane fade" id="restablecer">
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Restablecer contraseña
                                </h1>
                                <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-edit"></i>  Introduzca los datos del alumno para cambiar su contraseña.
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-asterisk"></i> Campos Obligatorios
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- /.Heading -->

                        <div class="row">
                            <div class="col-lg-6">

                                                        <h1>Datos de acceso</h1>


                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Número de boleta</label>
                                        <input class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Contraseña</label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Repetir contraseña</label>
                                        <input type="password" class="form-control">
                                    </div> 

                                    <button type="submit" class="btn btn-primary">Cambiar</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>



                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div><!-- end pane-->

                <div class="tab-pane fade" id="buscar">
					<div class="page-header">
                           <h1>Buscar Alumno</h1>
                    </div>
					<div class="row">
						<div class="col-lg-6">
									<div class="form-group">
											<label><i class="fa fa-asterisk"></i> Número de boleta</label>
											<input class="form-control">
									</div>		
									<button type="submit" class="btn btn-primary">Buscar</button>
									<button type="reset" class="btn btn-primary">Limpiar</button>
						</div>	
					</div>				
                    <div class="row">
						<div class="page-header">
						</div>

						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Avalos Reyes Brenda Mirel</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/7.jpg" alt="Image" />
									2013630511

									<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>

									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>								
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Díaz Monroy Blanca Monserrat</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/11.jpg" alt="Image" />
									 2013630179

							<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>  

									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Gómez Chávez Maykaren</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/16.jpg" alt="Image" />
										2013630214

							<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>  

									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Hernández Hernández Miguel</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/10.jpg" alt="Image" />
									2013630233

							<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>  

									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>								
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Martínez Paredes Enya Valeria</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/8.jpg" alt="Image" />
									2013630026

							<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>  

									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Moreno Salinas Jessica</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/12.jpg" alt="Image" />
									2013630026

							<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>  

									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Moreno Tinoco Aldo</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/9.jpg" alt="Image" />
									2013630007

							<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>  

									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>								
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Nuñez Rubio Karina Juana</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/5.jpg" alt="Image" />
										2013630319

							<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>  
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Prieto Galván Triana Andalucía</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/1.jpg" alt="Image" />
									2013630348
							<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>  

									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>								
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Ramírez Flores Brenda Paola</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/6.jpg" alt="Image" />
									2013630356

							<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>  
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Ramírez García Ana Rubí</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/3.jpg" alt="Image" />
										2013630357

							<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>  
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>								
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Ramo Jacobo Rafael Rodrigo</h3>
								</div>
								<div class="panel-body">
									<img src="/img/listado/4.jpg" alt="Image" />
									2013630581
							<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>  

									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>								
								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->					
                    </div>
                </div>

                <div class="tab-pane fade" id="reestablecer">
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Reestablecer contraseña
                                </h1>
                                <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-edit"></i>  Introduzca los datos del alumno para cambiar su contraseña.
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-asterisk"></i> Campos Obligatorios
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- /.Heading -->

                        <div class="row">
                            <div class="col-lg-6">

                                                        <h1>Datos de acceso</h1>

                                <form role="form">
                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Número de boleta</label>
                                        <input class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Contraseña</label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><i class="fa fa-asterisk"></i> Repetir contraseña</label>
                                        <input type="password" class="form-control">
                                    </div> 

                                    <button type="submit" class="btn btn-primary">Cambiar</button>
                                    <button type="reset" class="btn btn-primary">Limpiar</button>

                                </form>

                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div><!-- end pane-->
                    
					
					<div class="tab-pane fade" id="modificar">
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Modificar datos del Alumno
                                </h1>
                                <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-edit"></i>  Introduzca los datos del alumno que desea modificar.
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-asterisk"></i> Campos Obligatorios
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- /.Heading -->

						<div class="row">

							<div class="col-lg-6">    
									<div class="form-group">
										<label><i class="fa fa-asterisk"></i> Número de Boleta: </label>
										<input type="text" id="boleta" size="10" maxlength="11" name="boleta" class="form-control">
									</div>							
									<div class="form-group">
										<label><i class="fa fa-asterisk"></i> Nombre: </label>
										<input id="Nombre" name="Nombre" class="form-control">
									</div>
									<div class="form-group">
										<label><i class="fa fa-asterisk"></i> Apellido Paterno </label>
										<input id="apellidoPat" name="apellidoPat" class="form-control">
									</div>
									<div class="form-group">
										<label><i class="fa fa-asterisk"></i> Apellido Materno </label>
										<input id="apellidoMat" name="apellidoMat" class="form-control">
									</div>                            
									<div class="form-group">
										<label><i class="fa fa-asterisk"></i> CURP:</label>
										<input id="curp" name="curp" class="form-control">
									</div>     
									<div class="form-group">
										<label for="sexo"><i class="fa fa-asterisk"></i> Sexo:</label>
										<select id="sexo" name="sexo" class="form-control">
											<option>Masculino</option>
											<option>Femenino</option>    
										</select>
									</div>  
									<div class="form-group">
										<label><i class="fa fa-asterisk"></i> Fecha de Nacimiento:</label>
										 <input id="fechanac" name="fechanac" type="date" placeholder="dd/mm/aaaa" input class="form-control">
									</div>
							</div>

						</div>    <!-- /.row -->
                        <button type="submit" class="btn btn-primary" >Modificar</button>
                        <button type="submit" class="btn btn-primary"  href="#buscar" data-toggle="tab" role="tab">Regresar</button>

                        
					</div> <!-- /.container-fluid -->
                </div><!-- end pane-->	
					                    
                </div><!-- end pane-->
            </div><!-- end content-->
        </div><!-- end wrapper-->
    </body>
</html>
