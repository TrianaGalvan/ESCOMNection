<?php
	define("TITLE","Profesores");
    include("../includes/basic_administrador.php");
?>

		 <!-- Mensajes -->
        <div class="modal fade" id="mensajeCerrarCuenta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Mensajes de Alerta.</h4>
                    </div>
                    <div class="modal-body">
                        ¿Seguro que desea cerrar la cuenta del Profesor?
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
                                        Agregar Profesor
                                    </h1>
                                    <ol class="breadcrumb">
                                        <li>
                                            <i class="fa fa-edit"></i>  Introduzca los datos de el profesor para dar de alta su perfil.
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

                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                        <button type="reset" class="btn btn-primary">Limpiar</button>

                                    </form>

                                </div>
                                <div class="col-lg-6">
                                    <h1>Datos de acceso</h1>

                                    <form role="form">
                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Número de empleado</label>
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
                                    <h1>Baja Profesor</h1>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form">
                                            <div class="form-group">
                                                    <label><i class="fa fa-asterisk"></i> Número de empleado</label>
                                                    <input class="form-control">
                                            </div>		
                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                            <button type="reset" class="btn btn-primary">Limpiar</button>
                                        </form>	
                                    </div>	
                                </div>	
                                
                                <div class="page-header">
                                    
                                </div>
                                
			                    <div class="col-sm-4">
			                        <div class="panel panel-primary">
			                            <div class="panel-heading">
			                                <h3 class="panel-title">Idalia Maldonado Castillo</h3>
			                            </div>
			                            <div class="panel-body">
											<img src="../	img/icono_perfil.gif" alt="Image" />
			                                XXX-XXX
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
			                                <h3 class="panel-title">Consuelo Varinia García Mendoza</h3>
			                            </div>
			                            <div class="panel-body">
											<img src="../	img/icono_perfil.gif" alt="Image" />
			                                XXX-XXX
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
			                                <h3 class="panel-title">Gelacio Castillo Cabrera</h3>
			                            </div>
			                            <div class="panel-body">
											<img src="../	img/icono_perfil.gif" alt="Image" />
			                                XXX-XXX
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
			                                <h3 class="panel-title">Guillermo Márquez ArreguÍn</h3>
			                            </div>
			                            <div class="panel-body">
											<img src="../	img/icono_perfil.gif" alt="Image" />
			                                XXX-XXX
											&nbsp;&nbsp;&nbsp;&nbsp;
											
											&nbsp;&nbsp;
											<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="col-sm-4">
			                        <div class="panel panel-primary">
			                            <div class="panel-heading">
			                                <h3 class="panel-title">Iván Díaz Toala</h3>
			                            </div>
			                            <div class="panel-body">
											<img src="../	img/icono_perfil.gif" alt="Image" />
			                                XXX-XXX
											&nbsp;&nbsp;&nbsp;&nbsp;
											
											&nbsp;&nbsp;
											<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>									
			                            </div>
			                        </div>
			                    </div>
                       		</div>
                        <!-- /.container-fluid -->
                    </div><!-- end pane-->
                    
                    <div class="tab-pane fade" id="reestablecer">
                        <div class="container-fluid">
                            <!-- Page Heading -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                        Restablecer contraseña
                                    </h1>
                                    <ol class="breadcrumb">
                                        <li>
                                            <i class="fa fa-edit"></i>  Introduzca los datos de el profesor para cambiar su contraseña.
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
                                            <label><i class="fa fa-asterisk"></i> Número de empleado</label>
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
                    
                    <div class="tab-pane fade" id="buscar">
                       <div class="page-header">
                               <h1>Buscar Profesor</h1>
                                </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form">
                                                    <div class="form-group">
                                                            <label><i class="fa fa-asterisk"></i> Número de empleado</label>
                                                            <input class="form-control">
                                                    </div>		
                                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                                    <button type="reset" class="btn btn-primary">Limpiar</button>
                                            </form>	
                                        </div>	
                                    </div>				
                                <div class="row">

                                <div class="page-header">
                                </div>
                                
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Idalia Maldonado Castillo</h3>
                            </div>
                            <div class="panel-body">
								<img src="../	img/icono_perfil.gif" alt="Image" />
                                XXX-XXX
								
								<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>
								
								<button type="button" class="btn btn-xs btn-danger">Cerrar cuenta</button>								
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Consuelo Varinia García Mendoza</h3>
                            </div>
                            <div class="panel-body">
								<img src="../	img/icono_perfil.gif" alt="Image" />
                                XXX-XXX
								
								<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>
								
								<button type="button" class="btn btn-xs btn-danger">Cerrar cuenta</button>									
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Gelacio Castillo Cabrera</h3>
                            </div>
                            <div class="panel-body">
								<img src="../	img/icono_perfil.gif" alt="Image" />
                                XXX-XXX
								
								<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>
								
								<button type="button" class="btn btn-xs btn-danger">Cerrar cuenta</button>									
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Guillermo Márquez ArreguÍn</h3>
                            </div>
                            <div class="panel-body">
								<img src="../	img/icono_perfil.gif" alt="Image" />
                                XXX-XXX
								
								<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>
								
								<button type="button" class="btn btn-xs btn-danger">Cerrar cuenta</button>								
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Iván Díaz Toala</h3>
                            </div>
                            <div class="panel-body">
								<img src="../	img/icono_perfil.gif" alt="Image" />
                                XXX-XXX
								
								<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>
								
								<button type="button" class="btn btn-xs btn-danger">Cerrar cuenta</button>									
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->	
							</div>
					</div>
					<!-- /.container-fluid -->
						
                    <div class="tab-pane fade" id="modificar">
                        <div class="container-fluid">
						
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Modificar datos del Profesor
                                </h1>
                                <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-edit"></i>  Introduzca los datos del profesor que desea modificar.
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-asterisk"></i> Campos Obligatorios
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- /.Heading -->						
                
                            <!-- Page Heading -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">

										<div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Número de empleado</label>
                                            <input class="form-control" id="numEmpleado" name="numEmpleado">
                                        </div>
										
                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Nombre</label>
                                            <input class="form-control" id="nombreProfe" name="nombreProfe">
                                        </div>

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Apellido Paterno</label>
                                            <input class="form-control" id="apellidoP" name="apellidoP">
                                        </div>

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Apellido Materno</label>
                                            <input class="form-control" id="apellidoM" name="apellidoM">
                                        </div>  
                                    </form>

                                </div>
                            </div>
							<button type="submit" class="btn btn-primary" >Modificar</button>
							<button type="submit" class="btn btn-primary"  href="#buscar" data-toggle="tab" role="tab">Regresar</button>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
					</div><!-- end pane-->		
                </div><!-- end content-->
            </div><!-- end container-->
        </div><!-- end wrapper-->
    </body>
</html>
