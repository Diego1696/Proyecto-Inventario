<?php
// recuperamos datos del formulario
$idubicacion=$_POST['idubicacion'];
$ubicacion=$_POST['ubicacion'];


// conectamos con la base de datos
include("Conexion.php");
// creamos consulta
$sql="INSERT INTO ubicaciones(idubicacion, ubicacion) VALUES('$idubicacion','$ubicacion')";
// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header('Location:'.$_SERVER['HTTP_REFERER']);
?>