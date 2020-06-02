<!DOCTYPE html>
<html>
<head>
	<title>Registro de empleado</title>
  <?php 
require_once "index.php"; 
?>

</head>
<body>
	
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