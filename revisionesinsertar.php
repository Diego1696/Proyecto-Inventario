<?php
// recuperamos datos del formulario
$idrevision=$_POST['idrevision'];
$fecharevision=$_POST['fecharevision'];
$realizadapor=$_POST['realizadapor'];
$observaciones=$_POST['observaciones'];

// conectamos con la base de datos
include("Conexion.php");
// creamos consulta
$sql="INSERT INTO revisiones(idrevision, fecharevision, realizadapor, observaciones) VALUES('$idrevision','$fecharevision','$realizadapor','$observaciones')";
// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header('Location:'.$_SERVER['HTTP_REFERER']);
?>