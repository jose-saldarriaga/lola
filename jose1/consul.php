<?php
include('b_datos.php');


if  (isset($_POST['Ingresar'])) {
    $usuario = $_POST['usuario'];
    $Clave = $_POST['password'];
    echo $usuario;
    echo $Clave;
    $query = "SELECT * FROM regis WHERE usuario='$usuario' AND cla = '$Clave'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        
        echo 'Consulta Correcta';
    }else{
        echo 'Registro no hallado';
    }
  }

  
  
?>