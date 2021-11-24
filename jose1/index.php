<?php include("datos.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>        
        <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
      <form action="consul.php" method="POST">
        <div class="from">
            <img src="img/avatar.png" width="100px">
            <br>
            <input name="usuario" type="text" placeholder="nombre">
            <br>
            <input name="password" type="password" placeholder="password" minlength="10">
            <br>
            <button name="ingresar" type="submit" class="boton"><h1>iniciar</h1></button>
            <button type="submit" class="boton" ><a href="registro.php"><h1>registrate</h1></a></button>
            <br>
            <br>
        </div>
      </form>
    </div>
</body>
</html>