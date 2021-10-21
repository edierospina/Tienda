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
          <a class="nav-link active" aria-current="page" href="#">Registo Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="registroProductos.php">Registo Productos</a>
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
  <div class="container">
    <div class="rou d-flex justify-content-center">
      <div class="col-12 col-md-5">
          <form action="../controllers/empleadosControl.php" method="POST" class="border border-dark mt-3 p-4">
              <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombres">
                 <div class="mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellidos">
              </div>
               <div class="mb-3">
                <label class="form-label">Imail</label>
                <input type="text" class="form-control" name="email">
              </div>
               <div class="mb-3">
                <label class="form-label">Edad</label>
                <input type="text" class="form-control" name="edad">
              </div>
               <div class="mb-3">
                  <label class="form-label">Descripcion</label>
                  <textarea class="form-control" name= "descripcion" placeholder="" id="floatingTextarea"></textarea>                
                </div>
              <div class="mb-3">
                <label class="form-label">Fotografia</label>
                <input type="text" class="form-control" name="fotografia">
                <img src="../public/img/usuario.jpg " alt="Imagen">
              </div>
              <button type="submit" class="btn btn-dark" name="boton">Registrar</button>
          </form>
      </div>
    </div>
  </div>
</main>

<section>
  <?php ?>
    <div class="modal fade" id="modal" tabindex="-1" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">La tiendita</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <div class="modal-body text-dark">
        <h5>PRUEBA</h5>
        </div>
      </div>
    </div>
  </div>
  <?php ?>
</section>

<script type="module" src="../public/js/lanzarmodal.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>