<?php 
$host="sql312.260mb.net";
    $user="n260m_24465151";
    $password="1803170";
    $BD="n260m_24465151_PUB";
    $admin="admin";
    $claveadmin="123";
    $conexion=Mysqli_connect($host,$user,$password,$BD)or die("No se pudo conectar al servidor".mysqli_error($conexion));
    if($conexion){echo"";}else{echo"No hay conexion con el servidor";}
    $sql ="INSERT INTO Empleado VALUES($doc,$nom,$$nom2,$ape,$ape2,$tel,$clave,$correo);";
    $sqlquery=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Admin-Empleados</title>
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
					<figcaption class="text-center text-titles">User Name</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="adminpage2.php" title="Mis datos">
							<i class="zmdi zmdi-account-circle"></i>
						</a>
					</li>
					<li>
						<a href="my-account.html" title="Mi cuenta">
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
					<a href="adminpage2.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Perfil
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						
						<li>
							<a href="../tablas/admin-list-producto.php"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Productos</a>
						</li>
						<li>
							<a href="provider.html"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Proveedores</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="adminpage2.html"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administrador</a>
						</li>
						<li>
							<a href="client.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Empleados</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="catalog.html">
						<i class="zmdi zmdi-book-image zmdi-hc-fw"></i> Reservas
					</a>
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
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
                  <li>
			  		<a href="../tablas/productos-list.php" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; PRODUCTOS
			  		</a>
			  	</li>
                  <li>
			  		<a href="admin.html" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; PROVEDORES
			  		</a>
			  	</li>
                  <li>
			  		<a href="admin-agregar.php" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO EMPLEADO
			  		</a>
			  	</li>
			  	<li>
			  		<a href="admin-list.php" class="btn btn-success">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE EMPLEADOS
			  		</a>
			  	</li>
			  	<li>
			  		<a href="admin-search.html" class="btn btn-primary">
			  			<i class="zmdi zmdi-search"></i> &nbsp; BUSCAR EMPLEADO
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

                    
						<table class="table table-hover text-center">
							<thead>
								<tr>
									<th class="text-center">DOC</th>
									<th class="text-center">PRIMER NOMBRE</th>
									<th class="text-center">SEGUNDO NOMBRES</th>
									<th class="text-center">PRIMER APELLIDO</th>
									<th class="text-center">SEGUNDO APELLIDO</th>
									<th class="text-center">TELEFONO</th>
                                    <th class="text-center">CLAVE</th>
									<th class="text-center">CORREO</th>
                                    <th class="text-center">ID CARGO</th>
                                    <th class="text-center">CARGO</th>
									
								</tr>
							</thead>

                    
				
								<tr>
                                  <form action="agregar.php" method="post" >
									<td><input type="text" name="doc" placeholder="ingrese docuento"></td>
									<td><input type="text" name="nom1" placeholder="ingrese nombre1"></td>
									<td><input type="text" name="nom2" placeholder="ingrese nombre2"></td>
									<td><input type="text" name="ape1" placeholder="ingrese apellido1"></td>
									<td><input type="text" name="ape2" placeholder="ingrese apellido2"></td>
                                    <td><input type="text" name="tel" placeholder="ingrese telefono"></td>
                                    <td><input type="text" name="clave" placeholder="ingrese clave"></td>
                                    <td><input type="text" name="correo" placeholder="ingrese correo"></td>
                                    <td><input type="text" name="idCargo" placeholder="ingrese id tipo de epleado"></td>
                                    <td><input type="text" name="cargo" placeholder="ingrese Cargo"></td>
                                    
                                  
	
								</tr>
                                <tr>
										
											<button type="submit" class="btn btn-danger btn-raised btn-xs">
												<b>Agregar</b>
											</button>
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