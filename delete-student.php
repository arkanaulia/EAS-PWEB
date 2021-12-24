<?php

session_start();
 
if (!isset($_SESSION['nama'])) {
    header("Location: index.php");
}

// Load file koneksi.php
include "config.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];

// Query untuk menghapus data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("DELETE FROM user WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: students.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Delete Failed. <a href='students.php'>Back</a>";
}
?>