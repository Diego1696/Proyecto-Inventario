<?php
include("Conexion.php");
$idincidencia=$_GET['idincidencia'];
$sql="DELETE FROM incidencias WHERE idincidencia='$idincidencia'";
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
header('Location:'.$_SERVER['HTTP_REFERER']);
?>