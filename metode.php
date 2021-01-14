<div class="batasNav"></div>
<a style="text-decoration: none;" class="tback" href="index.php#fasilitas">&#8592; kembali</a>
<h1 class="fontCinzel align-center font-60">Metode Terapi</h1>
<div class="metode-parent">
	<img class="metode-1 metode" src="img/metode/sensor.png">
	<img class="metode-2 metode" src="img/metode/biomedis.png">
	<img class="metode-3 metode" src="img/metode/wicara.png">
	<img class="metode-4 metode" src="img/metode/terapi.png">
	<img class="metode-5 metode" src="img/metode/ot1.png">	
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