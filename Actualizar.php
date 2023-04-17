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


$Reg ="call Sp_ActualizarCliente('$Cod','$Nom','$Ced','$Dir')";

$query = mysqli_query($conexion,$Reg);

if($query>=1)
{
	
	$mensaje="Los Datos se Actualizaron Correctamente";
	 echo "<script> alert('$mensaje');</script>";
	 unset($_GET['mensaje']);
}
else
{
	$mensaje="Error No se  los Actualizaronlos Datos";
	 echo "<script> alert('$mensaje');</script>";
	 unset($_GET['mensaje']);
}

?>