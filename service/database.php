<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "izin";

$db = mysqli_connect($hostname, $username, $password, $database_name);
if ($db->connect_error) {
  echo "error conn to database";
  die("error");
}

?>