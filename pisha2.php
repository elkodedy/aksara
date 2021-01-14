<?php  

	$ambil1 = $koneksi -> query("SELECT * FROM pendidik WHERE id_pendidik = 1");
    $pecah1 = $ambil1 -> fetch_assoc();

    $ambil2 = $koneksi -> query("SELECT * FROM pendidik WHERE id_pendidik = 2");
    $pecah2 = $ambil2 -> fetch_assoc();

    $ambil3 = $koneksi -> query("SELECT * FROM pendidik WHERE id_pendidik = 3");
    $pecah3 = $ambil3 -> fetch_assoc();

    $ambil4 = $koneksi -> query("SELECT * FROM pendidik WHERE id_pendidik = 4");
    $pecah4 = $ambil4 -> fetch_assoc();

    $ambil5 = $koneksi -> query("SELECT * FROM pendidik WHERE id_pendidik = 5");
    $pecah5 = $ambil5 -> fetch_assoc();

    $ambil6 = $koneksi -> query("SELECT * FROM pendidik WHERE id_pendidik = 6");
    $pecah6 = $ambil6 -> fetch_assoc();
?>

<body>
	<style type="text/css">
		
	</style>

	<div class="batasNav"></div>
	<a style="text-decoration: none;" class="tback" href="index.php#fasilitas">&#8592; kembali</a>
	<h1 class="fontCinzel align-center font-60">Terapis Handal</h1>
	<div class="pisha">
		<div class="pisha-con pisha-kiri">
			<div class="pisha-pic pic-1"></div>
			<div class="pisha-prof">
				<div class="pisha-prof-height"></div>
				<h3 style="margin-left: -14%;">Elko Dedy Pratama</h3>
				<p style="margin-left: -14%;">Spesialis : Jantung</p>
			</div>
			<div style="clear: both;"></div>
			<center>
				<div class="pisha-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</div>
			</center>
			<div class="pisha-sosmed">
				<div style="float: left; margin-left: 5%; font-size: 15px;"><?php echo $pecah6['no_telepon']; ?></div>
				<ul>
					<li style="margin-right: 10%;"><a class="icon fa fa-facebook" href="" ></a></li>
					<li><a class="icon fa fa-instagram" href=""></a></li>
					<li><a class="icon fa fa-google" href=""></a></li>
				</ul>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>
	<div class="pisha">
		<div class="pisha-con">
			<div class="pisha-pic pic-2"></div>
			<div class="pisha-prof">
				<div class="pisha-prof-height"></div>
				<h3 style="margin-left: -14%;">Elko Dedy Pratama</h3>
				<p style="margin-left: -14%;">Spesialis : Jantung</p>
			</div>
			<div style="clear: both;"></div>
			<center>
				<div class="pisha-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</div>
			</center>
			<div class="pisha-sosmed">
				<div style="float: left; margin-left: 5%; font-size: 15px;"><?php echo $pecah6['no_telepon']; ?></div>
				<ul>
					<li style="margin-right: 10%;"><a class="icon fa fa-facebook" href="" ></a></li>
					<li><a class="icon fa fa-instagram" href=""></a></li>
					<li><a class="icon fa fa-google" href=""></a></li>
				</ul>
				<div style="clear: both;"></div>
			</div>
		<!-- </div> -->
	</div>
	<div class="pisha">
		<div class="pisha-con pisha-kiri">
			<div class="pisha-pic pic-3"></div>
			<div class="pisha-prof">
				<div class="pisha-prof-height"></div>
				<h3 style="margin-left: -14%;">Elko Dedy Pratama</h3>
				<p style="margin-left: -14%;">Spesialis : Jantung</p>
			</div>
			<div style="clear: both;"></div>
			<center>
				<div class="pisha-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</div>
			</center>
			<div class="pisha-sosmed">
				<div style="float: left; margin-left: 5%; font-size: 15px;"><?php echo $pecah6['no_telepon']; ?></div>
				<ul>
					<li style="margin-right: 10%;"><a class="icon fa fa-facebook" href="" ></a></li>
					<li><a class="icon fa fa-instagram" href=""></a></li>
					<li><a class="icon fa fa-google" href=""></a></li>
				</ul>
				<div style="clear: both;"></div>
			</div>
		</div>
	</div>
	<div class="pisha">
		<div class="pisha-con">
			<div class="pisha-pic pic-4"></div>
			<div class="pisha-prof">
				<div class="pisha-prof-height"></div>
				<h3 style="margin-left: -14%;">Elko Dedy Pratama</h3>
				<p style="margin-left: -14%;">Spesialis : Jantung</p>
			</div>
			<div style="clear: both;"></div>
			<center>
				<div class="pisha-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</div>
			</center>
			<div class="pisha-sosmed">
				<div style="float: left; margin-left: 5%; font-size: 15px;"><?php echo $pecah6['no_telepon']; ?></div>
				<ul>
					<li style="margin-right: 10%;"><a class="icon fa fa-facebook" href="" ></a></li>
					<li><a class="icon fa fa-instagram" href=""></a></li>
					<li><a class="icon fa fa-google" href=""></a></li>
				</ul>
				<div style="clear: both;"></div>
			</div>
		</div>
	</div>
	<div class="pisha">
		<div class="pisha-con pisha-kiri">
			<div class="pisha-pic pic-5"></div>
			<div class="pisha-prof">
				<div class="pisha-prof-height"></div>
				<h3 style="margin-left: -14%;">Elko Dedy Pratama</h3>
				<p style="margin-left: -14%;">Spesialis : Jantung</p>
			</div>
			<div style="clear: both;"></div>
			<center>
				<div class="pisha-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</div>
			</center>
			<div class="pisha-sosmed">
				<div style="float: left; margin-left: 5%; font-size: 15px;"><?php echo $pecah6['no_telepon']; ?></div>
				<ul>
					<li style="margin-right: 10%;"><a class="icon fa fa-facebook" href="" ></a></li>
					<li><a class="icon fa fa-instagram" href=""></a></li>
					<li><a class="icon fa fa-google" href=""></a></li>
				</ul>
				<div style="clear: both;"></div>
			</div>
		</div>
	</div>
	<div class="pisha">
		<div class="pisha-con">
			<div class="pisha-pic pic-6"></div>
			<div class="pisha-prof">
				<div class="pisha-prof-height"></div>
				<h3 style="margin-left: -14%;">Elko Dedy Pratama</h3>
				<p style="margin-left: -14%;">Spesialis : Jantung</p>
			</div>
			<div style="clear: both;"></div>
			<center>
				<div class="pisha-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</div>
			</center>
			<div class="pisha-sosmed">
				<div style="float: left; margin-left: 5%; font-size: 15px;"><?php echo $pecah6['no_telepon']; ?></div>
				<ul>
					<li style="margin-right: 10%;"><a class="icon fa fa-facebook" href="" ></a></li>
					<li><a class="icon fa fa-instagram" href=""></a></li>
					<li><a class="icon fa fa-google" href=""></a></li>
				</ul>
				<div style="clear: both;"></div>
			</div>
		</div>
	</div>
<div class="batasBawah"></div>


	<!-- <div class="batasBawah"></div> -->
<script type="text/javascript">
	function navClick(obj) {
		if(obj=='home'){
	    	document.getElementsByClassName('navMarker')[0].id = "navMarker";
	    	document.getElementsByClassName('navMarker')[1].id = "";
		    document.getElementsByClassName('navMarker')[2].id = "";
		}
		if(obj=='fasilitas'){
	    	document.getElementsByClassName('navMarker')[0].id = "";
	    	document.getElementsByClassName('navMarker')[1].id = "navMarker";
		    document.getElementsByClassName('navMarker')[2].id = "";
		}
		if(obj=='testimoni'){
	    	document.getElementsByClassName('navMarker')[0].id = "";
		    document.getElementsByClassName('navMarker')[1].id = "";
	    	document.getElementsByClassName('navMarker')[2].id = "navMarker";
		}
	}
	
	window.onload = navClick('fasilitas');
</script>