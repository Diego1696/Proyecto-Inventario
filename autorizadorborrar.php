<?php
include("Conexion.php");
$idautorizador=$_GET['idautorizador'];
$sql="DELETE FROM autorizadores WHERE idautorizador='$idautorizador'";
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
header('Location:'.$_SERVER['HTTP_REFERER']);
?>