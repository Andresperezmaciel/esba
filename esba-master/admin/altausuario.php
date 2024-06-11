<?php
    
    include("includes/configadm.php");
    session_start();
    error_reporting(0);

    if(isset($_SESSION['usuario'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Alta de Usuarios</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="../image/favicon.png">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
<body class="bg-body-tertiary">
    
    <?php include("includes/headeradm.php"); ?>

    <br><br>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php include("includes/menuadm.php");?>
                    <div class="col-md-9">
                        <div class="mb-3">
                            <h4 class="text-center">Alta de Usuario</h4>
                        </div>
                        <form method="POST" action="includes/validaraltauser.php">
                            <div class="row gy-3 overflow-hidden">
                            <div class="col-7">
                                <div class="form-floating mb-1">
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="User" required>
                                <label for="usuario" class="form-label" name="usuario">Usuario</label>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="form-floating mb-1">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                <label for="password" class="form-label" name="password">Contraseña</label>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="form-floating mb-1">
                                <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa" placeholder="Nombre de la Empresa" required>
                                <label for="nombre_empresa" class="form-label" name="nombre_empresa">Nombre de la Empresa</label>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="form-floating mb-1">
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" required>
                                <label for="direccion" class="form-label" name="direccion">Direccion</label>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="form-floating mb-1">
                                <input type="text" class="form-control" name="cuit" id="cuit" pattern="[2]{1}[0,3,5,7]{1}[0-9]{9}" title="" placeholder="Cuit" required>
                                <label for="cuit" class="form-label" name="cuit">Cuit</label>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="form-floating mb-1">
                                <input type="text" class="form-control" name="telefono" id="telefono" pattern="[1]{1}[1,5]{1}[1-9]{8}" title="El numero tiene que empezar con (11) o (15) y contener 8 números" placeholder="Telefono" required>
                                <label for="telefono" class="form-label" name="telefono">Telefono</label>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="form-floating mb-1">
                                <input type="email" class="form-control" name="mail" id="mail" pattern=".+@[gG][mM][aA][iI][lL][.][cC][oO][mM]" title="Solo se permiten cuentas ..@gmail.com" placeholder="Mail" required>
                                <label for="mail" class="form-label" name="mail">Mail</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                <button class="btn btn-dark btn-lg" type="submit" name="registrar">Registrar</button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->

    <div class="footer">
		<div class="container-fluid bg-white">
			
			<b class="copyright">© 2024 Rimberio Autopartes </b> Todos los derechos reservados.
		</div>
	</div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
<?php
}else {
    header("Location:index.php");
    exit;
}
?>