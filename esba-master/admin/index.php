<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Login</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="../image/favicon.png">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
<body class="bg-body-tertiary">
    <main>
    
    <nav class="navbar bg-white">
    <div class="container">
        <div class="col-md-10 justify-content-center">
            <a class="navbar-brand rimberio_admin">Rimberio | Admin</a>
        </div>
        <div class="col-md-2 text-right">
            <a class="rimberio_admin_volver" href="../index.php">
                Volver
            </a>
        </div>
    </div>
    </nav>

    <div class="login-box">
      <img src="../image/logosinfondo2.png" />
      <h2>Admin Login</h2>
      <form method="POST" action="http://localhost/esba-master/admin/includes/validaradm.php">
        <input type="text" name="usuario" placeholder="Username" />
        <br>
        <input type="password" name="password" placeholder="Password" />
        <br>
        <button>Login</button>
      </form>
    </div>

    <div class="footer">
		<div class="container-fluid bg-white">
			
			<b class="copyright">© 2024 Rimberio Autopartes </b> Todos los derechos reservados.
		</div>
	</div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </main>
</body>
</html>