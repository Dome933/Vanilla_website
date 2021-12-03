<?php

$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "wbsprojekt";

$connect = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

if(!$connect){
  die("Connection failed!".mysqli_connect_error());
}
?>
