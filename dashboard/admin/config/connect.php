<?php

$host = "localhost";
$user = "ishmael";
$password = "921640";
$db = "hms";

$conn = mysqli_connect($host,$user,$password, $db);

if (!$conn) {

  echo 'error in connection' . mysqli_connect_error();

  die();
}
// else{
//     echo "connected";
// }