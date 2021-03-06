<?php 
 
session_start();
 
if (!isset($_SESSION['nama'])) {
    header("Location: index.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/students-dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <title>Mata Air.</title>
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
                            <a class="list-group-item mb-2 list-group-item-action active" id="list-home-list"
                                href="student-dashboard.php" role="tab" aria-controls="list-home"><i
                                    class="bi bi-speedometer2 me-3"></i>Dashboard</a>
                            <a class="list-group-item mb-2 list-group-item-action" id="list-profile-list"
                                data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">
                                <i class="bi bi-book me-3"></i>My Learning</a>
                            <a class="list-group-item mb-2 list-group-item-action" id="list-messages-list"
                                data-bs-toggle="list" href="#list-messages" role="tab"
                                aria-controls="list-messages"><i class="bi bi-calendar-check me-3"></i>Absent</a>
                            <a class="list-group-item mb-2 list-group-item-action" id="list-settings-list"
                                data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"><i
                                    class="bi bi-gear-fill me-3"></i>Settings</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="desbor">
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
                        <div class="col-12 ps-5 jb-img bg-success text-white" style="background-image: url('assets/students-dashboard-img.jpg');">
                            <h1 class="mt-5 mb-2">Success is a habit</h1>
                            <p class="mb-4">Build your learning routine in Mata Air. Find your best course here!</p>
                            <button type="button" class="btn fw-bold text-white mb-5" style="background-color: #30725E ;">Explore Now</button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6 ps-5">
                            <h2 class="fs-2" style="color: #11142D;">Continue Learning</h2>
                        </div>
                        <div class="col-2 ps-5">
                            <a class="fs-5 fw-bold text-decoration-none" href="" style="color: #30725E;">See All</a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-8 ps-5">
                            <div class="row">
                                <div class="col-3">
                                    <img src="assets/learning1.png" style="border-radius: 10px;" alt="">
                                </div>
                                <div class="col-7">
                                    <h3 style="color: #11142D">Flutter Development</h3>
                                    <p style="color: #92929D">20. Object-oriented Programming on Dart</p>
                                    <p class="fw-bold" style="margin-top: 70px; margin-bottom: -7px;color: #11142D;" >20/40 Lessons</p>
                                    <div class="row">
                                        <div class="col-10">
                                            <img src="assets/learning1-progress.png" alt="">
                                        </div>
                                        <div class="col-2">
                                            <button type="button" class="btn fw-bold text-white mb-5" style="background-color: #30725E ;">Resume</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <img src="assets/learning2.png" style="border-radius: 10px;" alt="">
                                </div>
                                <div class="col-7">
                                    <h3 style="color: #11142D">iOS Development</h3>
                                    <p style="color: #92929D">10. Working with loops on Swift</p>
                                    <p class="fw-bold" style="margin-top: 70px; margin-bottom: -7px;color: #11142D;">10/40 Lessons</p>
                                    <div class="row">
                                        <div class="col-10">
                                            <img src="assets/learning2-progress.png" alt="">
                                        </div>
                                        <div class="col-2">
                                            <button type="button" class="btn fw-bold text-white mb-5" style="background-color: #30725E ;">Resume</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="assets/date-students-dashboard.png" alt="">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6 ps-5">
                            <h2 class="fs-2" style="color: #11142D;">Recommendation</h2>
                        </div>
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