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

$placa=$_POST['placa'];
$procesador=$_POST['procesador'];
$ram=$_POST['ram'];
$disco=$_POST['disco'];
$tarjetas=$_POST['tarjetas'];
$ip=$_POST['ip'];
$dominio=$_POST['dominio'];
$software=$_POST['software'];


$tipom=$_POST['tipom'];
$tamano=$_POST['tamano'];

$tipoi=$_POST['tipoi'];
$consumible=$_POST['consumible'];

// conectamos con la base de datos
include("Conexion.php");

// creamos consulta
$sql1="INSERT INTO fichamaterial(idreferencia, aparato, categoria, proveedor, marca, modelo, nserie, cantidad, fechaentrada, autorizadapor, garantia, ubicacion, ninterno, fechabaja, observaciones) VALUES('$idreferencia','$aparato','$categoria','$proveedor','$marca','$modelo','$nserie','$cantidad','$fechaentrada','$autorizadapor','$garantia','$ubicacion','$ninterno','$fechabaja','$observaciones')";

// ejecutamos la consulta
mysqli_query($conexion,$sql1) or die("Error en la consulta de insercion $sql");

// recuperamos idreferencia de la base de datos
$id = mysqli_insert_id($conexion);

$sql2="INSERT INTO ordenadores(idreferencia, placa, procesador, ram, disco, tarjetas, ip, dominio, software) VALUES('$id','$placa','$procesador','$ram','$disco','$tarjetas','$ip','$dominio','$software')";

$sql3="INSERT INTO monitores(idreferencia, tipom, tamano) VALUES('$id','$tipom','$tamano')";

$sql4="INSERT INTO impresoras(idreferencia, tipoi, consumible) VALUES('$id','$tipoi','$consumible')";

if ($categoria=="ordenador") {
mysqli_query($conexion,$sql2) or die("Error en la consulta de insercion $sql");
}

if ($categoria=="monitor") {
mysqli_query($conexion,$sql3) or die("Error en la consulta de insercion $sql");
}

if ($categoria=="impresora") {
mysqli_query($conexion,$sql4) or die("Error en la consulta de insercion $sql");
}

// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header('Location:'.$_SERVER['HTTP_REFERER']);
?>