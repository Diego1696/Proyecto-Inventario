<?php
// recuperamos datos del formulario
$idproveedor=$_POST['idproveedor'];
$proveedor=$_POST['proveedor'];


// conectamos con la base de datos
include("Conexion.php");
// creamos consulta
$sql="INSERT INTO proveedores(idproveedor, proveedor) VALUES('$idproveedor','$proveedor')";
// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header('Location:'.$_SERVER['HTTP_REFERER']);
?>