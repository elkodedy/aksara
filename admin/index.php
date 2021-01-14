<?php
    session_start();
    include 'koneksi.php';
    if (!isset($_SESSION['admin'])) 
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
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Halaman Admin</title>
    
    <?php include 'link.php'; ?>

    <style type="text/css">
        .maskot {
            font-family:Cinzel, serif;
        }
    </style>

</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <h1 style="font-family: Cinzel Decorative Regular ">AKSARA</h1>
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
                            <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=struktur_lembaga">
                            <i class="fas fa-chart-bar"></i>Struktur Lembaga</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=pembimbing">
                            <i class="fas fa-table"></i>Pembimbing</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=tenaga_kependidikan">
                            <i class="far fa-check-square"></i>Tenaga Kependidikan</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=tenaga_pendidik">
                            <i class="fas fa-calendar-alt"></i>Tenaga Pendidik</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=siswa">
                            <i class="fas fa-graduation-cap"></i>Siswa</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=video">
                            <i class="fas fa-video"></i>video</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../img/Logo Aksara.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="sideBar">
                            <a href="index.php">
                            <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=struktur_lembaga">
                            <i class="fas fa-chart-bar"></i>Struktur Lembaga</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=pembimbing">
                            <i class="fas fa-table"></i>Pembimbing</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=tenaga_kependidikan">
                            <i class="far fa-check-square"></i>Tenaga Kependidikan</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=tenaga_pendidik">
                            <i class="fas fa-calendar-alt"></i>Tenaga Pendidik</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=siswa">
                            <i class="fas fa-graduation-cap"></i>Siswa</a>
                        </li>
                        <li class="sideBar">
                            <a href="index.php?halaman=video">
                            <i class="fas fa-video"></i>video</a>
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
                <div class="section__content section__content--p30" style="left: 63%;">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../img/find_user.png"/>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['admin']['nama_admin'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../img/find_user.png" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href=""><?php echo $_SESSION['admin']['nama_admin'] ?></a>
                                                    </h5>
                                                    <span class="email">aksarakendari@gmail.com</span>
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
                            elseif ($_GET['halaman']=="tenaga_pendidik") 
                            {
                                include 'pendidik.php';
                            }
                            elseif ($_GET['halaman']=="siswa") 
                            {
                                include 'siswa.php';
                            }
                            elseif ($_GET['halaman']=="tambah_siswa") 
                            {
                                include 'tambah_siswa.php';
                            }
                            elseif ($_GET['halaman']=="pembimbing") 
                            {
                                include 'pembimbing.php';
                            }   
                            elseif ($_GET['halaman']=="tambah_pendidik") 
                            {
                                include 'tambah_pendidik.php';
                            }
                            elseif ($_GET['halaman']=="logout") 
                            {
                                include 'logout.php';
                            }
                            elseif ($_GET['halaman']=="struktur_lembaga") 
                            {
                                include 'struktur_lembaga.php';
                            }
                            elseif ($_GET['halaman']=="pembimbing") 
                            {
                                include 'pembimbing.php';
                            }
                            elseif ($_GET['halaman']=="tenaga_kependidikan") 
                            {
                                include 'tenaga_kependidikan.php';
                            }
                            elseif ($_GET['halaman']=="tambah_tenaga_kependidikan") 
                            {
                                include 'tambah_tenaga_kependidikan.php';
                            }
                            elseif ($_GET['halaman']=="tambah_pembimbing") 
                            {
                                include 'tambah_pembimbing.php';
                            }
                            elseif ($_GET['halaman']=="tambah_struktur_lembaga") 
                            {
                                include 'tambah_struktur_lembaga.php';
                            }
                            elseif ($_GET['halaman']=="detail_struktur") 
                            {
                                include 'detail_struktur.php';
                            }
                            elseif ($_GET['halaman']=="detail_pembimbing") 
                            {
                                include 'detail_pembimbing.php';
                            }
                            elseif ($_GET['halaman']=="detail_tenaga_kependidikan") 
                            {
                                include 'detail_tenaga_kependidikan.php';
                            }
                            elseif ($_GET['halaman']=="detail_pendidik") 
                            {
                                include 'detail_pendidik.php';
                            }
                            elseif ($_GET['halaman']=="siswa") 
                            {
                                include 'siswa.php';
                            }
                            elseif ($_GET['halaman']=="detail_siswa") 
                            {
                                include 'detail_siswa.php';
                            }
                            elseif ($_GET['halaman']=="hapus_pembimbing") 
                            {
                                include 'hapus_pembimbing.php';
                            }
                            elseif ($_GET['halaman']=="hapus_struktur") 
                            {
                                include 'hapus_struktur.php';
                            }
                            elseif ($_GET['halaman']=="hapus_tenaga_kependidikan") 
                            {
                                include 'hapus_kependidikan.php';
                            }
                            elseif ($_GET['halaman']=="hapus_pendidik") 
                            {
                                include 'hapus_pendidik.php';
                            }
                            elseif ($_GET['halaman']=="hapus_siswa") 
                            {
                                include 'hapus_siswa.php';
                            }
                            elseif ($_GET['halaman']=="video") 
                            {
                                include 'video.php';
                            }
                            elseif ($_GET['halaman']=="detail_video") 
                            {
                                include 'detail_video.php';
                            }
                            elseif ($_GET['halaman']=="hapus_video") 
                            {
                                include 'hapus_video.php';
                            }
                            elseif ($_GET['halaman']=="tambah_video") 
                            {
                                include 'tambah_video.php';
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
                                    <p>Proudly Created By TI17 UHO</p>
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
