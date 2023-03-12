<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Formulario de votos</title>
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Formulario de votos
		</div>

			<div class="form">
				<div class="input_field">
					<label>Nombre y Apellido</label>
					<input type="text" class="input" name="nomapellido" required>
				</div>

				<div class="input_field">
					<label>Alias</label>
					<input type="text" class="input" name="alias" required>
				</div>

				<div class="input_field">
					<label>RUT</label>
					<input type="text" class="input" name="rut" required>
				</div>

				<div class="input_field">
					<label>Email</label>
					<input type="text" class="input" name="email" required>
				</div>

				<div class="input_field">
					<label>Region</label>
					<div class="custom_select">
						<select name="region" required>
							<option value="">Seleccione una region</option>
							<option value="Region de Arica y Parinacota">Región de Arica y Parinacota</option>
							<option value="Region de Antofagasta">Región de Antofagasta</option>
							<option value="Region de Atacama">Región de Atacama</option>
							<option value="Region de Coquimbo">Región de Coquimbo</option>
							<option value="Region de Valparaiso">Región de Valparaíso</option>
							<option value="Region Metropolitana">Región Metropolitana</option>
							<option value="Region de OHiggins">Región de O'Higgins</option>
							<option value="Region de Tarapaca">Región de Tarapacá</option>
					    </select>
					</div>
				</div>

				<div class="input_field">
					<label>Comuna</label>
					<div class="custom_select">
						<select name="comuna" required>
							<option value="">Seleccione una comuna</option>
							<option value="Cerrillos">Cerrillos</option>
							<option value="Puente Alto">Puente Alto</option>
							<option value="Salvador">Salvador</option>
							<option value="Melipilla">Melipilla</option>
							<option value="Macul">Macul</option>
							<option value="La Florida">La Florida</option>
						</select>
					</div>	
				</div>

				<div class="input_field">
					<label>Candidato</label>
					<div class="custom_select">
						<select name="candidato" required>
							<option value="">Seleccione una candidato</option>
							<option value="ibai">Ibai</option>
							<option value="illoJuan">IlloJuan</option>			
							<option value="Xokas">Xokas</option>
							<option value="JH">JH</option>
							<option value="Rubius">Rubius</option>	
						</select>	
					</div>		
				</div>

				<div class="input_field">
					<label style="margin-right: 100px;">Como se enteró de Nosotros</label>
					<input type="checkbox" name="r1[]" value="Web"><label style="margin-left: 5px;">Web</label>
					<input type="checkbox" name="r1[]" value="TV"><label style="margin-left: 5px;">TV</label>
					<input type="checkbox" name="r1[]" value="Redes Sociales"><label style="margin-left: 5px;">Redes Sociales</label>
					<input type="checkbox" name="r1[]" value="Amigo"><label style="margin-left: 5px;">Amigo</label>
				</div>

				
				<div class="input_field">
					<input type="submit" value="Votar" class="btn" name="votar">
				</div>				
			</div>
		</form>
	</div>
</body>

</html>

<?php 
	if($_POST['votar']) 
	{
		$nomapellido = $_POST['nomapellido'];
		$alias		 = $_POST['alias'];
		$rut 		 = $_POST['rut'];
		$email 		 = $_POST['email'];
		$region	     = $_POST['region'];
		$comuna 	 = $_POST['comuna'];
		$candidato 	 = $_POST['candidato'];
		$nosotros    = $_POST['r1'];
		$nosotros1    = implode(",",$nosotros);

		$query = "INSERT INTO formulario (nomapellido,alias,rut,email,region,comuna,candidato,nosotros) VALUES('$nomapellido','$alias','$rut','$email','$region','$comuna','$candidato','$nosotros1')";
		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo "<script> alert('Datos ingresados correctamente') </script>";
		}
		else  
		{
			echo "<script> alert('Error al ingresar los datos') </script>";
		}
	}
?>