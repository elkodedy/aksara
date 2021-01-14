<div class="batasNav"></div>
<a style="text-decoration: none;" class="tback" href="index.php#fasilitas">&#8592; kembali</a>
<h1 class="fontCinzel align-center font-60">Fasilitas</h1>
<section class="frame">
	<div class="img1"  >
		<div class="tf1" >I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
		</div>
	</div>
	<div class="img2">
		<div class="tf2">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page
		</div>
	</div>
	<div class="img3" >
		<div class="tf3">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
		</div>
	</div>
	<div class="img4" >
		<div class="tf4">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
		</div>
	</div>
	<div class="img5"">
		<div class="tf5" >I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
		</div>
	</div>
	<div class="img6" >
		<div class="tf6">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
		</div>
	</div>
</section>

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