<?php

$user = "joe";
$db = "goals";
$host = "localhost";
$port = 3306;
$pass = "!LoveMyLilBirdy1";
$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
