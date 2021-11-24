<?php include("datos.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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