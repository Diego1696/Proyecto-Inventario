<?php
include("Conexion.php");
$idubicacion=$_GET['idubicacion'];
$sql="DELETE FROM ubicaciones WHERE idubicacion='$idubicacion'";
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
header('Location:'.$_SERVER['HTTP_REFERER']);
?>