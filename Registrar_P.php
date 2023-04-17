
<?php
$Servidor='localhost';
$Usuario='root';
$Password='';
$Bd='bd_sistemamecanica';

$conexion = mysqli_connect($Servidor,$Usuario,$Password,$Bd)
or die ("Error de conexion");

$Cod= $_POST["Codigo"];
$Nom =$_POST["Nombre"];
$Ced =$_POST["Cedula"];
$Dir =$_POST["Direccion"];


$Reg ="call Sp_RegistrarCliente('$Cod','$Nom','$Ced','$Dir')";

$query = mysqli_query($conexion,$Reg);

if($query>=1)
{
	
	$mensaje="Los Datos Ingresaron Correctamente";
	 echo "<script> alert('$mensaje');</script>";
	 unset($_GET['mensaje']);
}
else
{
	$mensaje="Error No se Ingreso los datos";
	 echo "<script> alert('$mensaje');</script>";
	 unset($_GET['mensaje']);
}

?>