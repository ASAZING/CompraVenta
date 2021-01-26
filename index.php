<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand logo font-weight-bold" href="#"><img  width="90px" height="60px" src="src/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos <i class="fa fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de <i class="fa fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gane</a>
                    </li>
                </ul>
                <span class="nav-item badge bg-success me-auto fs-6">
                    Obten mas de 40 US$
                </span>
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border" href="#">Empezar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>
    <div>
        <h1 class="text-center font-weight-bold" style="margin-top: 100px; color: white;"><strong>Comprar y
                vender</strong></h1>
        <h6 class="text-center" style="margin-top: 50px; color: white;">es el ligar más sencillo para comprar, vender y
            gestionar</h6>
        <div style="margin-top: 10px;">
            <form class="row g-3" action="sendInfo.php" method="post">
                <div class="col-5">
                    <input type="email" class="form-control form-control-lg" id="email" name="email"
                        placeholder="Dirección de correo electronico" required>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control form-control-lg" id="contact" name="contact"
                        placeholder="INGRESE SU NOMBRE Y NUMERO" required>

                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-success btn-lg mb-3">EMPEZAR</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>