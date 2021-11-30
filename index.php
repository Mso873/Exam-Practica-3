<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de contacto</title>

  <!-- Enlace al documento css. no aplicable en codepen.
  <link rel="stylesheet" type="text/css" href="contact-form.css">
-->

  </head>
<style>
    /* Importación de fuentes de google fonts */
@import url(https://fonts.googleapis.com/css?family=Noto+Sans);

body{
  height: 100%;
  font-family: 'Noto Sans', sans-serif;
  background-color: black;
}
.contact_form{
  width: 460px;
  height: auto;
  margin: 80px auto;
  border-radius: 10px;
  padding-top: 30px;
  padding-bottom: 20px;
  background-color: #fbfbfb;
  padding-left: 30px;
}
input{
  background-color: #fbfbfb;
  width: 408px;
  height: 40px;
  border-radius: 5px;
  border-style: solid;
  border-width: 1px;
  border-color: #000000;
  margin-top: 10px;
  padding-left: 10px;
  margin-bottom: 20px;
}
textarea{
  background-color: #fbfbfb;
  width: 405px;
  height: 150px;
  border-radius: 5px;
  border-style: solid;
  border-width: 1px;
  border-color: #000000;
  margin-top: 10px;
  padding-left: 10px;
  margin-bottom: 20px;
  padding-top: 15px;
}
label{
  display: block;
  float: center;
}
button{
  height: 45px;
  padding-left: 5px;
  padding-right: 5px;
  margin-bottom: 20px;
  margin-top: 10px;
  text-transform: uppercase;
  background-color: #0b87ec;
  border-style: solid;
  border-radius: 10px;
  width: 420px;
  cursor: pointer;
}
button p{
  color: #fff;
}
span{
  color: #000000;
}
.aviso{
  font-size: 13px;
  color: #0e0e0e;
}
h1{
  font-size: 39px;
  text-align: letf;

  color: #000000;

}
h3{
  font-size: 16px;
  padding-bottom: 30px;
  color: #0e0e0e;
}
p{
  font-size: 14px;
  color: #0e0e0e;
}
::-webkit-input-placeholder {
 color: #a8a8a8;
}
::-webkit-textarea-placeholder {
 color: #a8a8a8;
}
.formulario input:focus{
  outline:0;
  border: 1px solid #97d848;
}
.formulario textarea:focus{
  outline:0;
  border: 1px solid #97d848;
}

</style>

<body>

  <div class="contact_form">

    <div class="formulario">
      <h1>Formulario:</h1>

          <form action="" method="post">


                <p>
                  <label for="nombre" class="colocar_nombre"> Nombre Completo:
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="Nombre" id="Nom" required="obligatorio" placeholder="Escribe tu nombre">
                </p>

                <p>
                  <label for="correo" class="colocar_correo"> Correo Electronico:
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="email" name="Correo" id="Cor" required="obligatorio" placeholder="Escribe tu correo electronico">
                </p>

                <p>
                  <label for="Matricula" class="colocar_matricula">Matricula
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="number" name="Matricula" id="Matri"  required="obligatorio" placeholder="Escribe tu matricula">
                </p>

                <p>
                  <label for="grupo" class="colocar_grupo"> Grado y Grupo
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="Grupo" id="Grup"  required="obligatorio" placeholder="Escribe tu grado y grupo">
                </p>

                <p>
                  <label for="comentario" class="colocar_comentario">Comentario
                  </label>
                <textarea name="Comentario" class="texto_comentario" id="Com" placeholder="Deja aquí tu comentario..."></textarea>
                </p>
                <p>
                <label for="contraseña" class="colocar_contraseña">Contraseña
                <span class="obligatorio">*</span>
                </label>
                <input type="text" name="Contraseña" id="Cont" required="obligatorio" placeholder="Escribe tu contraseña">
                </p>

                <button type="submit" name="insertar_formulario" id="insertar" onclick="window.open('Untitled-001_-_copia.html')"><p>Insertar</p></button>
                <button type="reset"><p>Eliminar</p></button>
                <button type="submit" name="Buscar" id="Buscar" onclick="window.open('registro.php')"><p>Buscar</p></button>
                <span class="obligatorio"> </span>


                </p>

          </form>
    </div>
  </div>
  <?php
error_reporting(0);
  $con=mysqli_connect('localhost','root', '', 'datos') or die('error en la concexion del servidor');
  $sql="INSERT INTO `formulario` VALUES (Null, '".$_POST["Nombre"]."', '".$_POST["Correo"]."', '".$_POST["Matricula"]."','".$_POST["Grupo"]."', '".$_POST["Comentario"]."', '".$_POST["Contraseña"]."')";

  $resultado=mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);
    ?>
</body>
</html>
