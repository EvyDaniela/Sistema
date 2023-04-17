<?php
session_start();
include('conexion.php');
$usuario=$_POST['txtUsuario'];
$password=$_POST['txtContrasenia'];
$consulta="CALL MostrarUsuario('$usuario','$password')";
$filas=$conexion->query($consulta);
$row=$filas->fetch_array(MYSQLI_ASSOC);
if(($row['Usuario']==$usuario) && ($row['Password']==$password))
{
	session_start();
	$_SESSION['CODIGO']=$row['CodUsuario'];
	$_SESSION['VALIDA']=1;
	
	header("location:../Principal.html");
}else{
	header("location:../index.php?incorrecto=true");
	
	exit();
}
?>