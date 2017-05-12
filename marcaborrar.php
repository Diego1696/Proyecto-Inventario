<?php
include("Conexion.php");
$idmarca=$_GET['idmarca'];
$sql="DELETE FROM marcas WHERE idmarca='$idmarca'";
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
header('Location:'.$_SERVER['HTTP_REFERER']);
?>