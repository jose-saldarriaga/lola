<html>
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style.css">
<?php include("pa.php");?>

<body class="cuerpo">
  <table>
  <div class="from">
    <form action="guardar.php" method="POST">
    <img src="img/registro.png" width="120px">
    <br>
    <input type="text" name="nombre" placeholder="nombre">
    <br>
    <input type="date" name="fecha" placeholder="fecha">
    <br>
    <input type="number" name="telefono" placeholder="telefono">
    <br>
    <input type="email" name="email" placeholder="gmail">
    <br>
    <input type="password" name="contraseña" placeholder="contraseña">
    <br>

    <button  class="boton" name="btn"><h1>registrar</h1></button>
    <br>
    <br>
    </form>
</div>
  </table>
</body>
   </html>