<?php  

	if (isset($_POST['ubah'])) 
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
		            <strong>Akun </strong>
		        </div>
		        <form method="post" enctype="multipart/form-data" class="form-horizontal">
		        	<div class="card-body card-block">
		        		<img src="../img/<?php echo $pecah['foto_pendidik'] ?>" class="mx-auto d-block" style="width:20%"><br>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Username</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="username" type="text" class="form-control" <?php echo $r; ?> value="<?php echo $pecah["username_pendidik"]; ?>">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Password</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="password" type="text" class="form-control" <?php echo $r; ?> value="<?php echo $pecah["password_pendidik"]; ?>">
		                    </div>
		                </div>
			        </div>
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
	        	</form>
		    </div>

		    <?php  

		    	if (isset($_POST['simpan'])) 
		    	{
		    		$koneksi -> query("UPDATE pendidik SET username_pendidik = '$_POST[username]' , password_pendidik = '$_POST[password]' WHERE id_pendidik = $id");

					echo "<script>alert('Perubahan BERHASIL');</script>";
                    echo "<script> location='index.php'; </script>";
		    	}

		    ?>

		    <div class="card">
		        <div class="card-header">
		            <strong>Biodata </strong>
		        </div>
		        <div class="card-body card-block">
		            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Nama</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["nama_pendidik"]; ?>">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Jenis Kelamin</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="email" class="form-control" readonly value="<?php echo $pecah["jenis_kelamin"]; ?>">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Jabatan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["jabatan"]; ?>">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Pendidikan Terakhir</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["pen_terakhir"]; ?>">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Masa Kerja</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["masa_kerja"]; ?>">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Alamat</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <textarea type="text" class="form-control" readonly><?php echo $pecah["alamat"]; ?></textarea>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Nomor Handphone</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" readonly value="<?php echo $pecah["no_telepon"]; ?>">
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>
		</div>
	</div>
</div>
