<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pweb_php";

$conn = mysqli_connect($server, $user, $password, $nama_database);
$pdo = new PDO('mysql:host='.$server.';dbname='.$nama_database, $user, $password);
if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>