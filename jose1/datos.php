<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'users'
) or die(mysqli_erro($mysqli));

?>