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

<div class="batasNav"></div>
<a style="text-decoration: none;" class="tback" href="index.php#fasilitas">&#8592; kembali</a>
<h1 class="fontCinzel align-center font-60">Terapis Handal</h1>
<div class="bigframe">
	<div class="mnframe1">
		<center>
			<span style="border-bottom: solid #3CB371 2px; font-size: 30px; "><?php echo $pecah1['nama_pendidik']; ?></span><br>
			<img class="circle" src="img/<?php echo $pecah1['foto_pendidik'] ?>">
			<h4>Spesialis : ... </h4>
			<article>
				" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. "
			</article>
		</center>
		<img src="">
		<p class="nomor nomorP"><?php echo $pecah1['pen_terakhir']; ?></p>	
		<ul class="ul-sosmed" style="float: right">
			<li><a class="icon fa fa-facebook" href="" ></a></li>
			<li><a class="icon fa fa-instagram" href=""></a></li>
			<li><a class="icon fa fa-google" href=""></a></li>
		</ul>
	</div>
	<div class="mnframe1 mnframe2">
		<center>
			<span style="border-bottom: solid #FF8C00 2px; font-size: 30px; "><?php echo $pecah2['nama_pendidik']; ?></span><br>
			<img class="circle" src="img/<?php echo $pecah2['foto_pendidik'] ?>">
			<h4>Spesialis : ... </h4>
			<article>
				" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. "
			</article>
		</center>
		<img src="">
		<p class="nomor nomorP"><?php echo $pecah2['pen_terakhir']; ?></p>	
		<ul class="ul-sosmed" style="float: right">
			<li><a class="icon fa fa-facebook" href="" ></a></li>
			<li><a class="icon fa fa-instagram" href=""></a></li>
			<li><a class="icon fa fa-google" href=""></a></li>
		</ul>
	</div>
	<div class="mnframe1 mnframe3">
		<center>
			<span style="border-bottom: solid #4682B4 2px; font-size: 30px; "><?php echo $pecah3['nama_pendidik']; ?></span><br>
			<img class="circle" src="img/<?php echo $pecah3['foto_pendidik'] ?>">
			<h4>Spesialis : ... </h4>
			<article>
				" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. "
			</article>
		</center>
		<img src="">
		<p class="nomor nomorP"><?php echo $pecah3['pen_terakhir']; ?></p>	
		<ul class="ul-sosmed" style="float: right">
			<li><a class="icon fa fa-facebook" href="" ></a></li>
			<li><a class="icon fa fa-instagram" href=""></a></li>
			<li><a class="icon fa fa-google" href=""></a></li>
		</ul>
	</div>

	<div class="mnframe1 mnframe4">
		<center>
			<span style="border-bottom: solid #B22222 2px; font-size: 30px; "><?php echo $pecah4['nama_pendidik']; ?></span><br>
			<img class="circle" src="img/<?php echo $pecah4['foto_pendidik'] ?>">
			<h4>Spesialis : ... </h4>
			<article>
				" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. "
			</article>
		</center>
		<img src="">
		<p class="nomor nomorP"><?php echo $pecah4['pen_terakhir']; ?></p>	
		<ul class="ul-sosmed" style="float: right">
			<li><a class="icon fa fa-facebook" href="" ></a></li>
			<li><a class="icon fa fa-instagram" href=""></a></li>
			<li><a class="icon fa fa-google" href=""></a></li>
		</ul>
	</div>

	<div class="mnframe1 mnframe5">
		<center>
			<span style="border-bottom: solid #3CB371 2px; font-size: 30px; "><?php echo $pecah5['nama_pendidik']; ?></span><br>
			<img class="circle" src="img/<?php echo $pecah5['foto_pendidik'] ?>">
			<h4>Spesialis : ... </h4>
			<article>
				" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. "
			</article>
		</center>
		<img src="">
		<p class="nomor nomorP"><?php echo $pecah5['pen_terakhir']; ?></p>	
		<ul class="ul-sosmed" style="float: right">
			<li><a class="icon fa fa-facebook" href="" ></a></li>
			<li><a class="icon fa fa-instagram" href=""></a></li>
			<li><a class="icon fa fa-google" href=""></a></li>
		</ul>
	</div>

	<div class="mnframe1 mnframe6">
		<center>
			<span style="border-bottom: solid #FF8C00 2px; font-size: 30px; "><?php echo $pecah6['nama_pendidik']; ?></span><br>
			<img class="circle" src="img/<?php echo $pecah6['foto_pendidik'] ?>">
			<h4>Spesialis : ... </h4>
			<article>
				" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. "
			</article>
		</center>
		<img src="">
		<p class="nomor nomorP"><?php echo $pecah6['pen_terakhir']; ?></p>	
		<ul class="ul-sosmed" style="float: right">
			<li><a class="icon fa fa-facebook" href="" ></a></li>
			<li><a class="icon fa fa-instagram" href=""></a></li>
			<li><a class="icon fa fa-google" href=""></a></li>
		</ul>
	</div>
</div>
<div class="batasBawah"></div>

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