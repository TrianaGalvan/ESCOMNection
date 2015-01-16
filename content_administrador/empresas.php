<?php
	define("TITLE","Empresas");
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
                        ¿Seguro que desea cerrar la cuenta de la Empresa?
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
                                        Agregar Empresa
                                    </h1>
                                    <ol class="breadcrumb">
                                        <li>
                                            <i class="fa fa-edit"></i>  Introduzca los datos de la empresa para dar de alta su perfil.
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
                                            <label><i class="fa fa-asterisk"></i> Giro de la empresa</label>
                                            <input class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Calle</label>
                                            <input class="form-control">
                                        </div>  

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Número exterior</label>
                                            <input class="form-control">
                                        </div>       

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Número interior</label>
                                            <input class="form-control">
                                        </div>  

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Colonia</label>
                                            <input class="form-control">
                                        </div>  

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Código Postal</label>
                                            <input class="form-control">
                                        </div>                            

                                        <div class="form-group">
                                            <label for="sexo"><i class="fa fa-asterisk"></i> Estado</label>
                                            <select id="Select" class="form-control">
                                                <option>Aguascalientes</option>
                                                <option>Baja California</option>
                                                <option>Baja California Sur</option>
                                                <option>Campeche</option>
                                                <option>Coahuila de Zaragoza</option>
                                                <option>Colima</option>
                                                <option>Chiapas</option>
                                                <option>Chihuahua</option>
                                                <option>Distrito Federal</option>
                                                <option>Durango</option>
                                                <option>Guanajuato</option>
                                                <option>Guerrero</option>
                                                <option>Hidalgo</option>
                                                <option>Jalisco</option>
                                                <option>México</option>
                                                <option>Michoacán de Ocampo</option>
                                                <option>Morelos</option>
                                                <option>Nayarit</option>
                                                <option>Nuevo León</option>
                                                <option>Oaxaca</option>
                                                <option>Puebla</option>
                                                <option>Querétaro</option>
                                                <option>Quintana Roo</option>
                                                <option>San Luis Potosí</option>
                                                <option>Sinaloa</option>
                                                <option>Sonora</option>
                                                <option>Tabasco</option>
                                                <option>Tamaulipas</option>
                                                <option>Tlaxcala</option>
                                                <option>Veracruz de Ignacio de la Llave</option>
                                                <option>Yucatán</option>
                                                <option>Zacatecas</option>
                                            </select>
                                        </div>                                                                                                            
                                        <div class="form-group">
                                            <label for="sexo"><i class="fa fa-asterisk"></i> Delegación/Municipio</label>
                                            <select id="Select" class="form-control">
                                                <option>Álvaro Obregón</option>
                                                <option>Azcapotzalco</option>
                                                <option>Benito Juárez</option>
                                                <option>Coyoacán</option>
                                                <option>Cuajimalpa de Morelos</option>
                                                <option>Cuauhtémoc</option>
                                                <option>Gustavo A. Madero</option>
                                                <option>Iztacalco</option>
                                                <option>Iztapalapa</option>
                                                <option>La Magdalena Contreras</option>
                                                <option>Miguel Hidalgo</option>
                                                <option>Milpa Alta</option>
                                                <option>Tláhuac</option>
                                                <option>Tlalpan</option>
                                                <option>Venustiano Carranza</option>
                                                <option>Xochimilco</option>                                   
                                            </select>
                                        </div>                                                                                                     
                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Teléfono</label>
                                            <input class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Correo electrónico</label>
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
                                            <label><i class="fa fa-asterisk"></i> Usuario</label>
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
                                    <h1>Baja Empresa</h1>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form">
                                            <div class="form-group">
                                                    <label><i class="fa fa-asterisk"></i>Empresa</label>
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
                                <h3 class="panel-title">Dell México</h3>
                            </div>
                            <div class="panel-body">
								<img src="  /img/listadoEmpresas/dell.jpg" alt="Image" />
                                dell
								&nbsp;&nbsp;&nbsp;&nbsp;
								 <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Terra México</h3>
                            </div>
                            <div class="panel-body">
								<img src="/img/listadoEmpresas/2.jpg" alt="Image" />
                                terra
								&nbsp;&nbsp;&nbsp;&nbsp;
								 <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Microsoft México</h3>
                            </div>
                            <div class="panel-body">
								<img src="/img/listadoEmpresas/3.jpg" alt="Image" />
                                microsoft
								&nbsp;&nbsp;&nbsp;&nbsp;
								 <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Plantronics</h3>
                            </div>
                            <div class="panel-body">
								<img src="/img/listadoEmpresas/4.jpg" alt="Image" />
                                plantronics
								&nbsp;&nbsp;&nbsp;&nbsp;
								 <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Cisco</h3>
                            </div>
                            <div class="panel-body">
								<img src="/img/listadoEmpresas/5.jpg" alt="Image" />
                                cisco
								&nbsp;&nbsp;&nbsp;&nbsp;
								 <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mensajeCerrarCuenta">Cerrar cuenta</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Revista Tech MX</h3>
                            </div>
                            <div class="panel-body">
								<img src="/img/listadoEmpresas/6.jpg" alt="Image" />
                                techMX
								&nbsp;&nbsp;&nbsp;&nbsp;
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
                                            <i class="fa fa-edit"></i>  Introduzca los datos de la empresa para cambiar su contraseña.
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
                                            <label><i class="fa fa-asterisk"></i> Número de seguridad</label>
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
                               <h1>Buscar Empresa</h1>
                                </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form">
                                                    <div class="form-group">
                                                            <label><i class="fa fa-asterisk"></i>Empresa</label>
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
                                <h3 class="panel-title">Dell México</h3>
                            </div>
                            <div class="panel-body">
                                <img src="  /img/listadoEmpresas/dell.jpg" alt="Image" />
                                dell
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>

								&nbsp;&nbsp;
								<button type="button" class="btn btn-xs btn-danger">Cerrar cuenta</button>								
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Terra México</h3>
                            </div>
                            <div class="panel-body">
                                <img src="  /img/listadoEmpresas/2.jpg" alt="Image" />
                                terra
								&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>
								&nbsp;&nbsp;
								<button type="button" class="btn btn-xs btn-danger">Cerrar cuenta</button>									
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Microsoft México</h3>
                            </div>
                            <div class="panel-body">
                                <img src="  /img/listadoEmpresas/3.jpg" alt="Image" />
                                microsoft
								&nbsp;&nbsp;&nbsp;
                                <a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>
								&nbsp;
								<button type="button" class="btn btn-xs btn-danger">Cerrar cuenta</button>									
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Plantronics</h3>
                            </div>
                            <div class="panel-body">
                                <img src="  /img/listadoEmpresas/4.jpg" alt="Image" />
                                plantronics
								&nbsp;
                                <a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>
								&nbsp;
								<button type="button" class="btn btn-xs btn-danger">Cerrar cuenta</button>								
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Cisco</h3>
                            </div>
                            <div class="panel-body">
                                <img src="  /img/listadoEmpresas/5.jpg" alt="Image" />
                                cisco
								&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>
								&nbsp;&nbsp;
								<button type="button" class="btn btn-xs btn-danger">Cerrar cuenta</button>									
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Revista Tech MX</h3>
                            </div>
                            <div class="panel-body">
                                <img src="  /img/listadoEmpresas/6.jpg" alt="Image" />
                                techMX
								&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#modificar" data-toggle="tab" role="tab"><button type="button" class="btn btn-xs btn-warning">Modificar</button></a>
								&nbsp;&nbsp;
								<button type="button" class="btn btn-xs btn-danger">Cerrar cuenta</button>									
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->	
                                </div><!-- end row-->
                        <!-- /.container-fluid -->
                    </div><!-- end pane-->
					
                    <div class="tab-pane fade" id="modificar">
                        <div class="container-fluid">
                            <!-- Page Heading -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                        Modificar datos de la Empresa
                                    </h1>
                                    <ol class="breadcrumb">
                                        <li>
                                            <i class="fa fa-edit"></i>  Introduzca los datos de la empresa que desea modificar.
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
                                            <label><i class="fa fa-asterisk"></i> Usuario</label>
                                            <input class="form-control" id="usuarioProf" name="usuarioProf">
                                        </div>
										
                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Nombre</label>
                                            <input class="form-control" id="nombreEmpresa" name="nombreEmpresa">
                                        </div>

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Giro de la empresa</label>
                                            <input class="form-control" id="giro" name="giro">
                                        </div>

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Calle</label>
                                            <input class="form-control" id="calle" name="calle">
                                        </div>  

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Número exterior</label>
                                            <input class="form-control" id="numExt" name="numExt">
                                        </div>       

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Número interior</label>
                                            <input class="form-control" id="numInt" name="numInt">
                                        </div>  

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Colonia</label>
                                            <input class="form-control" id="colonia" name="colonia">
                                        </div>  

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Código Postal</label>
                                            <input class="form-control" id="CP" id="CP">
                                        </div>                            

                                        <div class="form-group">
                                            <label for="Edo"><i class="fa fa-asterisk"></i> Estado</label>
                                            <select id="Select" class="form-control" id="estado" name="estado">
                                                <option>Aguascalientes</option>
                                                <option>Baja California</option>
                                                <option>Baja California Sur</option>
                                                <option>Campeche</option>
                                                <option>Coahuila de Zaragoza</option>
                                                <option>Colima</option>
                                                <option>Chiapas</option>
                                                <option>Chihuahua</option>
                                                <option>Distrito Federal</option>
                                                <option>Durango</option>
                                                <option>Guanajuato</option>
                                                <option>Guerrero</option>
                                                <option>Hidalgo</option>
                                                <option>Jalisco</option>
                                                <option>México</option>
                                                <option>Michoacán de Ocampo</option>
                                                <option>Morelos</option>
                                                <option>Nayarit</option>
                                                <option>Nuevo León</option>
                                                <option>Oaxaca</option>
                                                <option>Puebla</option>
                                                <option>Querétaro</option>
                                                <option>Quintana Roo</option>
                                                <option>San Luis Potosí</option>
                                                <option>Sinaloa</option>
                                                <option>Sonora</option>
                                                <option>Tabasco</option>
                                                <option>Tamaulipas</option>
                                                <option>Tlaxcala</option>
                                                <option>Veracruz de Ignacio de la Llave</option>
                                                <option>Yucatán</option>
                                                <option>Zacatecas</option>
                                            </select>
                                        </div>                                                                                                            
                                        <div class="form-group">
                                            <label for="del"><i class="fa fa-asterisk"></i> Delegación/Municipio</label>
                                            <select id="Select" class="form-control" id="deleg" name="deleg">
                                                <option>Álvaro Obregón</option>
                                                <option>Azcapotzalco</option>
                                                <option>Benito Juárez</option>
                                                <option>Coyoacán</option>
                                                <option>Cuajimalpa de Morelos</option>
                                                <option>Cuauhtémoc</option>
                                                <option>Gustavo A. Madero</option>
                                                <option>Iztacalco</option>
                                                <option>Iztapalapa</option>
                                                <option>La Magdalena Contreras</option>
                                                <option>Miguel Hidalgo</option>
                                                <option>Milpa Alta</option>
                                                <option>Tláhuac</option>
                                                <option>Tlalpan</option>
                                                <option>Venustiano Carranza</option>
                                                <option>Xochimilco</option>                                   
                                            </select>
                                        </div>                                                                                                     
                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Teléfono</label>
                                            <input class="form-control" id="telefono" name="telefono">
                                        </div>

                                        <div class="form-group">
                                            <label><i class="fa fa-asterisk"></i> Correo electrónico</label>
                                            <input class="form-control" id="correo" name="correo">
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
