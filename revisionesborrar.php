<?php
include("Conexion.php");
$idrevision=$_GET['idrevision'];
$sql="DELETE FROM revisiones WHERE idrevision='$idrevision'";
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
header('Location:'.$_SERVER['HTTP_REFERER']);
?>