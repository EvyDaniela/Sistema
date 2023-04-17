<?php 

include('php/conexion.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE CLIENTES</title>
	<link rel="stylesheet" href="css/Tabla.css">
	
</head>
<body class="full-cover-background" style="background-image:url(assets/img/0-9\(1\)\(1\)\(1\).jpg);">

<br>

<center><table border="2" > 
		<tr>
			<td>Código</td>
			<td>Nombre</td>
			<td>Cédula</td>
			<td>Dirección</td>
		</tr>

		<?php 
		$sql="  Select * FROM tb_cliente ";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Codcliente'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Cedula'] ?></td>
			<td><?php echo $mostrar['Direccion'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
	<p>
<a href="Principal.html">Regresar</a>

</p>
</center> 
</body>
</html>