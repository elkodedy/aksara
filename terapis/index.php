<!-- Koneksi Database Dan SESSION-->
<?php 

    session_start();

    include '../admin/koneksi.php';
    if (!isset($_SESSION['tenaga_pendidik'])) 
    {
        //echo "<script>alert('Anda Harus Login')</script>";
        echo "<script>location='../login.php'</script>";
        exit();
    } 

    $timeout = 10; //stuan menit
    $logout_redirect_url = "../login.php"; //set logout URL
    $timeout = $timeout * 60;
    if (isset($_SESSION['start_time'])) 
    {
        $elapsed_time = time() - $_SESSION['start_time'];
        if ($elapsed_time >= $timeout) 
        {
            session_destroy();
            echo "<script> window.location = '$logout_redirect_url' </script>";

        }
    }
    $_SESSION['start_time'] = time();
    
    $id = $_SESSION['tenaga_pendidik']["id_pendidik"];
    $ambil = $koneksi -> query("SELECT * FROM pendidik WHERE id_pendidik = '$id'");
    $pecah = $ambil -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Halaman Terapis</title>
    <?php include 'link.php'; ?>

</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="../img/Logo Aksara.png" alt="Cool Admin" style="width: 30vw" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="sideBar">
                            <a href="index.php">
                            <i class="fas fa-tachometer-alt"></i>Profil Saya</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=siswa">
                            <i class="fas fa-graduation-cap"></i>Siswa Saya</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=tambah_siswa">
                            <i class="fas fa-plus-square"></i>Tambah Siswa</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="../img/Logo Aksara.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="sideBar">
                            <a href="index.php">
                            <i class="fas fa-tachometer-alt"></i>Profil Saya</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=siswa">
                            <i class="fas fa-graduation-cap"></i>Siswa Saya</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=tambah_siswa">
                            <i class="fas fa-plus-square"></i>Tambah Siswa</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30" style="left: 60%;">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../img/<?php echo $pecah['foto_pendidik'] ?>"/>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['tenaga_pendidik']['nama_pendidik'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../img/<?php echo $pecah['foto_pendidik'] ?>"/>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['tenaga_pendidik']['nama_pendidik'] ?></a>
                                                    </h5>
                                                    <span class="email">qwerty@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?php 
                        if (isset($_GET['halaman'])) 
                        {
                            if ($_GET['halaman']=="profil") 
                            {
                                include 'profil.php';
                            }
                            elseif ($_GET['halaman']=="siswa") 
                            {
                                include 'siswa.php';
                            }
                            elseif ($_GET['halaman']=="detail_siswa") 
                            {
                                include 'detail_siswa.php';
                            }
                            elseif ($_GET['halaman']=="tambah_siswa") 
                            {
                                include 'tambah_siswa.php';
                            }
                        }
                        else
                        {
                            include 'home.php';  
                        }
                     ?>          
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 CODEHOUSE STUDIO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php include 'javascript.php'; ?>

</body>
</html>
<!-- end document-->
