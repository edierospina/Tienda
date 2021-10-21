<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
</head>
<body class="fondo">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                 <a class="navbar-brand" href="../index.php">TiendaWeb</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="registroUsuario.php">Registo Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Registo Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</header>
<main>
    <h3 class= "text-center m-t2">REGISTRO PRODUCTOS</h3>
  <div class="container">
    <div class="rou d-flex justify-content-center">
      <div class="col-12 col-md-5">
          <form action="../controllers/productosControl.php" method="POST" class="border border-dark mt-3 p-4">
              <div class="mb-3">
                <label class="form-label">Nombre producto</label>
                <input type="text" class="form-control" name="nombresProducto">
                 <div class="mb-3">
                <label class="form-label">Marca</label>
                <input type="text" class="form-control" name="marcaProducto">
              </div>
               <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="text" class="form-control" name="precioProducto">
              </div>
               <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcionProducto">
              </div>
              <div class="mb-3">
                <label class="form-label">Fotografia</label>
                <input type="text" class="form-control" name="fotoProducto">
                <img src="../public/img/ropa.jpg" alt="Imagen">
              </div>
              <button type="submit" class="btn btn-dark w-100" name="registrar">Registrar</button>
          </form>
      </div>
    </div>
  </div>
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>