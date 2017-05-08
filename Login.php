<?php
session_start();
// recuperar datos del formulario
$dni=$_POST['dni'];
$cla=$_POST['clave'];
include("Conexion.php");
// localizar dni en la tabla usuarios
$sql="SELECT u.* FROM usuarios as u WHERE u.dni='$dni'";
$registros=mysqli_query($conexion,$sql);
$total=mysqli_num_rows($registros);
if($total==0){
	echo "<H2>USUARIO NO EXISTE</H2>Pulse <a href='index.php'>aqui</a> para volver.";
}else{
	while ($linea=mysqli_fetch_array($registros)) {
		if($linea['clave']==$cla){
			$_SESSION['dniusuario']=$linea['dni'];
			$_SESSION['nombreusuario']=$linea['nombre'];
			if($linea['dni']=='111111111'){
				$_SESSION['admin']="admin";
				header("location:home.php");
			}
			if($linea['dni']=='777777777'){
				$_SESSION['encargado']="encargado";
				header("location:encargado.php");
			}
			if($linea['dni']=='888888888'){
				$_SESSION['profesor']="profesor";
				header("location:profesor.php");
			}
			if($linea['dni']=='999999999'){
				$_SESSION['sat']="sat";
				header("location:sat.php");
			}
		}else{
			echo "<H2>ClAVE INCORRECTA</H2>Pulse <a href='index.php'>aqui</a> para continuar.";
		}
	}
}
?>