<?php

session_start();

$name = $_POST["name"];
$email = $_POST["email"];

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";

$_SESSION["name"] = $name;
$_SESSION["email"] = $email;

