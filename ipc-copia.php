<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>IPC</title>
	<link rel="stylesheet" type="text/css" href="ipc_style.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
				<script language="JavaScript" src="assets/gen_validatorv4.js" type="text/javascript"></script>

				<script language="JavaScript" type="text/javascript">
					function validateForm() {
					    var x = document.forms["formulario"]["fao"].value;
							var y = document.forms["formulario"]["fao2"].value;
					    if (x != y) {
					        alert("Los valores para índice de alimentos de la FAO no concuerdan.");
					        return false;
					    }
							x = document.forms["formulario"]["petroleo"].value;
							y = document.forms["formulario"]["petroleo2"].value;
							if (x != y) {
									alert("Los valores para precio del petróleo no concuerdan.");
									return false;
							}
							x = document.forms["formulario"]["quetzal"].value;
							y = document.forms["formulario"]["quetzal2"].value;
					    if (x != y) {
					        alert("Los valores para el cambio del quetzal no concuerdan.");
					        return false;
					    }
							x = document.forms["formulario"]["interes"].value;
							y = document.forms["formulario"]["interes2"].value;
					    if (x != y) {
					        alert("Los valores para la tasa de interés no concuerdan.");
					        return false;
					    }
							x = document.forms["formulario"]["eeuu"].value;
							y = document.forms["formulario"]["eeuu2"].value;
					    if (x != y) {
					        alert("Los valores para IPC de Estados Unidos no concuerdan.");
					        return false;
					    }
						  x = document.forms["formulario"]["mexico"].value;
						  y = document.forms["formulario"]["mexico2"].value;
						  if (x != y) {
						 		 alert("Los valores para el IPC de México no concuerdan.");
					 			 return false;
						  }
																		 //Meta de inflacion
							x = document.forms["formulario"]["mi_guatemala"].value;
						  y = document.forms["formulario"]["mi_guatemala2"].value;
						  if (x != y) {
						 		 alert("Los valores para la meta de inflación de Guatemala no concuerdan.");
					 			 return false;
						  }
							x = document.forms["formulario"]["i_mi_guatemala"].value;
						  y = document.forms["formulario"]["i_mi_guatemala2"].value;
						  if (x != y) {
						 		 alert("Los valores para la incerteza de la meta de inflación de Guatemala no concuerdan.");
					 			 return false;
						  }
							x = document.forms["formulario"]["mi_honduras"].value;
						  y = document.forms["formulario"]["mi_honduras2"].value;
						  if (x != y) {
						 		 alert("Los valores para la meta de inflación de Honduras no concuerdan.");
					 			 return false;
						  }
							x = document.forms["formulario"]["i_mi_honduras"].value;
						  y = document.forms["formulario"]["i_mi_honduras2"].value;
						  if (x != y) {
						 		 alert("Los valores para la incerteza de la meta de inflación de Honduras no concuerdan.");
					 			 return false;
						  }
							x = document.forms["formulario"]["mi_salvador"].value;
						  y = document.forms["formulario"]["mi_salvador2"].value;
						  if (x != y) {
						 		 alert("Los valores para la meta de inflación de El Salvador no concuerdan.");
					 			 return false;
						  }
							x = document.forms["formulario"]["i_mi_salvador"].value;
						  y = document.forms["formulario"]["i_mi_salvador2"].value;
						  if (x != y) {
						 		 alert("Los valores para la incerteza de la meta de inflación de El Salvador no concuerdan.");
					 			 return false;
						  }
							x = document.forms["formulario"]["mi_nicaragua"].value;
						  y = document.forms["formulario"]["mi_nicaragua2"].value;
						  if (x != y) {
						 		 alert("Los valores para la meta de inflación de Nicaragua no concuerdan.");
					 			 return false;
						  }
							x = document.forms["formulario"]["i_mi_nicaragua"].value;
						  y = document.forms["formulario"]["i_mi_nicaragua2"].value;
						  if (x != y) {
						 		 alert("Los valores para la incerteza de la meta de inflación de Nicaragua no concuerdan.");
					 			 return false;
						  }
							x = document.forms["formulario"]["mi_costa_rica"].value;
						  y = document.forms["formulario"]["mi_costa_rica2"].value;
						  if (x != y) {
						 		 alert("Los valores para la meta de inflación de Costa Rica no concuerdan.");
					 			 return false;
						  }
							x = document.forms["formulario"]["i_mi_costa_rica"].value;
						  y = document.forms["formulario"]["i_mi_costa_rica2"].value;
						  if (x != y) {
						 		 alert("Los valores para la incerteza de la meta de inflación de Costa Rica no concuerdan.");
					 			 return false;
						  }

													//inflacion interanual CA
							x = document.forms["formulario"]["ia_guatemala"].value;
							y = document.forms["formulario"]["ia_guatemala2"].value;
							if (x != y) {
								 alert("Los valores para la inflación interanual de Guatemala no concuerdan.");
								 return false;
							}
							x = document.forms["formulario"]["ia_salvador"].value;
							y = document.forms["formulario"]["ia_salvador2"].value;
							if (x != y) {
								 alert("Los valores para la inflación interanual de El Salvador no concuerdan.");
								 return false;
							}
							x = document.forms["formulario"]["ia_honduras"].value;
							y = document.forms["formulario"]["ia_honduras2"].value;
							if (x != y) {
								 alert("Los valores para la inflación interanual de Honduras no concuerdan.");
								 return false;
							}
							x = document.forms["formulario"]["ia_nicaragua"].value;
							y = document.forms["formulario"]["ia_nicaragua2"].value;
							if (x != y) {
								 alert("Los valores para la inflación interanual de Nicaragua no concuerdan.");
								 return false;
							}
							x = document.forms["formulario"]["ia_costa_rica"].value;
							y = document.forms["formulario"]["ia_costa_rica2"].value;
							if (x != y) {
								 alert("Los valores para la inflación interanual de Costa Rica no concuerdan.");
								 return false;
							}


					}
