<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['nama'])) {
    if ($_SESSION['type'] == "Admin") {
        header("Location: dashboard.php");
    }
    else if ($_SESSION['type'] == "Student") {
        header("Location: student-dashboard.php");
    }
    // header("Location: berhasil_login.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {

        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['type'] = $row['level'];

        if ($_SESSION['type'] == "Admin") {
            header("Location: dashboard.php");
        }
        else if ($_SESSION['type'] == "Student") {
            header("Location: student-dashboard.php");
        }
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <title>Mata Air.</title>
</head>

<body>
    <div class="container">
        <div class="border">
            <div class="gambar">
                <img id="illus" src="assets/illustration.jpg" alt="gambar">
            </div>
            <div class="auth">
                <img id="logo" src="assets/logo.png" alt="logo">
                <div class="auth-isi">
                    <div class="login-title">
                        <h1>Login</h1>
                        <h3>Masukkan Email dan Password untuk mengakses dashboard</h3>
                    </div>
                    <form id='isi' class="w3-container" method="POST" action="">
                        <p>
                            <label>Email</label>
                            <input id='border-id' class="w3-input w3-round" name="email" type="email" required>
                        </p>
                        <p  style="margin-bottom: 0;">
                            <label">Password</label>
                            <input id="border-id" class="w3-input w3-round" name="password" type="password" required>
                        </p>

                        <div class="remem">
                            <label class="c-remember">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                <p style="width: 100px;">Remember me</p>

                            </label>
                            <p id="rem-p">forgot password?</p>
                        </div>




                        <button style="margin-top: 20px;" name="submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>