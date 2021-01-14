<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<div class="container-fluid">
	    <div class="row">
			<div class="col-lg-12">
				<h1 style="text-align: center;">Tambah Video Baru</h1><hr>
				<div class="card">
			        <div class="card-header">
			            <strong>Video</strong>
			        </div>
		        	<div class="card-body card-block">
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class="form-control-label">Judul</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="judul_video" type="text" class="form-control" value="">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Link</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="link_video" type="text" class="form-control" value="">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Keterangan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                    	<textarea name="ket_video" type="text" class="form-control" style="height: 200px;"></textarea>
		                    </div>
		                </div>
		        	</div>
		        </div>

			    <div class="card"> 
			    	<div class="card-footer">
			            <button name="daftar" class="btn btn-primary btn-sm">
			                <i class="fas fa-user-plus"></i> Tambah
			            </button>
			            <button name="batal" class="btn btn-danger btn-sm" onclick="back()">
			                <i class="fa fa-times"></i> Batal
			            </button>
		        	</div>
			    </div>
			</div>
		</div>
	</div>
</form>

	<!-- Script PHP -->

	<?php  

		if (isset($_POST['daftar'])) 
		{
			$judul = $_POST['judul_video'];
			$link = $_POST['link_video'];
			$ket = $_POST['ket_video'];
			$tgl = date("Y-m-d");
			
			$ambil = $koneksi -> query("SELECT * FROM video_youtube WHERE link_video = '$link'");
            $yangcocok = $ambil -> num_rows;

            if ($yangcocok==1) 
            {
                echo "<script>alert('Pendaftaran Gagal, Link Sudah Digunakan');</script>";
                echo "<script>location='index.php?halaman=tambah_video';</script>";
            }
            else
            {
               		$koneksi -> query("INSERT INTO video_youtube (judul_video,link_video,ket_video,tgl_uploadvideo) VALUES ('$judul','$link','$ket','$tgl')");

                echo "<script>alert('Pendaftaran Berhasil');</script>";
                echo "<script>location='index.php?halaman=video';</script>";
            }
			
		}

	?>

<script type="text/javascript">
	function back(){
		history.back();
	}
</script>	
