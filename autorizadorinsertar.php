<?php
// recuperamos datos del formulario
$idautorizador=$_POST['idautorizador'];
$autorizador=$_POST['autorizador'];


// conectamos con la base de datos
include("Conexion.php");
// creamos consulta
$sql="INSERT INTO autorizadores(idautorizador, autorizador) VALUES('$idautorizador','$autorizador')";
// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header('Location:'.$_SERVER['HTTP_REFERER']);
?>