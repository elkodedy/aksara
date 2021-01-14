<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<div class="container-fluid">
	    <div class="row">
			<div class="col-lg-12">
				<h1 style="text-align: center;">Pendaftaran Siswa Baru</h1><hr>
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
		                        <input name="nama" type="text" class="form-control" required placeholder="Masukkan Nama Calon Siswa"> 
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Jenis Kelamin</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <div class="form-control">
									<label class="radio-inline">
			      						<input type="radio" name="gender" value="Laki-laki" required> Laki-laki
			   						</label><br>
			    					<label class="radio-inline">
			     						 <input type="radio" name="gender" value="Perempuan" required> Perempuan
			    					</label>
								</div>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Usia</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="number" min="1" max="20" name="usia" class="form-control" placeholder="Masukkan Usia Calon Siswa" required>
		                        <small class="form-text text-muted">Catatan : Inputan min(1) & max(20)</small>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Nama Ibu</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="nama_ibu" type="text" class="form-control" required placeholder="Masukkan Nama Ibu Calon Siswa">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Alamat</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <textarea name="alamat" type="text" class="form-control" required placeholder="Masukkan Alamat Calon Siswa"></textarea>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Nomor Handphone Orang Tua</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="no_telepon" type="text" class="form-control" required placeholder="Masukkan Nomor Kontak Orang Tua Calon Siswa">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Tanggal Masuk</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="tgl_masuk" type="date" class="form-control" required>
		                    </div>
		                </div>
		        	</div>
			    </div>

			    <div class="card">
			        <div class="card-header">
			            <strong>Akun </strong>
			        </div>
		        	<div class="card-body card-block">
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Username</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="username" type="text" class="form-control" required placeholder="Masukkan Username Calon Siswa">
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Password</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="password" type="password" class="form-control" required placeholder="Masukkan Password Calon Siswa">
		                    </div>
		                </div>
		        	</div>
		        </div>

			    <div class="card"> 
			    	<div class="card-footer">
			            <button name="daftar" class="btn btn-primary btn-sm">
			                <i class="fas fa-user-plus"></i> Tambah
			            </button>
			            <button class="btn btn-danger btn-sm" onclick="back()">
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
			$username = $_POST['username'];
			$password = $_POST['password'];
			$nama = $_POST['nama'];
			$ibu = $_POST['nama_ibu'];
			$gender = $_POST['gender'];
			$usia = $_POST['usia'];
			$tanggal = $_POST['tgl_masuk'];
			$alamat = $_POST['alamat'];
			$telepon = $_POST['no_telepon'];
			$pria = "siswa.png";
			$wanita = "siswi.png";
			
			$ambil = $koneksi -> query("SELECT * FROM siswa WHERE username = '$username'");
            $yangcocok = $ambil -> num_rows;

            if ($yangcocok==1) 
            {
                echo "<script>alert('Pendaftaran Gagal, Nama Atau Password Sudah Digunakan');</script>";
                echo "<script>location='index.php?halaman=tambah_pembimbing';</script>";
            }
            else
            {
                if ($gender == "Laki-laki") 
                {
                	$koneksi -> query("INSERT INTO siswa (nama_lengkap,nama_ibu,jenis_kelamin,usia,tgl_masuk,username,password,alamat,kontak,foto) VALUES ('$nama','$ibu','$gender','$usia','$tanggal','$username','$password','$alamat','$telepon','$pria')");
                }
               	else
               	{
               		$koneksi -> query("INSERT INTO siswa (nama_lengkap,nama_ibu,jenis_kelamin,usia,tgl_masuk,username,password,alamat,kontak,foto) VALUES ('$nama','$ibu','$gender','$usia','$tanggal','$username','$password','$alamat','$telepon','$wanita')");
               	}

                echo "<script>alert('Pendaftaran Berhasil');</script>";
                echo "<script>location='index.php?halaman=siswa';</script>";
            }
			
		}

	?>

<script type="text/javascript">
	function back(){
		history.back();
	}
</script>

