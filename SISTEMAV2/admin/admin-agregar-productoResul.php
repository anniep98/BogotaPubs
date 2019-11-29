
<?php 
  $host="sql312.260mb.net";
    $user="n260m_24465151";
    $password="1803170";
    $BD="n260m_24465151_PUB";
    
    $conexion=Mysqli_connect($host,$user,$password,$BD)or die("No se pudo conectar al servidor".mysqli_error($conexion));
    if($conexion){echo"";}else{echo"No hay conexion con el servidor";}
    $sql ="SELECT * FROM producto";
    $sqlquery=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Admin-producto-agregar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				PUBS BOGOTA<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/avatars/AdminMaleAvatar.png" alt="UserIcon">
					<figcaption class="text-center text-titles">nombre de usuario</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="adminpage2.php" title="Mis datos">
							<i class="zmdi zmdi-account-circle"></i>
						</a>
					</li>
					<li>
						<a href="my-account.html" title="config">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="adminpage2.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Perfil
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="admin-list-producto.php"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Productos</a>
						</li>>
					</ul>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="adminpage2.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administrador</a>
						</li>
						<li>
							<a href="client.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Empleados</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="search.html" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Usuarios <small>ADMINISTRADORES</small></h1>
			</div>
			<p class="lead">que ej esto </p>
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
                  <li>
			  		<a href="admin.html" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; PRODUCTOS
			  		</a>
			  	</li>
                  <li>
			  		<a href="admin-agregar.php" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO PRODUCTO
			  		</a>
			  	</li>
			  	<li>
			  		<a href="admin-list.php" class="btn btn-success">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE PRODUCTO
			  		</a>
			  	</li>
			  	<li>
			  		<a href="admin-search.html" class="btn btn-primary">
			  			<i class="zmdi zmdi-search"></i> &nbsp; BUSCAR PRODUCTO
			  		</a>
			  	</li>
			</ul>
		</div>
		
		<!-- Panel listado de administradores -->
		<div class="container-fluid">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE EMPLEADOS</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
                       <h2>Producto ingresado exitosamente</h2>
                    
						<table class="table table-hover text-center">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th class="text-center">PRODUCTO</th>
									<th class="text-center">PRECIO</th>
									<th class="text-center">TIPO_ID</th>
									
								</tr>
							</thead>
                 
                    
                  
                    <?php 
                    
                    
                    
                    while($fila=mysqli_fetch_assoc($sqlquery)){
                        ?>
                    
							
								<tr>
									<td><?php echo  $fila['id']?></td>
									<td><?php echo  $fila['nom_producto']?></td>
									<td><?php echo  $fila['precio']?></td>
									<td><?php echo  $fila['product_id']?></td>
								
									<td>
										<a href="#!" class="btn btn-success btn-raised btn-xs">
											<i class="zmdi zmdi-refresh"></i>
										</a>
									</td>
									
									<td>
										<form>
											<button type="submit" class="btn btn-danger btn-raised btn-xs">
												<i class="zmdi zmdi-delete"></i>
											</button>
										</form>
									</td>
                                    
								</tr><?php } ?>
                                <tr>
                                <form action="agregar.php" method="post" >
									<td><input type="text" name="id" placeholder="ingrese id"></td>
									<td><input type="text" name="nomProd" placeholder="ingrese nobre de producto"></td>
									<td><input type="text" name="precio" placeholder="ingrese precio"></td>
									<td><input type="text" name="tipo_id" placeholder="ingrese id_tipo"></td>
								
                                    <input type="submit" value="enviar">
                                    </form>
                                </tr>
                            
                            
						</table>
					</div>
					<nav class="text-center">
						<ul class="pagination pagination-sm">
							<li class="disabled"><a href="javascript:void(0)">«</a></li>
							<li class="active"><a href="javascript:void(0)">1</a></li>
							<li><a href="javascript:void(0)">2</a></li>
							<li><a href="javascript:void(0)">3</a></li>
							<li><a href="javascript:void(0)">4</a></li>
							<li><a href="javascript:void(0)">5</a></li>
							<li><a href="javascript:void(0)">»</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
		
	</section>

	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>