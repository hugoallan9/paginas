<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mapas</title>
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
                        			<h3 style="font-size:70px">Generación de Mapas</h3>

                        		</div>

                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="mapas-uploaded.php" name="formulario" method="post" enctype="multipart/form-data" class="registration-form">

														<div class="form-group">
			                    		<h2 style="color:DarkSalmon">Archivos CSV a subir:</h2>

														<div class="form-group">
																	<div class="col-md-12">
																		<font color="DarkGoldenRod">Seleccione los archivos.</font>
																		<input type="file" name="upload[]" multiple="multiple" required/>
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


</body>
</html>
