<?php 

    $koneksi = new mysqli("localhost", "root", "", "aksara");

    session_start();
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="admin/css/style.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/Logo Aksara.png" alt="Cool Admin"/>
                            </a>
                        </div><br>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Masukkan Username" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Masukkan Password" required>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <a href="#">Lupa Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" name="masuk">Masuk</button>
                            </form>

                            <?php 

                                if (isset($_POST["masuk"])) 
                                {

                                    $username = $_POST["username"];
                                    $password = $_POST["password"];

                                    $diambil1 = $koneksi -> query("SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
                                    $lacak1 = $diambil1 -> num_rows;
                                    if ($lacak1 == 1) 
                                    {
                                        $_SESSION ["admin"] = $diambil1 -> fetch_assoc();
                                        echo "<script> location='admin/index.php'; </script>";
                                    }
                                    $diambil2 = $koneksi -> query("SELECT * FROM pendidik WHERE username_pendidik = '$username' AND password_pendidik = '$password'");
                                    $lacak2 = $diambil2 -> num_rows;
                                    if ($lacak2 == 1) 
                                    {
                                        $_SESSION ["tenaga_pendidik"] = $diambil2 ->fetch_assoc();
                                        echo "<script> location='terapis/index.php'; </script>";
                                    }
                                    $diambil3 = $koneksi -> query("SELECT * FROM siswa WHERE username = '$username' AND password = '$password'");
                                    $lacak3 = $diambil3 -> num_rows;
                                    if ($lacak3 == 1) 
                                    {
                                        $_SESSION ["siswa"] = $diambil3 ->fetch_assoc();
                                        echo "<script> location='siswa/index.php'; </script>";
                                    }
                                    else
                                    {
                                        echo "<script> alert('Login Gagal'); </script>";
                                        echo "<script> location='login.php'; </script>";
                                    }

                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="admin/vendor/slick/slick.min.js">
    </script>
    <script src="admin/vendor/wow/wow.min.js"></script>
    <script src="admin/vendor/animsition/animsition.min.js"></script>
    <script src="admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="admin/js/main.js"></script>

</body>

</html>
<!-- end document-->