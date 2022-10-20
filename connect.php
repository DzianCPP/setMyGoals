<?php
$user = 'joe';
$password = '!LoveMyLilBirdy1';
$db = 'goals';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);
