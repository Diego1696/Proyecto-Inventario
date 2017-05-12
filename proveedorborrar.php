<?php
include("Conexion.php");
$idproveedor=$_GET['idproveedor'];
$sql="DELETE FROM proveedores WHERE idproveedor='$idproveedor'";
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
header('Location:'.$_SERVER['HTTP_REFERER']);
?>