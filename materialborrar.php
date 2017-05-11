<?php
include("Conexion.php");
$idreferencia=$_GET['idreferencia'];
$sql1="DELETE FROM fichamaterial WHERE idreferencia='$idreferencia'";
$sql2="DELETE FROM ordenadores WHERE idreferencia='$idreferencia'";
$sql3="DELETE FROM monitores WHERE idreferencia='$idreferencia'";
$sql4="DELETE FROM impresoras WHERE idreferencia='$idreferencia'";
mysqli_query($conexion,$sql1) or die("Error en la consulta de insercion $sql");
mysqli_query($conexion,$sql2) or die("Error en la consulta de insercion $sql");
mysqli_query($conexion,$sql3) or die("Error en la consulta de insercion $sql");
mysqli_query($conexion,$sql4) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
header('Location:'.$_SERVER['HTTP_REFERER']);
?>