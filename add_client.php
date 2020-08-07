<?php
$page_title = 'Registry';
  require_once('includes/load.php');//INCLUYE LOAD
    // Checkin What level user has permission to view this page
  page_require_level(3);
  $groups = find_all('user_groups');
  ?>
  <?php include_once('layouts/header.php');//INCLUYE EL INICIO DE PAGINA ?>
  <?php
  include("includes/conexion.php");
  ?>
  <!DOCTYPE html>
  <html lang="es">
  <head>

  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- Bootstrap -->
  	<link href="libs/css/bootstrap-datepicker.css" rel="stylesheet">
  	<style>
  		.content {
  			margin-top: 80px;
  		}
  	</style>
</head>
<body>
	<?php
	if(isset($_POST['add'])){
		    	$dui	 = mysqli_real_escape_string($con,(strip_tags($_POST["dui"],ENT_QUOTES)));//Escanpando caracteres
				$nombres = mysqli_real_escape_string($con,(strip_tags($_POST["nombres"],ENT_QUOTES)));//Escanpando caracteres  
				$telefono		 = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
				$email = mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));
				$direccion = mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));//Escanpando caracteres  
				$estado			 = mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));//Escanpando caracteres
				
				$cek = mysqli_query($con, "SELECT * FROM clientes WHERE dui='$dui'");
				if(mysqli_num_rows($cek) == 0){
					$insert = mysqli_query($con, "INSERT INTO clientes(dui, nombres, telefono, email, direccion, estado)
						VALUES('$dui','$nombres', '$telefono', '$email', '$direccion', '$estado')") or die(mysqli_error());
					if($insert){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Well done! The data has been saved successfully.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. Failed to save data!</div>';
					}

				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. DUI number exits!</div>';
				}
			}
			?>
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>
							<span class="glyphicon glyphicon-cloud-upload"></span>
							<span>Registry</span>
						</strong>
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="post">
								<div class="form-group">
									<label for="name">DUI</label>				
									<input type="text" name="dui" class="form-control" placeholder="DUI" required>
								</div>
								<div class="form-group">
									<label for="name">Name</label>				
									<input type="text" name="nombres" class="form-control" placeholder="Nombre Completo" required>
								</div>
								<div class="form-group">
									<label for="telefono">Telephone</label>
									<input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
								</div>
								<div class="form-group">
									<label for="fecha_nacimiento">Email</label>
									<input type="text" name="email" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" placeholder="Correo Electronico" required>
								</div>
								<div class="form-group">
									<label for="direccion">Address</label>
									<textarea name="direccion" class="form-control" placeholder="Dirección"></textarea>
								</div>			
								<div class="form-group">
										<label for="estado">State</label>
											<select name="estado" class="form-control">
												<option value=""> ----- </option>
												<option value="1">Subscribed</option>
												<option value="2">Unsubscribed</option>
											</select>
									</div>						
								<div class="form-group">
									<label class="col-sm-3 control-label">&nbsp;</label>
									<div class="form-group clearfix">
										<input type="submit" name="add" class="btn btn-success" value="Save">
										<a href="home.php" class="btn btn-danger">Cancel</a>
									</div>
								</div>
							</form>
						</div>
					</div>

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script src="js/bootstrap.min.js"></script>
					<script src="js/bootstrap-datepicker.js"></script>
					<script>
						$('.date').datepicker({
							format: 'dd-mm-yyyy',
						})
					</script>
				</body>
				</html>