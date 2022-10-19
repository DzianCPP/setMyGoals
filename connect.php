<?php

$user = "joe";
$db = "goals";
$host = "localhost";
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    "!LoveMyLilBirdy1",
    $db,
    $port
);
