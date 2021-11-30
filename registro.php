<?php
$con=mysqli_connect('localhost','root', '', 'datos') or die('error en la concexion del servidor');
$where = "";
if (!empty($_POST)) {
$valor = $_POST['campo'];
if (!empty($valor)) {
$where = "WHERE Nombre LIKE '%$valor%'";
}
}

$sql = "SELECT `ID`, `Nombre`, `Correo`, `Matricula`, `Grupo`, `Comentario`, `Contraseña` FROM `formulario` $where";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title> zBusqueda </title>
  </head>
  <body>
    <br><br>
<div class="row">
<div class="col baticol"><CENTER><h3><font>Consulta de Registros</font></h3><CENTER></div>
</div>

<CENTER><div class="row">
  <div class="col batcol">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <b>Nombre: </b><input type="text" id="campo" name="campo" value="" />
    <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn1" />
    </form>
  </div>
</div></CENTER>

<br>
<div class="lol">
<div class="row table-responsive">
  <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Matricula</th>
          <th>Grado/Grupo</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $resultado->fetch_array()) {

        ?>
        <tr>
          <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['Nombre']; ?></td>
          <td><?php echo $row['Correo']; ?></td>
          <td><?php echo $row['Matricula']; ?></td>
          <td><?php echo $row['Grupo']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
  </table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
