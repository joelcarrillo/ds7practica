<!DOCTYPE html>
<html>
  <head>
    <title>Registro</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script>
      function ComprobarClave(){
        clave1 = document.formulario.password1.value
        clave2 = document.formulario.password2.value

        if (clave1 != clave2) {
          alert("Las dos claves no son iguales...");
          return false;
        } 
      } 
    </script>
  </head>
  <body>
    <div class="login">
      <img src="public/images/utp.png" alt="Logo de la UTP" class="logo">
      <h2>Registro</h2> 
      <p>¡Create una cuenta y comienza a usar nuestros servicios!</p>
      <form method="POST" action="?op=registrar" class="login-form form-group" name="formulario" onSubmit="return ComprobarClave()">
        <p class="<?php if (isset ($_GET['msg'])) echo $_GET['t'];?>"> <?php if (isset ($_GET['msg'])) echo $_GET['msg'];?> </p>
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="John">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Doe">
        <label for="correo">Email</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="johndoe@gmail.com">
        <label for="password1">Contraseña</label>
        <input type="password" class="form-control" id="password1" name="password1">
        <label for="password2">Repetir Contraseña</label>
        <input type="password" class="form-control" id="password2" name="password2">
        <button type="submit" class="btn btn-primary login-btn">Registrarse</button>
      </form>
    </div> 
    <div class="sidebar">
      <img src="public/images/register.svg" class="register-img" alt="">
    </div>
  </body>
</html>