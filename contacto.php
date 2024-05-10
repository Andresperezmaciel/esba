<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">
                <form action="" method="">
                    <div class="card border-warning rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-warning text-black text-center py-2">
                                <h3><i class="fa fa-envelope"></i><strong>Contactanos</strong></h3>
                            </div>
                        </div>
                    <div class="card-body p-3">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-warning"></i></div>
                                </div>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" minlength="3" title="Ingrese minimo 3 caracteres" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-warning"></i></div>
                                    </div>
                                <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-phone text-warning"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="nombre" name="phone" placeholder="1199999999" pattern="[1]{1}[1,5]{1}[1-9]{8}" title="El numero tiene que empezar con (11) o (15) y tener 8 numeros" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-warning"></i></div>
                                    </div>
                                    <textarea class="form-control" placeholder="Envianos tu Mensaje" minlength="3" title="Ingrese minimo 3 caracteres" required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="Enviar" class="btn btn-warning btn-block rounded-0 py-2">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
