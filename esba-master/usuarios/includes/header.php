<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <nav class="col-md-2 bg-white">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="../image/logosinfondo2.png" alt="Logo de la empresa" height="100">
                </a>
            </div>
        </nav>
        <div class="col-md-8 navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><strong>Inicio</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#seccion_servicios"><strong>Servicios</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#seccion_sucursales"><strong>Sucursales</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tienda.php"><strong>Catalogo</strong></a>
                </li>
            </ul>
        </div>
        <div class="col-md-2 text-right">
                <div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">
				<li><a href="#"><i class="icon fa fa-user"></i> Bienvenid@ - <?php echo htmlentities($_SESSION['usuario']);?></a></li>
					<li><a href="#"><i class="icon fa fa-shopping-cart"></i> Mi Carrito</a></li>
                    <li><a href="logout.php"><i class="icon fa fa-sign-out"></i> Logout</a></li>
				</ul>
			</div>
        </div>
    </div>
</nav>
<div class="container barranegra"></div>
<div class="container barraoro"></div>