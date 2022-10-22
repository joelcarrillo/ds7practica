<!DOCTYPE html>
<html>
  <head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="login">
      <img src="public/images/utp.png" alt="Logo de la UTP" class="logo">
      <h2>Iniciar Sesión</h2> 
      <p>Introduce tu email y contraseña para iniciar sesión</p>
      <form method="POST" action="./?op=acceder" class="login-form form-group">
        <p class="text-danger"> <?php if (isset ($_GET['msg'])) echo $_GET['msg'];?> </p>
        <label for="correo">Email</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="johndoe@gmail.com">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password">
        <div class="checkbox">
          <input type="checkbox" value="remember-me" id="remember" name="remember">
          <label for="remember">Recordar usuario</label>
        </div>
        <button type="submit" class="btn btn-primary login-btn">Iniciar sesión</button>
        <div class="crear-cuenta">
          <span>¿Aún no tienes cuenta? - <a href="?op=crear">Regístrese aquí</a></span>
        </div>
      </form>
    </div> 
    <div class="sidebar">
      <img src="public/images/register.svg" class="register-img" alt="">
    </div>
  </body>
</html>