<?php
session_start();
 
if (!isset($_SESSION['nama'])) {
    header("Location: index.php");
}

// Load file koneksi.php
include "config.php";
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

// Proses upload

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO user(nama, email, password, level) VALUES(:nama, :email, :password, :level)");

$sql->bindParam(':nama', $nama);
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $password);
$sql->bindParam(':level', $level);

$sql->execute(); // Eksekusi query insert

if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: students.php"); // Redirect ke halaman index.php
}else{
    // Jika Gagal, Lakukan :
    echo "Sorry, there is a problem when saving to database.";
    echo "<br><a href='form-add-students.php'>Back to Form</a>";
}

?>