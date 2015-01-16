<?php 
    define("TITLE","Editar datos escolares");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_profesor.php");
?>

		<link href="../../../css/content/jsvalidate-forms.css" rel="stylesheet">
		<link href="../../../css/content/forms.css" rel="stylesheet">

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Datos escolares
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
                            <h4>Datos personales</h4>
                            <div class="form-group">
                                <label> Apellido paterno:</label>
                                <input id="apellidop" name="apellidop" class="form-control jsrequired">
                            </div>
                            
                            <div class="form-group">   
                                  <label> Apellido materno:</label>
                                  <input id="apellidom" name="apellidom" class="form-control jsrequired">
                            </div>
                            
                            <div class="form-group">    
                                  <label> CURP:</label>
                                  <input id="curp" name="curp" class="form-control jsrequired"> 
                            </div>
                            
                            
                            <div class="form-group">
                                <label> Sexo:</label>
                                <label>
                                      <input type="radio" name="sexo" value="femenino" id="masculino">
                                      Masculino
                                </label>
                                <label>&nbsp;
                                      <input type="radio" name="sexo" value="femenino" id="femenino">
                                 Femenino</label>
                             </div>     
                            
                             <div class="form-group">
                                <label> Estado civil:</label>
                                <select name="estadocivil" id="estadocivil" class="form-control">
                                    <option value="S" selected>Soltero(a)</option>
                                    <option value="C">Casado(a)</option>
                                    <option value="D">Divorciado(a)</option>
                                    <option value="V">Viudo(a)</option>
                                </select>
                              </div>
      
      
                            <div class="form-group">
                                <label> Fecha de nacimiento: </label>
                                <input id="fechanacimiento" name="fechanacimiento" class="form-control" type="date" placeholder="dd/mm/aaaa">
                            </div>
      
      
                            <div class="form-group">
                                <label> País de nacimiento: </label>
                                <select name="paisnacimiento" id="paisnacimiento" class="form-control">
                                    <option value="AF">Afganistán</option>
                                    <option value="AL">Albania</option>
                                    <option value="DE">Alemania</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antártida</option>
                                    <option value="AG">Antigua y Barbuda</option>
                                    <option value="AN">Antillas Holandesas</option>
                                    <option value="SA">Arabia Saudí</option>
                                    <option value="DZ">Argelia</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaiyán</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrein</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BE">Bélgica</option>
                                    <option value="BZ">Belice</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermudas</option>
                                    <option value="BY">Bielorrusia</option>
                                    <option value="MM">Birmania</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia y Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BR">Brasil</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="BT">Bután</option>
                                    <option value="CV">Cabo Verde</option>
                                    <option value="KH">Camboya</option>
                                    <option value="CM">Camerún</option>
                                    <option value="CA">Canadá</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CY">Chipre</option>
                                    <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comores</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, República Democrática del</option>
                                    <option value="KR">Corea</option>
                                    <option value="KP">Corea del Norte</option>
                                    <option value="CI">Costa de Marfíl</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croacia (Hrvatska)</option>
                                    <option value="CU">Cuba</option>
                                    <option value="DK">Dinamarca</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egipto</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="AE">Emiratos Árabes Unidos</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="SI">Eslovenia</option>
                                    <option value="ES">España</option>
                                    <option value="US">Estados Unidos</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Etiopía</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="PH">Filipinas</option>
                                    <option value="FI">Finlandia</option>
                                    <option value="FR">Francia</option>
                                    <option value="GA">Gabón</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GD">Granada</option>
                                    <option value="GR">Grecia</option>
                                    <option value="GL">Groenlandia</option>
                                    <option value="GP">Guadalupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GY">Guayana</option>
                                    <option value="GF">Guayana Francesa</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GQ">Guinea Ecuatorial</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="HT">Haití</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HU">Hungría</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IQ">Irak</option>
                                    <option value="IR">Irán</option>
                                    <option value="IE">Irlanda</option>
                                    <option value="BV">Isla Bouvet</option>
                                    <option value="CX">Isla de Christmas</option>
                                    <option value="IS">Islandia</option>
                                    <option value="KY">Islas Caimán</option>
                                    <option value="CK">Islas Cook</option>
                                    <option value="CC">Islas de Cocos o Keeling</option>
                                    <option value="FO">Islas Faroe</option>
                                    <option value="HM">Islas Heard y McDonald</option>
                                    <option value="FK">Islas Malvinas</option>
                                    <option value="MP">Islas Marianas del Norte</option>
                                    <option value="MH">Islas Marshall</option>
                                    <option value="UM">Islas menores de Estados Unidos</option>
                                    <option value="PW">Islas Palau</option>
                                    <option value="SB">Islas Salomón</option>
                                    <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                    <option value="TK">Islas Tokelau</option>
                                    <option value="TC">Islas Turks y Caicos</option>
                                    <option value="VI">Islas Vírgenes (EEUU)</option>
                                    <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                    <option value="WF">Islas Wallis y Futuna</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italia</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japón</option>
                                    <option value="JO">Jordania</option>
                                    <option value="KZ">Kazajistán</option>
                                    <option value="KE">Kenia</option>
                                    <option value="KG">Kirguizistán</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="LA">Laos</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LV">Letonia</option>
                                    <option value="LB">Líbano</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libia</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lituania</option>
                                    <option value="LU">Luxemburgo</option>
                                    <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MY">Malasia</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MV">Maldivas</option>
                                    <option value="ML">Malí</option>
                                    <option value="MT">Malta</option>
                                    <option value="MA">Marruecos</option>
                                    <option value="MQ">Martinica</option>
                                    <option value="MU">Mauricio</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX" selected>México</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldavia</option>
                                    <option value="MC">Mónaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Níger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk</option>
                                    <option value="NO">Noruega</option>
                                    <option value="NC">Nueva Caledonia</option>
                                    <option value="NZ">Nueva Zelanda</option>
                                    <option value="OM">Omán</option>
                                    <option value="NL">Países Bajos</option>
                                    <option value="PA">Panamá</option>
                                    <option value="PG">Papúa Nueva Guinea</option>
                                    <option value="PK">Paquistán</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Perú</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PF">Polinesia Francesa</option>
                                    <option value="PL">Polonia</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="UK">Reino Unido</option>
                                    <option value="CF">República Centroafricana</option>
                                    <option value="CZ">República Checa</option>
                                    <option value="ZA">República de Sudáfrica</option>
                                    <option value="DO">República Dominicana</option>
                                    <option value="SK">República Eslovaca</option>
                                    <option value="RE">Reunión</option>
                                    <option value="RW">Ruanda</option>
                                    <option value="RO">Rumania</option>
                                    <option value="RU">Rusia</option>
                                    <option value="EH">Sahara Occidental</option>
                                    <option value="KN">Saint Kitts y Nevis</option>
                                    <option value="WS">Samoa</option>
                                    <option value="AS">Samoa Americana</option>
                                    <option value="SM">San Marino</option>
                                    <option value="VC">San Vicente y Granadinas</option>
                                    <option value="SH">Santa Helena</option>
                                    <option value="LC">Santa Lucía</option>
                                    <option value="ST">Santo Tomé y Príncipe</option>
                                    <option value="SN">Senegal</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leona</option>
                                    <option value="SG">Singapur</option>
                                    <option value="SY">Siria</option>
                                    <option value="SO">Somalia</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="PM">St Pierre y Miquelon</option>
                                    <option value="SZ">Suazilandia</option>
                                    <option value="SD">Sudán</option>
                                    <option value="SE">Suecia</option>
                                    <option value="CH">Suiza</option>
                                    <option value="SR">Surinam</option>
                                    <option value="TH">Tailandia</option>
                                    <option value="TW">Taiwán</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TJ">Tayikistán</option>
                                    <option value="TF">Territorios franceses del Sur</option>
                                    <option value="TP">Timor Oriental</option>
                                    <option value="TG">Togo</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad y Tobago</option>
                                    <option value="TN">Túnez</option>
                                    <option value="TM">Turkmenistán</option>
                                    <option value="TR">Turquía</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UA">Ucrania</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistán</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="YE">Yemen</option>
                                    <option value="YU">Yugoslavia</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabue</option>
                              </select>
                            </div>
 
  
  
                            <div class="form-group">
                                <label> Entidad de nacimiento: </label>
                                <select name="entidad" id="entidad" class="form-control">
                                    <option value="AS">Aguascalientes</option>
                                    <option value="BC">Baja California</option>
                                    <option value="BS">Baja California Sur</option>
                                    <option value="CC">Campeche</option>
                                    <option value="CS">Chiapas</option>
                                    <option value="CH">Chihuahua</option>
                                    <option value="CL">Coahuila</option>
                                    <option value="CM">Colima</option>
                                    <option value="DF" selected>Distrito Federal</option>
                                    <option value="DG">Durango</option>
                                    <option value="GT">Guanajuato</option>
                                    <option value="GR">Gerrero</option>
                                    <option value="HG">Hidalgo</option>
                                    <option value="JC">Jalisco</option>
                                    <option value="MC">México</option>
                                    <option value="MN">Michoacán</option>
                                    <option value="MS">Morelos</option>
                                    <option value="NT">Nayarit</option>
                                    <option value="NL">Nuevo León</option>
                                    <option value="OC">Oaxaca</option>
                                    <option value="PL">Puebla</option>
                                    <option value="QT">Querétaro</option>
                                    <option value="SP">San Luis Potosí</option>
                                    <option value="SL">Sinaloa</option>
                                    <option value="SR">Sonora</option>
                                    <option value="TC">Tabasco</option>
                                    <option value="TS">Tamaulipas</option>
                                    <option value="TL">Tlaxcala</option>
                                    <option value="VZ">Veracruz</option>
                                    <option value="YN">Yucatán</option>
                                    <option value="ZS">Zacatecas</option>
                                    <option value="OT">Otro</option>
                              </select>
                            </div>
  
                            <div class="form-group">
                                <label>Teléfono: </label><p></p>
                                <input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('Telefono');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('Telefono');" />
                                <table id="Telefono" name="Telefono">
                                    <tr>
                                    </tr>
                                </table>
                            </div>
                      
                      
                            <div class="form-group">
                                <label>Móvil: </label><p></p>
                                <input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('Movil');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('Movil');" />
                                <table id="Movil" name="Movil">
                                    <tr>
                                    </tr>
                                </table>
                            </div>
                      
                      
                            <div class="form-group">
                                <label>Correo eléctronico: </label><p></p>
                                <input type="button" class="btn btn-default" value="Añadir campo" onclick="return addRow('Correo');" /> 
                                <input type="button" class="btn btn-default" value="Eliminar campo" onclick="return deleteRow('Correo');" />
                                <table id="Correo" name="Correo">
                                    <tr>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="form-group">
                                <label> Sección privada: </label>
                                <input name="privado" id="privado" type="checkbox">
                            </div>
                      </div><!-- end col-->
                      
                       <div class="col-lg-6">
                         <h4>Dirección</h4>   
                         <div class="form-group">
                            <label> Calle:</label>
                            <input id="calle" name="calle" class="form-control">
                         </div>
                               
                         <div class="form-group">
                            <label> Número exterior:</label>
                            <input id="numext" name="numext" class="form-control">
                         </div>
                            
                         <div class="form-group">
                            <label> Número interior:</label>
                            <input id="numint" name="numint" class="form-control">
                         </div>
                               
                         <div class="form-group">
                            <label> Colonia:</label>
                            <input id="colonia" name="colonia" class="form-control">
                         </div>
                            
                         <div class="form-group">
                            <label> Código postal:</label>
                            <input id="codigo" name="codigo" class="form-control">
                         </div>
                               
                         <div class="form-group">
                            <label> Estado: </label>
                            <select name="estado" id="estado" class="form-control">
                                <option value="AS">Aguascalientes</option>
                                <option value="BC">Baja California</option>
                                <option value="BS">Baja California Sur</option>
                                <option value="CC">Campeche</option>
                                <option value="CS">Chiapas</option>
                                <option value="CH">Chihuahua</option>
                                <option value="CL">Coahuila</option>
                                <option value="CM">Colima</option>
                                <option value="DF" selected>Distrito Federal</option>
                                <option value="DG">Durango</option>
                                <option value="GT">Guanajuato</option>
                                <option value="GR">Gerrero</option>
                                <option value="HG">Hidalgo</option>
                                <option value="JC">Jalisco</option>
                                <option value="MC">México</option>
                                <option value="MN">Michoacán</option>
                                <option value="MS">Morelos</option>
                                <option value="NT">Nayarit</option>
                                <option value="NL">Nuevo León</option>
                                <option value="OC">Oaxaca</option>
                                <option value="PL">Puebla</option>
                                <option value="QT">Querétaro</option>
                                <option value="SP">San Luis Potosí</option>
                                <option value="SL">Sinaloa</option>
                                <option value="SR">Sonora</option>
                                <option value="TC">Tabasco</option>
                                <option value="TS">Tamaulipas</option>
                                <option value="TL">Tlaxcala</option>
                                <option value="VZ">Veracruz</option>
                                <option value="YN">Yucatán</option>
                                <option value="ZS">Zacatecas</option>
                                <option value="OT">Otro</option>
                              </select>
                            </div>
                            
                            <div class="form-group">
                                <label> Delegación/Municipio:</label>
                                <input id="delegacion" name="delegacion" class="form-control">
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
