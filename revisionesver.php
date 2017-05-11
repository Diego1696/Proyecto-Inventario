<!DOCTYPE html><html lang="es"><head>	<meta charset="UTF-8">	<meta name="viewport" content="width=device-width, initial-scale=1">	<title>Revisiones</title>	<link rel="stylesheet" href="css/normalize.css">	<link rel="stylesheet" href="css/sweetalert2.css">	<link rel="stylesheet" href="css/material.min.css">	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">	<link rel="stylesheet" href="css/main.css">	<link rel="icon" href="assets/img/favicon.ico">	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>	<script src="js/material.min.js" ></script>	<script src="js/sweetalert2.min.js" ></script>	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>	<script src="js/main.js" ></script></head><body>	<?php	session_start();	if (empty($_SESSION['admin'])) {		header('Location:'.$_SERVER['HTTP_REFERER']);	}	?>	<!-- navBar -->	<div class="full-width navBar">		<div class="full-width navBar-options">			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>				<div class="mdl-tooltip" for="btn-menu">Menu</div>			<nav class="navBar-options-list">				<ul class="list-unstyle">					<a href="LogOut.php" value="LogOut" id="btn-exit"><li>						<i class="zmdi zmdi-power"></i>						<div class="mdl-tooltip" for="btn-exit">Salir</div>					</li></a>					<li class="text-condensedLight noLink" ><small>Admin</small></li>					<li class="noLink">						<figure>							<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">						</figure>					</li>				</ul>			</nav>		</div>	</div>	<!-- navLateral -->	<section class="full-width navLateral">		<div class="full-width navLateral-bg btn-menu"></div>		<div class="full-width navLateral-body">			<div class="full-width navLateral-body-logo text-center tittles">				<i class="zmdi zmdi-close btn-menu"></i> Inventario 			</div>			<figure class="full-width" style="height: 77px;">				<div class="navLateral-body-cl">					<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">				</div>				<figcaption class="navLateral-body-cr hide-on-tablet">					<span>						Admin<br>					</span>				</figcaption>			</figure>			<div class="full-width tittles navLateral-body-tittle-menu">				<i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; MENU</span>			</div>			<nav class="full-width">				<ul class="full-width list-unstyle menu-principal">					<li class="full-width">						<a href="home.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								INICIO							</div>						</a>						<a href="encargado.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								ENCARGADO							</div>						</a>						<a href="profesor.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								PROFESOR							</div>						</a>						<a href="sat.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								SAT							</div>						</a>						<a href="materialver.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								VER MATERIAL							</div>						</a>						<a href="materialins.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								INSERTAR MATERIAL							</div>						</a>						<a href="averiasver.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								VER AVERIAS							</div>						</a>						<a href="averiasins.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								INSERTAR AVERIAS							</div>						</a>						<a href="averiasmod.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								MODIFICAR AVERIAS							</div>						</a>						<a href="revisionesver.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								VER REVISIONES							</div>						</a>						<a href="revisionesins.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								INSERTAR REVISIONES							</div>						</a>						<a href="LogOut.php" class="full-width">							<div class="navLateral-body-cl">								<i class="zmdi zmdi-view-dashboard"></i>							</div>							<div class="navLateral-body-cr hide-on-tablet">								SALIR							</div>						</a>					</li>				</ul>			</nav>		</div>	</section>	<!-- pageContent -->	<section class="full-width pageContent">		<section class="full-width text-center" style="padding: 40px 0;">			<h3 class="text-center tittles">NAVEGACION</h3>			<!-- Tiles -->			<a href="encargado.php"><article class="full-width tile">				<div class="tile-text">					<span class="text-condensedLight">						<br>						<small>Encargado</small>					</span>				</div>				<i class="zmdi zmdi-assignment-o tile-icon"></i>			</article></a>			<a href="profesor.php"><article class="full-width tile">				<div class="tile-text">					<span class="text-condensedLight">						<br>						<small>Profesor</small>					</span>				</div>				<i class="zmdi zmdi zmdi-assignment-alert tile-icon"></i>			</article></a>			<a href="sat.php"><article class="full-width tile">				<div class="tile-text">					<span class="text-condensedLight">						<br>						<small>Sat</small>					</span>				</div>				<i class="zmdi zmdi-assignment-check tile-icon"></i>			</article></a>			<a href="materialver.php"><article class="full-width tile">				<div class="tile-text">					<span class="text-condensedLight">						<br>						<small>Ver material</small>					</span>				</div>				<i class="zmdi zmdi-assignment-o tile-icon"></i>			</article></a>			<a href="averiasver.php"><article class="full-width tile">				<div class="tile-text">					<span class="text-condensedLight">						<br>						<small>Ver averias</small>					</span>				</div>				<i class="zmdi zmdi zmdi-assignment-alert tile-icon"></i>			</article></a>			<a href="revisionesver.php"><article class="full-width tile">				<div class="tile-text">					<span class="text-condensedLight">						<br>						<small>Ver revisiones</small>					</span>				</div>				<i class="zmdi zmdi-assignment-check tile-icon"></i>			</article></a>			<a href="materialins.php"><article class="full-width tile">				<div class="tile-text">					<span class="text-condensedLight">						<br>						<small>Insertar material</small>					</span>				</div>				<i class="zmdi zmdi-assignment-o tile-icon"></i>			</article></a>			<a href="averiasins.php"><article class="full-width tile">				<div class="tile-text">					<span class="text-condensedLight">						<br>						<small>Insertar averias</small>					</span>				</div>				<i class="zmdi zmdi zmdi-assignment-alert tile-icon"></i>			</article></a>			<a href="revisionesins.php"><article class="full-width tile">				<div class="tile-text">					<span class="text-condensedLight">						<br>						<small>Insertar revisiones</small>					</span>				</div>				<i class="zmdi zmdi-assignment-check tile-icon"></i>			</article></a>			<a href="averiasmod.php"><article class="full-width tile">				<div class="tile-text">					<span class="text-condensedLight">						<br>						<small>Modificar averias</small>					</span>				</div>				<i class="zmdi zmdi zmdi-assignment-alert tile-icon"></i>			</article></a>		</section>		<div class="datagrid">			<link rel="stylesheet" type="text/css" href="css/tabla.css">			<table align="center" width="80%">				<thead bgcolor="#3F51B5"><tr>					<td>id</td>					<td>Fecha<br>Revisión</td>					<td>Realizada<br>Por</td>					<td>Observaciones</td>				</tr></thead>				<?php				include("Conexion.php");		//creamos la consulta				$sql="SELECT r.idrevision, r.fecharevision, r.realizadapor, r.observaciones FROM revisiones as r;";		//ejecutamos la consulta				$registros=mysqli_query($conexion,$sql);		//leemos el contenido de $registros				while ($linea=mysqli_fetch_array($registros))				{					echo "<tbody><tr>					<td>$linea[idrevision]</td>					<td>$linea[fecharevision]</td>					<td>$linea[realizadapor]</td>					<td>$linea[observaciones]</td>				</tr></tbody>";			}			mysqli_close($conexion);			?>		</table>	</div>	<br><br><br><br><br><br><br><br><br><br></article></section></body></html>