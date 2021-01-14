<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<div class="container-fluid">
	    <div class="row">
			<div class="col-lg-12">
				<h1 style="text-align: center;">Tambah Struktur Lembaga</h1><hr>
			    <div class="card">
			        <div class="card-header">
			            <strong>Biodata </strong>
			        </div>
		        	<div class="card-body card-block">
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Nama Lengkap</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Calon" required>
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
		                        <label for="email-input" class=" form-control-label">Jabatan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <select class="form-control" name="jabatan" required>
									<option>--- PILIH ---</option>
									<option value="Pimpinan">Pimpinan</option>
									<option value="Sekretaris">Sekretaris</option>
									<option value="Bendahara">Bendahara</option>	
									<option value="Tenaga Ahli">Tenaga Ahli</option>
									<option value="Tenaga Pendidik">Tenaga Pendidik</option>
								</select>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Pendidikan Terakhir</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <div class="form-control">
									<label class="radio-inline">
			      						<input type="radio" name="pend" value="SMA" required> SMA
			   						</label><br>
			    					<label class="radio-inline">
			     						 <input type="radio" name="pend" value="D3" required> D3
			    					</label><br>
			    					<label class="radio-inline">
			      						<input type="radio" name="pend" value="S1 (Sarjana)" required> S1 (Sarjana)
			   						</label><br>
			    					<label class="radio-inline">
			     						 <input type="radio" name="pend" value="S2 (Magister)" required> S2 (Magister)
			    					</label>
								</div>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Alamat Lengkap</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <textarea class="form-control" placeholder="Masukkan Alamat Calon" name="alamat" required></textarea>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Nomor Handphone</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon Calon" required>
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
		                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username Calon" required>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Password</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password Calon" required>
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
			$nama = $_POST['nama'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$gender = $_POST['gender'];
			$jabatan = $_POST['jabatan'];
			$pend = $_POST['pend'];
			$alamat = $_POST['alamat'];
			$telepon = $_POST['telepon'];
			$pria = "mrTeacher.png";
			$wanita = "mrsTeacher.png";
			
			$ambil = $koneksi -> query("SELECT * FROM struktur_lembaga WHERE nama = '$nama' ");
            $yangcocok = $ambil -> num_rows;

            if ($yangcocok==1) 
            {
                echo "<script>alert('Pendaftaran Gagal, Nama Sudah Digunakan');</script>";
                echo "<script>location='index.php?halaman=tambah_struktur_lembaga';</script>";
            }
            else
            {
            	if ($gender == "Laki-laki") 
                {
                	$koneksi -> query("INSERT INTO struktur_lembaga (username,password,nama_lengkap,jenis_kelamin,jabatan,pddk_terakhir,alamat,no_telepon,foto) VALUES ('$username','$password','$nama','$gender','$jabatan','$pend','$alamat','$telepon','$pria')");

                }
               	else
               	{
               		$koneksi -> query("INSERT INTO struktur_lembaga (username,password,nama_lengkap,jenis_kelamin,jabatan,pddk_terakhir,alamat,no_telepon,foto) VALUES ('$username','$password','$nama','$gender','$jabatan','$pend','$alamat','$telepon','$wanita')");

               	}

                echo "<script>alert('Pendaftaran Berhasil');</script>";
                echo "<script>location='index.php?halaman=struktur_lembaga';</script>";
            }
		}
	?>

<script type="text/javascript">
	function back(){
		history.back();
	}
</script>