</script>

</head>
<body>
	<div class="row">

                        <div class="col-sm-9 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3 style="font-size:70px">Reporte IPC</h3>
                            		<p>Llene los siguientes campos para generar su reporte mensual de IPC:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" onsubmit="return validateForm()" action="ipc/upload.php" name="formulario" method="post" enctype="multipart/form-data" class="registration-form">

														<div class="form-group">
			                    		<h2 style="color:DarkSalmon">Fecha del reporte:</h2>
															<div class="col-md-6">
																	<font color="DarkGoldenRod">Seleccione el mes y el año del archivo csv a subir.</font>

															<select name="mes" id="mes" onChange="changeDate(this.options[selectedIndex].value);" required/>
															<option disabled selected> -- Seleccione el mes -- </option>
															<option value="1">Enero</option>
															<option value="2">Febrero</option>
															<option value="3">Marzo</option>
															<option value="4">Abril</option>
															<option value="5">Mayo</option>
															<option value="6">Junio</option>
															<option value="7">Julio</option>
															<option value="8">Augosto</option>
															<option value="9">Septiembre</option>
															<option value="10">Octubre</option>
															<option value="11">Noviembre</option>
															<option value="12">Diciembre</option>
															</select>
														</div>

															<div class="form-group">
																	<div class="col-md-4">
																		<font color="DarkGoldenRod">Año:</font>
																		<input type="text" class="form-control" style="width: 150px;" name="anio" id="anio" size="2" required/><br />
																	</div>
														  </div>
														</div>
														<div class="form-group">
																	<div class="col-md-3">
																		<font color="DarkGoldenRod">Seleccione el archivo csv.</font>
																		<input type="file" name="file" required/>
																	</div>
														</div>

															<div class="clearfix"></div>
															<h2 style="color:DarkSalmon">Variables que condicionan los precios internos:</h2>

															<div class="form-group">
																	<div class="col-md-6">
																		<font color="DarkGoldenRod"> Índice de alimentos de la FAO:</font>
																		<input type="text" class="form-control" style="width: 400px;" name="fao" id="fao" size="10" required/><br />
																	</div>
														  </div>
															<div class="form-group">
																	 <div class="col-md-6">
																		 <font color="DarkGoldenRod"> Índice de alimentos de la FAO nuevamente:</font>
																		 <input type="text" class="form-control" style="width: 400px;" name="fao2" id="fao2" size="10" required/><br />
																	 </div>
															</div>
															<div class="form-group">
																	<div class="col-md-6">
																		<font color="DarkGoldenRod"> Precio del petróleo:</font>
																		<input type="text" class="form-control" style="width: 400px;" name="petroleo" id="petroleo" size="10" required/><br />
																	</div>
														  </div>
															<div class="form-group">
																	 <div class="col-md-6">
																		 <font color="DarkGoldenRod"> Precio del petróleo nuevamente:</font>
																		 <input type="text" class="form-control" style="width: 400px;" name="petroleo2" id="petroleo2" size="10" required/><br />
																	 </div>
															</div>
															<div class="form-group">
																	<div class="col-md-6">
																		<font color="DarkGoldenRod">  Cambio del quetzal:</font>
																		<input type="text" class="form-control" style="width: 400px;" name="quetzal" id="quetzal" size="10" required/><br />
																	</div>
														  </div>
															<div class="form-group">
																	 <div class="col-md-6">
																		 <font color="DarkGoldenRod">  Cambio del quetzal nuevamente:</font>
																		 <input type="text" class="form-control" style="width: 400px;" name="quetzal2" id="quetzal2" size="10" required/><br />
																	 </div>
															</div>
															<div class="form-group">
																	<div class="col-md-6">
																		<font color="DarkGoldenRod"> Tasa de interés:</font>
																		<input type="text" class="form-control" style="width: 400px;" name="interes" id="interes" size="10" required/><br />
																	</div>
														  </div>
															<div class="form-group">
																	 <div class="col-md-6">
																		 <font color="DarkGoldenRod">  Tasa de interés nuevamente:</font>
																		 <input type="text" class="form-control" style="width: 400px;" name="interes2" id="interes2" size="10" required/><br />
																	 </div>
															</div>
															<div class="form-group">
																	<div class="col-md-6">
																		<font color="DarkGoldenRod"> IPC de EEUU:</font>
																		<input type="text" class="form-control" style="width: 400px;" name="eeuu" id="eeuu" size="10" required/><br />
																	</div>
														  </div>
															<div class="form-group">
																	 <div class="col-md-6">
																		 <font color="DarkGoldenRod"> IPC de EEUU nuevamente:</font>
																		 <input type="text" class="form-control" style="width: 400px;" name="eeuu2" id="eeuu2" size="10" required/><br />
																	 </div>
															</div>
															<div class="form-group">
																	<div class="col-md-6">
																		<font color="DarkGoldenRod"> IPC de México:</font>
																		<input type="text" class="form-control" style="width: 400px;" name="mexico" id="mexico" size="10" required/><br />
																	</div>
															</div>
															<div class="form-group">
																	 <div class="col-md-6">
																		 <font color="DarkGoldenRod"> IPC de México nuevamente:</font>
																		 <input type="text" class="form-control" style="width: 400px;" name="mexico2" id="mexico2" size="10" required/><br />
																	 </div>
															</div>


															<div class="col-md-12">
																<br />
																<h3 style="color:DarkSalmon">Inflación en América Central:</h3>
																<div class="col-md-6">
																	<h4 style="color:DarkSalmon">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																	&nbsp&nbsp&nbsp&nbsp Meta de inflación:
																	</h4>
																</div>
																<div class="col-md-6">
																	<h4 style="color:DarkSalmon">&nbsp&nbsp
																	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Incerteza:
																	</h4>
																</div>
															</div>

															<div class="col-md-6">
																<font color="GhostWhite">Guatemala:</font>
																<input type="text" class="form-control" name="meta de inflación de Guatemala" id="mi_guatemala" required/>
															</div>
															<div class="col-md-6">
																 <br /><input type="text" class="form-control" style="width: 95px;" name="incerteza de la meta de inflación de Guatemala" id="i_mi_guatemala" required/><br />
															</div>

															<div class="col-md-6">
																	<font color="GhostWhite">El Salvador:</font>
																<input type="text" class="form-control" name="meta de inflació de El Salvador" id="mi_salvador required" required/><br />
															</div>
															<div class="col-md-6">
																 <br />
																 <input type="text" class="form-control" style="width: 95px;" name="incerteza de la meta de inflación de El Salvador" id="i_mi_salvador" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">Honduras:</font>
																<input type="text" class="form-control" name="meta de inflació de Honduras" id="mi_honduras" required/><br />
															</div>
															<div class="col-md-6">
																 <br />
																 <input type="text" class="form-control" style="width: 95px;" name="incerteza de la meta de inflación de Honduras" id="i_mi_honduras" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	Nicaragua:</font>
																<input type="text" class="form-control" name="meta de inflació de Nicaragua" id="mi_nicaragua" required/><br />
															</div>
															<div class="col-md-6">
																 <br />
																 <input type="text" class="form-control" style="width: 95px;" name="incerteza de la meta de inflación de Nicaragua" id="i_mi_nicaragua" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite"> Costa Rica:</font>
																<input type="text" class="form-control" name="meta de inflació de Costa Rica" id="mi_costa_rica" required/><br />
															</div>
															<div class="col-md-6">
																 <br />
																 <input type="text" class="form-control" style="width: 95px;" name="incerteza de la meta de inflación de Costa Rica" id="i_mi_costa_rica" required/><br />
															</div>

																														<!-- Verificacion de inflacion CA-->
															<div class="col-md-12">
																	<br />
																			<h3 style="color:DarkSalmon">Inflación en América Central nuevamente:</h3>
																				<div class="col-md-6">
																				<h4 style="color:DarkSalmon">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																								&nbsp&nbsp&nbsp&nbsp Meta de inflación:
																								</h4>
																							</div>
																								<div class="col-md-6">
																						<h4 style="color:DarkSalmon">&nbsp&nbsp
																						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Incerteza:
																					</h4>
																					</div>
														</div>

															<div class="col-md-6">
																<font color="GhostWhite">Guatemala:</font>
																<input type="text" class="form-control" name="meta de inflación de Guatemala" id="mi_guatemala2" required/>
															</div>
															<div class="col-md-6">
																 <br /><input type="text" class="form-control" style="width: 95px;" name="incerteza de la meta de inflación de Guatemala" id="i_mi_guatemala2" required/><br />
															</div>

															<div class="col-md-6">
																	<font color="GhostWhite">El Salvador:</font>
																<input type="text" class="form-control" name="meta de inflació de El Salvador" id="mi_salvador2" required/><br />
															</div>
															<div class="col-md-6">
																 <br />
																 <input type="text" class="form-control" style="width: 95px;" name="incerteza de la meta de inflación de El Salvador" id="i_mi_salvador2" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">Honduras:</font>
																<input type="text" class="form-control" name="meta de inflació de Honduras" id="mi_honduras2" required/><br />
															</div>
															<div class="col-md-6">
																 <br />
																 <input type="text" class="form-control" style="width: 95px;" name="incerteza de la meta de inflación de Honduras" id="i_mi_honduras2" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	Nicaragua:</font>
																<input type="text" class="form-control" name="meta de inflació de Nicaragua" id="mi_nicaragua2" required/><br />
															</div>
															<div class="col-md-6">
																 <br />
																 <input type="text" class="form-control" style="width: 95px;" name="incerteza de la meta de inflación de Nicaragua" id="i_mi_nicaragua2" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite"> Costa Rica:</font>
																<input type="text" class="form-control" name="meta de inflació de Costa Rica" id="mi_costa_rica2" required/><br />
															</div>
															<div class="col-md-6">
																 <br />
																 <input type="text" class="form-control" style="width: 95px;" name="incerteza de la meta de inflación de Costa Rica" id="i_mi_costa_rica2" required/><br />
															</div>

																																													<!-- INFLACION INTERANUAL -->
															<div class="col-md-12">
																<h4 style="color:DarkSalmon">Inflación interanual:</h4>
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	Guatemala:</font>
																<input type="text" class="form-control" style="width: 400px;" name="inflación interanual de Guatemala" id="ia_guatemala" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	Guatemala nuevamente:</font>
																<input type="text" class="form-control" style="width: 400px;" name="inflación interanual de Guatemala" id="ia_guatemala2" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	El Salvador:</font>
																<input type="text" class="form-control" style="width: 400px;" name="inflación interanual de El Salvador" id="ia_salvador" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	El Salvador nuevamente:</font>
																<input type="text" class="form-control" style="width: 400px;" name="inflación interanual de El Salvador" id="ia_salvador2" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	Honduras:</font>
																<input type="text" class="form-control" style="width: 400px;" name="inflación interanual de Honduras" id="ia_honduras" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	Honduras nuevamente:</font>
																<input type="text" class="form-control" style="width: 400px;" name="inflación interanual de Honduras" id="ia_honduras2" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	Nicaragua:</font>
																<input type="text" class="form-control" style="width: 400px;" name="inflación interanual de Nicaragua" id="ia_nicaragua" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	Nicaragua nuevamente:</font>
																<input type="text" class="form-control" style="width: 400px;" name="inflación interanual de Nicaragua" id="ia_nicaragua2" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	Costa Rica:</font>
																<input type="text" class="form-control" style="width: 400px;" name="inflación interanual de Costa Rica" id="ia_costa_rica" required/><br />
															</div>
															<div class="col-md-6">
																<font color="GhostWhite">	Costa Rica nuevamente:</font>
																<input type="text" class="form-control" style="width: 400px;" name="inflación interanual de Costa Rica" id="ia_costa_rica2" required/><br />
															</div>

																																							<!--boton-->
															<div class="col-md-12">

																	<div class="text-center">
																		<br />
																		<input type="submit" class="btn btn-primary" value="Generar Reporte">
																	</div>
																<br /><br />
															</div>
															<div class="form-group">
																<font color="DarkGoldenRod">*Todos los campos son obligatorios.</font>
															</div><td>
			                    </form>
		                    </div>
                        </div>
                    </div>


	<!-- Javascript -->
	        <script src="assets/js/jquery-1.11.1.min.js"></script>
	        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	        <script src="assets/js/jquery.backstretch.min.js"></script>
	        <script src="assets/js/retina-1.1.0.min.js"></script>
	        <script src="assets/js/scripts.js"></script>

					<script language="JavaScript" type="text/javascript">
					/*var frmvalidator  = new Validator("formulario");

					frmvalidator.EnableMsgsTogether();

					frmvalidator.addValidation("fao","numeric", "El índice de precios de la FAO debe ser un número.");

					/*function validateForm() {
						alert("KJKJ");
					    var x = document.forms["myForm"]["fname"].value;
					    if (x == null || x == "") {
					        alert("Name must be filled out");
					        return false;
					    }*/
				//	}

					</script>


	<script language="JavaScript" type="text/javascript">
		y = 2016;
		while (y-->1990){
		var s = document.createElement('option');
		var e = document.getElementById('anio');
		s.text=y;
		s.value=y;
		try{
		e.add(s,null);}
		catch(ex){
		e.add(s);}}
	</script>
</body>
</html>
