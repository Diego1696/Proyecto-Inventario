<?php
// recuperamos datos del formulario
$idincidencia=$_POST['idincidencia'];
$fechaincidencia=$_POST['fechaincidencia'];
$incidencia=$_POST['incidencia'];
$fechasolucion=$_POST['fechasolucion'];
$solucion=$_POST['solucion'];

// conectamos con la base de datos
include("Conexion.php");
// creamos consulta
$sql="INSERT INTO incidencias(idincidencia, fechaincidencia, incidencia, fechasolucion, solucion) VALUES('$idincidencia','$fechaincidencia','$incidencia','$fechasolucion','$solucion')";
// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header('Location:'.$_SERVER['HTTP_REFERER']);
?>