<?php
include('db.php')
?>

<html>
<link rel="stylesheet" href="style.css">
<?php include("db.php");?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<body class="cuerpo">
    <form action="db.php" method="post">
    <div class="from">
    <img src="img/avatar.png" width="100px">
    <br>
    <input name="usuario" type="text" placeholder="nombre">
    <br>
    <input name="contraseña" type="password" placeholder="password" minlength="10">
    <br>
    <button name="la" type="submit" class="boton">iniciar</button>
    <button type="submit" class="boton" ><a href="registro.php"><h1>registrate</h1></a></button>
    <br>
    <br>
   </div>
    </form>
</body>
   </html>