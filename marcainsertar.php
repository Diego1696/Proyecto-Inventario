<?php
// recuperamos datos del formulario
$idmarca=$_POST['idmarca'];
$marca=$_POST['marca'];


// conectamos con la base de datos
include("Conexion.php");
// creamos consulta
$sql="INSERT INTO marcas(idmarca, marca) VALUES('$idmarca','$marca')";
// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header('Location:'.$_SERVER['HTTP_REFERER']);
?>