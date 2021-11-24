<?php include('registro.php');

if(isset($_POST['btn'])){
    $usuario = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fechadenacimiento = $_POST['fecha'];

    $query="INSERT INTO registro values('$usuario', '$password', '$email', '$telefono', '$fechadenacimiento')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query failed.");
    }
    header('location: index.php');
}
?>
