<?php
// Данный для подключения к базе данных
$server = "localhost";
$username = "root";
$password = "";
$dbname = "tetris";

//подключение к базе данных
$conn = mysqli_connect($server, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');