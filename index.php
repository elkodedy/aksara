<?php $koneksi = new mysqli("localhost", "root", "", "aksara"); ?>


<!DOCTYPE>
<html>
<head>
	<title>Lembaga Pendidikan Aksara</title>
	<!-- <link rel="shortcut icon" href="admin/img/iconhammer.jpg"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/a.css">
	<link rel="stylesheet" type="text/css" href="css/mobile-landscape.css" media="screen and (orientation: landscape)">

	<style type="text/css">
	</style>
</head>
<body>
	
	<?php include 'navbar.php'; ?>

	<div>
		<?php 
			if (isset($_GET['halaman'])){
				if($_GET['halaman']=="ruang_bermain"){
					include 'ruangbermain.php';
				}
				if($_GET['halaman']=="pisha"){
					include 'pisha.php';
				}
				if($_GET['halaman']=="metode"){
					include 'metode.php';
				}
			}
			else{
				include 'home.php';
				include 'fasilitas.php';
				include 'testimoni.php';
				include 'visimisi.php';
			} 
		?>
	</div>

	<?php include 'footer.php' ?>
	
	<script type="text/javascript" src="admin/js/jsCS.js"></script>
</body>
</html>

