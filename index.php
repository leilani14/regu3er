<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bienvenido</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.ks"></script>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</head>


<body>

	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"align="center" width="50%">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="libros.jpg" class="d-block " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>Libros</h4>
        <p>Los mejores libros al mejor precio.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="audiolibro.jpg" class="d-block " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>Revistas</h4>
        <p>Las revistas TOP.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="revistas.jpg" class="d-block " alt="..." width="50%">
      <div class="carousel-caption d-none d-md-block">
        <h4>Audiolibros</h4>
        <p>Los mejores audiolibros.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button btn-success" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button btn-success" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<ul class="nav nav-pills nav-fill">

  <li class="nav-item">
    <a class="nav-link" href="registrocliente.php">Registro cliente</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="ingresocliente.php">Ingreso cliente</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="ingresoempleado.php">Ingreso empleado</a>
  </li>

   <li class="nav-item">
    <a class="nav-link disabled" href="registro.php" tabindex="-1" aria-disabled="true">Registro empleado</a>
  </li>

   <li class="nav-item">
    <a class="nav-link disabled" href="compras.php" tabindex="-1" aria-disabled="true">Compras</a>
  </li>


</ul>

</body>
</html>