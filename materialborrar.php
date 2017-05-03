<?php
include("Conexion.php");
$idreferencia=$_GET['idreferencia'];
$sql="DELETE FROM fichamaterial WHERE idreferencia='$idreferencia'";
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
header('Location:'.$_SERVER['HTTP_REFERER']);
?>