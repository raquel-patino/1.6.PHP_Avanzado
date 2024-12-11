<?php
session_start();

$nombre = $_POST["name"];
$email= $_POST ["email"];

echo "El nombre del usuario es " . $nombre;
echo "<br>";
echo "El e-mail del usuario es " . $email;
echo "<br>";

$_SESSION ["name"] = $nombre;
$_SESSION ["email"] = $email;

print_r($_SESSION);
?>