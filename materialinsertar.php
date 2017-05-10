<?php
// recuperamos datos del formulario
$idreferencia=$_POST['idreferencia'];
$aparato=$_POST['aparato'];
$categoria=$_POST['categoria'];
$proveedor=$_POST['proveedor'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$nserie=$_POST['nserie'];
$cantidad=$_POST['cantidad'];
$fechaentrada=$_POST['fechaentrada'];
$autorizadapor=$_POST['autorizadapor'];
$garantia=$_POST['garantia'];
$ubicacion=$_POST['ubicacion'];
$ninterno=$_POST['ninterno'];
$fechabaja=$_POST['fechabaja'];
$observaciones=$_POST['observaciones'];

$tamano=$_POST['tamano'];
$tipo=$_POST['tipo'];


// conectamos con la base de datos
include("Conexion.php");
// creamos consulta
$sql="INSERT INTO fichamaterial(idreferencia, aparato, categoria, proveedor, marca, modelo, nserie, cantidad, fechaentrada, autorizadapor, garantia, ubicacion, ninterno, fechabaja, observaciones) VALUES('$idreferencia','$aparato','$categoria','$proveedor','$marca','$modelo','$nserie','$cantidad','$fechaentrada','$autorizadapor','$garantia','$ubicacion','$ninterno','$fechabaja','$observaciones')";

// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
$id = mysqli_insert_id($conexion);
$sql1="INSERT INTO monitores(idreferencia, tamano, tipo) VALUES('$id','$tamano','$tipo')";
mysqli_query($conexion,$sql1) or die("Error en la consulta de insercion $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header('Location:'.$_SERVER['HTTP_REFERER']);
?>