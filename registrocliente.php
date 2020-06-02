<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registro de cliente</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.ks"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script></head>
<body>

<?php 
require_once "index.php"; 
?>

<form class="form-group">
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="nombre">
    </div>

  </div>



<div class="form-row"> 
  <div class="form-group col-md-2">
    <label>Edad</label>
    <input type="text" class="form-control" id="edad" placeholder="Edad">
  </div>
</div>

<div class="form-row"> 
 <div class="form-group col-md-2">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="contrasena">
    </div>
  </div>

  <div class="form-row">
  
    <div class="form-group col-md-2">
      <label for="inputState">Genero</label>
      <select id="inputState" class="form-control">
        <option selected>Selecciona...</option>
        <option name="hombre" value="hombre">Hombre</option>
        <option name="mujer" value="mujer">Mujer</option>
      </select>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Registrarse</button>
</form>


</body>
</html>