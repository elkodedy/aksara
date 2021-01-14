<?php  

	$ambil = $koneksi -> query("SELECT * FROM video_youtube WHERE id_video = '$_GET[id]'");
	$pecah = $ambil -> fetch_assoc();

	if (isset($_POST['ubah'])) 
	{
		$r = "required";
	}
	else
	{
		$r = "readonly";
	}

?>

<h2 style="text-align: center;">Detail Video</h2><br>
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<div class="container-fluid">
	    <div class="row">
			<div class="col-lg-12">
				<div class="card">
			        <div class="card-header">
			            <strong><?php echo $pecah['judul_video'] ?></strong>
			        </div>
		        	<div class="card-body card-block">
		        		<iframe width="80%" height="300px" src="<?php echo $pecah['link_video'] ?>" class='mx-auto d-block' style="margin-bottom: 30px;"></iframe>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class="form-control-label">Judul</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="judul_video" type="text" class="form-control" value="<?php echo $pecah["judul_video"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Link</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="link_video" type="text" class="form-control" value="<?php echo $pecah["link_video"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Keterangan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                    	<textarea name="ket_video" type="text" class="form-control"<?php echo $r; ?> style="height: 200px;"><?php echo $pecah["ket_video"]; ?></textarea>
		                    </div>
		                </div>
		        	</div>
		        </div>

			    <div class="card"> 
			    	<div class="card-footer">
			            <button name="ubah" class="btn btn-primary btn-sm">
			                <i class="fas fa-wrench"></i> Ubah
			            </button>
			            <button name="simpan" class="btn btn-success btn-sm">
			                <i class="fa fa-dot-circle-o"></i> Simpan
			            </button>
			            <button name="" class="btn btn-danger btn-sm">
			                <i class="fa fa-ban"></i> Reset
			            </button>
		        	</div>
			    </div>
			</div>
		</div>
	</div>
</form>

<?php 

	if (isset($_POST['simpan'])) 
	{
		$koneksi -> query("UPDATE video_youtube SET judul_video = '$_POST[judul_video]' , link_video = '$_POST[link_video]' , ket_video = '$_POST[ket_video]' WHERE id_video = '$_GET[id]'");

		echo "<script>alert('Perubahan BERHASIL');</script>";
		echo "<script>location='index.php?halaman=video';</script>";
	}

?>
