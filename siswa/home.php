<?php  

	if (isset($_POST['ubahh'])) 
	{
		$r = "required";
	}
	else
	{
		$r = "readonly";
	}

?>

<div class="container-fluid">
    <div class="row">
		<div class="col-lg-12">
			<div class="card">
		        <div class="card-header">
		            <strong>Akun</strong>
		        </div>
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
			        <div class="card-body card-block">
		        		<img src="../img/<?php echo $pecah['foto'] ?>" class="mx-auto d-block" style="width:20%"	><br>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Username</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="username" type="text" class="form-control" value="<?php echo $pecah["username"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Password</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="password" type="text" class="form-control" value="<?php echo $pecah["password"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		            </div>
				    <div class="card-footer">
			            <button name="ubahh" class="btn btn-primary btn-sm">
			                <i class="fas fa-wrench"></i> Ubah
			            </button>
			            <button name="simpan" class="btn btn-success btn-sm">
			                <i class="fa fa-dot-circle-o"></i> Simpan
			            </button>
			            <button name="" class="btn btn-danger btn-sm">
			                <i class="fa fa-ban"></i> Reset
			            </button>
		        	</div>
	        	</form>
		    </div>

		    <?php 

		    	if (isset($_POST['simpan'])) 
		    	{
		    		$koneksi -> query("UPDATE siswa SET username = '$_POST[username]' , password = '$_POST[password]' WHERE id_siswa = $id");

					echo "<script>alert('Perubahan BERHASIL');</script>";
					echo "<script>location='index.php';</script>";
		    	}

		    ?>

		    <div class="card">
		        <div class="card-header">
		            <strong>Biodata</strong>
		        </div>
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		        	<div class="card-body card-block">
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Nama</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["nama_lengkap"]; ?>">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Nama Ibu</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["nama_ibu"]; ?>">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Jenis Kelamin</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["jenis_kelamin"]; ?>">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Usia</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["usia"]; ?>">
		                    </div>
	                    </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Tanggal Masuk</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["tgl_masuk"]; ?>">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Alamat</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["alamat"]; ?>">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Kontak</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["kontak"]; ?>">
		                    </div>
		                </div>
		        	</div>
	        	</form>
		    </div>
		</div>
	</div>
</div>
