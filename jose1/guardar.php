<?php

include('datos.php');

if (isset($_POST['regis'])){

$uname=$_POST['uname'];
$email=$_POST['email'];
$psw=$_POST['psw'];
$tel=$_POST['tel'];
$fecha=$_POST['fecha'];
$query="INSERT INTO regis VALUES('$uname','$email','$psw','$tel','$fecha')";
$result=mysqli_query($conn,$query);
if(!$result){
    die("Query Failed");
}

header('Location:index.php');
}
?>