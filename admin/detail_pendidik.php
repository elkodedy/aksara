<?php  

	$ambil = $koneksi -> query("SELECT * FROM pendidik WHERE id_pendidik = '$_GET[id]'");
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

<h2 style="text-align: center;"><?php echo $pecah['nama_pendidik'] ?></h2><br>
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<div class="container-fluid">
	    <div class="row">
			<div class="col-lg-12">
				<div class="card">
			        <div class="card-header">
			            <strong>Akun </strong>
			        </div>
		        	<div class="card-body card-block">
		        		<img src="../img/<?php echo $pecah['foto_pendidik'] ?>" class="mx-auto d-block" style="width:20%"><br>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Username</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="username" type="text" class="form-control" value="<?php echo $pecah["username_pendidik"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Password</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="password" type="text" class="form-control" value="<?php echo $pecah["password_pendidik"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		        	</div>
		        </div>

			    <div class="card">
			        <div class="card-header">
			            <strong>Biodata </strong>
			        </div>
		        	<div class="card-body card-block">
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Nama</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="nama" type="text" class="form-control" value="<?php echo $pecah["nama_pendidik"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Jenis Kelamin</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="jenis_kelamin" type="text" class="form-control" value="<?php echo $pecah["jenis_kelamin"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Jabatan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="jabatan" type="text" class="form-control" value="<?php echo $pecah["jabatan"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Pendidikan Terakhir</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="pen_terakhir" type="text" class="form-control" value="<?php echo $pecah["pen_terakhir"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Masa Kerja</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="masa_kerja" type="text" class="form-control" value="<?php echo $pecah["masa_kerja"]," Tahun"; ?>"<?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Alamat</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <textarea name="alamat" type="text" class="form-control" <?php echo $r; ?>><?php echo $pecah["alamat"]; ?></textarea>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Nomor Handphone</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="no_telepon" type="text" class="form-control" value="<?php echo $pecah["no_telepon"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Foto</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                    	<input type="file" name="ganti_foto" class="form-control">
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
		$koneksi -> query("UPDATE pendidik SET username_pendidik = '$_POST[username]' , password_pendidik = '$_POST[password]' , nama_pendidik = '$_POST[nama]' , jenis_kelamin = '$_POST[jenis_kelamin]' , jabatan = '$_POST[jabatan]' , pen_terakhir = '$_POST[pen_terakhir]' , masa_kerja = '$_POST[masa_kerja]' , alamat = '$_POST[alamat]' , no_telepon = '$_POST[no_telepon]' WHERE id_pendidik = '$_GET[id]'");

		echo "<script>alert('Perubahan BERHASIL');</script>";
		echo "<script>location='index.php?halaman=tenaga_pendidik';</script>";
	}

?>