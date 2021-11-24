<?php

include('db.php');
if (isset($_POST['la'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contaseña'];
    echo $usuario;
    echo $contaseña;
    $query = "SELECT * FROM registro WHERE usuario='$usuario' AND Contraseña = '$contraseña'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1){
        echo 'muy bien';
    }
    else{
        echo 'no consultó';
    }
}
?>