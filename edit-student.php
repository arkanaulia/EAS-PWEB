<?php
session_start();
 
if (!isset($_SESSION['nama'])) {
    header("Location: index.php");
}

// Load file koneksi.php
include "config.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

// Lakukan proses update tanpa mengubah fotonya
// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE user SET nama=:nama, email=:email, password=:password, level=:level WHERE id=:id");
$sql->bindParam(':nama', $nama);
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $password);
$sql->bindParam(':level', $level);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
// Jika Sukses, Lakukan :
header("location: students.php"); // Redirect ke halaman index.php
}else{
// Jika Gagal, Lakukan :
echo "Sorry, there is a problem when saving to database.";
echo "<br><a href='form-add-students.php'>Back to Form</a>";
}

?>