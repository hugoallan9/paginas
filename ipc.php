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
			                    <form role="form" onsubmit="return validateForm()" action="ipc-upload.php" name="formulario" method="post" enctype="multipart/form-data" class="registration-form">

														<div class="form-group">
			                    		<h2 style="color:DarkSalmon">Fecha del reporte:</h2>
															<div class="col-md-7">
																<div class="col-md-9">	<font color="DarkGoldenRod">Seleccione el mes y el año del archivo csv a subir.</font></div>
																	<div class="col-md-7">
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
															</select></div>
														</div>

															<div class="form-group">
																	<div class="col-md-5">
																		<font color="DarkGoldenRod">Año:</font>
																		<input type="text" class="form-control" style="width: 150px;" name="anio" id="anio" size="2" required/><br />
																	</div>
														  </div>
														</div>
														<div class="form-group">
																	<div class="col-md-12">
																		<font color="DarkGoldenRod">Seleccione el archivo xlsx.</font>
																		<input type="file" name="file" required/>
																	</div>
														</div>

														<div class="col-md-12">

																															<div class="text-center">
																																<br />
																																<input type="submit" class="btn btn-primary" value="Generar Reporte">
																															</div>
																														<br /><br />
																													</div>
															<div class="form-group">
																<font color="DarkGoldenRod">&nbsp</font>
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
