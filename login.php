<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>

    <section class="bg-black p-3 p-md-4 p-xl-5">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-12 col-xxl-11">
            <div class="card border-light-subtle shadow-sm">
            <div class="row g-0">
                <div class="col-12 col-md-6">
                <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy" src="image/logo.png">
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                    <div class="row">
                        <div class="col-12">
                        <div class="mb-5">
                            <h4 class="text-center">Iniciar Sesión</h4>
                        </div>
                        </div>
                    </div>
                    <form action="#!">
                        <div class="row gy-3 overflow-hidden">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="User" required>
                            <label for="usuario" class="form-label">Usuario</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                            <label for="password" class="form-label">Contraseña</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                            <label class="form-check-label text-secondary" for="remember_me">
                                Recuerdáme
                            </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                            <button class="btn btn-dark btn-lg" type="submit">Ingresar</button>
                            </div>
                        </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-5">
                            <a href="#!" class="link-secondary text-decoration-none">Has olvidado tu contraseña?</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</body>
</html>
