<?php

session_start();
 
if (!isset($_SESSION['nama'])) {
    header("Location: index.php");
}

// Load file koneksi.php
include "config.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];
// Query untuk menampilkan data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("SELECT * FROM user WHERE id=:id");
$sql->bindParam(':id', $id);
$sql->execute(); // Eksekusi query insert
$data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="students.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <title>Students Data</title>
</head>

<body>
    <div class="dashboard">

        <div class="menu">
            <div class="fixx">
                <div class="row">
                    <img src="assets/logo.png" alt="logo">
                </div>
                <h2 style="margin-top: 50px;">Main Menu</h2>
                <div class="row">
                    <div class="col-4">
                        <div class="list-group fs-6 px-3" id="list-tab" role="tablist">
                            <a class="list-group-item mb-2 list-group-item-action" id="list-home-list"
                                 href="dashboard.php" role="tab" aria-controls="list-home"><i
                                    class="bi bi-speedometer2 me-3"></i>Dashboard</a>
                            <a class="list-group-item mb-2 list-group-item-action active" id="list-profile-list"
                                data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i
                                    class="bi bi-people-fill me-3"></i>Students</a>
                            <a class="list-group-item mb-2 list-group-item-action" id="list-messages-list"
                                data-bs-toggle="list" href="#list-messages" role="tab"
                                aria-controls="list-messages"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                    height="22" fill="currentColor" class="bi bi-mortarboard-fill me-3"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                                </svg>Teacher</a>
                            <a class="list-group-item mb-2 list-group-item-action" id="list-settings-list"
                                data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"><i
                                    class="bi bi-gear-fill me-3"></i>Settings</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="desbor overflow-hidden">
             <div class="kotakan"
                style="width: 100%; height: 90px; display: block; position: fixed; background-color: white; z-index: 4;">
                <div class="row height " style="margin: 20px; margin-left:20px;">
                    <div class="col-6 ">
                        <div class="form "> <i class="fa fa-search ps-3"></i> <input type="text"
                                class="form-control form-input ps-4" placeholder="Search here"></div>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn fs-5 mx-2" style="border-radius: 50%; background-color: #F8F8F8 ;color: #A5A5A5;"><i class="bi bi-bell-fill"></i></button>
                        <button type="button" class="btn fs-5 mx-2" style="border-radius: 50%; background-color: #F8F8F8 ;color: #A5A5A5;"><i class="bi bi-bookmark-check-fill"></i></button>
                        <button type="button" class="btn fs-5 mx-2" style="border-radius: 50%; background-color: #F8F8F8 ;color: #A5A5A5;"><i class="bi bi-folder-fill"></i></button>
                        <button type="button" class="btn fs-5 mx-2" style="border-radius: 50%; background-color: #F8F8F8 ;color: #A5A5A5;"><i class="bi bi-folder-fill"></i></button>
                    </div>
                    <div class="col-1">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle px-3 fw-bold fs-5" type="button" id="Akun" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 40px; background-color:  #F8F8F8;">
                                <i class="bi bi-person-circle pe-2 "></i> <?php echo $_SESSION['nama']; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="Akun">
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-1 ms-4">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle px-3 fw-bold fs-5" type="button" id="Bahasa" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 40px; background-color:  #F8F8F8;">
                                En
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="Bahasa">
                                <li><a class="dropdown-item" href="#">En</a></li>
                                <li><a class="dropdown-item" href="#">ID</a></li>
                                <li><a class="dropdown-item" href="#">Chinese</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="konten">
                    <div class="row">
                        <div class="col-3 me-auto">
                            <h1>Edit Student</h1>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="fs-5">Fill these information correctly.</h2>
                    </div>
                    <div class="row">
                        <form method="post" action="edit-student.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                            
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input value="<?php echo $data['nama']; ?>" name="nama" type="text" id="form3Example2" class="form-control" />
                                <label class="form-label" for="form3Example2">Student Name</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input value="<?php echo $data['email']; ?>" name="email" type="email" id="form3Example3" class="form-control" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input value="<?php echo $data['password']; ?>" name="password" type="password" id="form3Example4" class="form-control" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <input type="text" name="level" value="Student" class="d-none">

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>




    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>