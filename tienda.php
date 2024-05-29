<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="image/favicon.png">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>


    <!-- Header -->
    <?php include("includes/header.php"); ?>

  <!-- Tienda -->
      <main>
        <section class="" id="buscador" style="padding-top: 40px;">
            <div class="container text-center justify-content-center">
                <div class="group-title">
					<h3 style="margin-bottom:30px" class="titulobuscador">Buscador de productos</h3>
				</div>
                <div class="default-form-area">
					<form id="form-catalogo" name="contact_form" class="default-form" action="" method="post">
						<div class="row clearfix">
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="form-group style-two">
                                        <select name="marca" id="marca" class="form-control">
                                            <option value="0">Todos los Resultados</option>
                                            <option value="1">FIAT</option>
                                            <option value="2">FORD</option>
                                            <option value="3">TOYOTA</option>
                                        </select>
									</div>
								</div>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="form-group style-two">
                                    <select name="padron" id="padron" class="form-control">
                                        <option value="0" selected="selected">Productos</option>
                                        <option value="001">PARAGOLPES</option>
                                        <option value="002">ESPEJOS</option>
                                        <option value="003">OPTICAS</option>
                                    </select>
                                </div>
							</div>	
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="form-group style-two">
									<input type="text" name="texto" value="" class="form-control " placeholder="Descripción">
								</div>
							</div> 
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="form-group style-two">
									<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
									<button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">Buscar</button>
								</div>
							</div>   
						</div>
					</form>
				</div>
            </div>
            
            <!-- Items que aparecen en el buscador -->

            <div class="container">
				<div class="item-list">
					<div class="row" id="catalogo">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="item">
                                <figure class="image-box">
                                    <a class="fancybox" href="/image/data/productos/15-059-001.jpg" data-fancybox-group="gallery">
                                    <img src="/image/data/productos/15-059-001.jpg" alt="15/059/001 ALMAS DE PARAGOLPE A3 96/04 DELANTERA"></a>
                                </figure>
                                <div class="content-box">
                                    <h4><a>15/059/001</a></h4
                                    <p>ALMAS DE PARAGOLPE A3 96/04 DELANTERA</p>
                                </div>
                            </div>
                        </div>
        			</div>
				</div>
			</div>
        </section>
      </main>
    

    <!-- FOOTER -->
    <?php include("includes/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>