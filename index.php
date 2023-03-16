<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Libreria</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Libros</a>
                    </li>
                    <li>
                        <a href="cliente.html">Cliente</a>
                    </li>
                    <li>
                        <a href="compra.html">Compra</a>
                    </li>
                    <li>
                        <a href="proveedor.html">Proveedor</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/producto.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Libros</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>Añadir libro</h2>
                <form autocomplete="off" action="insertar.php" method="post">
                    <div class="form-row control-group">
                        <div class="form-group col-md-6 floating-label-form-group controls">
                            <label>ISBN</label>
                            <input type="text" class="form-control" placeholder="ISBN" name="cod_prod" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-md-6 floating-label-form-group controls">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" name="descripcion" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-md-6 floating-label-form-group controls">
                            <label>Precio unitario</label>
                            <input type="text" class="form-control" placeholder="Precio unitario" name="precio_uni" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-md-6 floating-label-form-group controls">
                            <label>Existencia</label>
                            <input type="text" class="form-control" placeholder="Existencia" name="existencia" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-md-6 floating-label-form-group controls">
                            <label>Stock</label>
                            <input type="text" class="form-control" placeholder="Stock" name="stock" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br><br><br><br><br><br><br><br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input class="btn btn-default" type="submit" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
            <br><br><br><br><br><br><br><br>
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>Eliminar libro</h2>
                <form autocomplete="off" action="eliminar.php" method="post">
                    <div class="form-row control-group">
                        <div class="form-group col-md-6 floating-label-form-group controls">
                            <label>ISBN</label>
                            <input type="text" class="form-control" placeholder="ISBN" name="cod_prod" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br><br><br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input class="btn btn-default" type="submit" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
            <br><br><br><br><br><br>
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>Consultar libro</h2>
                <form autocomplete="off" action="consulta.php" method="post">
                    <div class="form-row control-group">
                        <div class="form-group col-md-6 floating-label-form-group controls">
                            <label>ISBN</label>
                            <input type="text" class="form-control" placeholder="ISBN" name="cod_prod" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br><br><br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input class="btn btn-default" type="submit" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
