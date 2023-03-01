<?php
$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host, username: $username, password: $password, database: $dbname);

if($mysqli->connect_errno)
{
  die("Connection Error: " . $mysqli->connect_errno);
}

return $mysqli;
?>