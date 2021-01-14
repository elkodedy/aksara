<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<div class="container-fluid">
	    <div class="row">
			<div class="col-lg-12">
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
		                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Calon" required>
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
		                        <input name="jabatan" type="text" class="form-control" required placeholder="Masukkan Jabatan Calon">
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
		                        <label class=" form-control-label">Masa Kerja (Tahun)</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="number" min="1" max="20" name="ms_kerja" class="form-control" placeholder="Masa Kerja Calon " required>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Alamat Lengkap</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <textarea name="alamat" type="text" class="form-control" required placeholder="Masukkan Alamat Calon"></textarea>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Nomor Handphone</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="no_telepon" type="text" class="form-control" placeholder="Masukkan Nomor Handphone Calon" required>
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
			$ms_kerja = $_POST['ms_kerja'];
			$alamat = $_POST['alamat'];
			$telepon = $_POST['no_telepon'];
			$pria = "mrTeacher.png";
			$wanita = "mrsTeacher.png";
			
			$ambil = $koneksi -> query("SELECT * FROM tenaga_kependidikan WHERE username = '$username'");
            $yangcocok = $ambil -> num_rows;

            if ($yangcocok==1) 
            {
                echo "<script>alert('Pendaftaran Gagal, Username Sudah Digunakan');</script>";
                echo "<script>location='index.php?halaman=tambah_tenaga_kependidikan';</script>";
            }
            else
            {

            	if ($gender == "Laki-laki") 
    	        {
                	$koneksi -> query("INSERT INTO tenaga_kependidikan (username,password,nama_lengkap,jenis_kelamin,jabatan,pddk_terakhir,masa_kerja,alamat,no_telepon,foto) VALUES ('$username','$password','$nama','$gender','$jabatan','$pend','$ms_kerja','$alamat','$telepon','$pria')");
                }
               	else
               	{
               		$koneksi -> query("INSERT INTO tenaga_kependidikan (username,password,nama_lengkap,jenis_kelamin,jabatan,pddk_terakhir,masa_kerja,alamat,no_telepon,foto) VALUES ('$username','$password','$nama','$gender','$jabatan','$pend','$ms_kerja','$alamat','$telepon','$wanita')");
               	}

                echo "<script>alert('Pendaftaran Berhasil');</script>";
                echo "<script>location='index.php?halaman=tenaga_kependidikan';</script>";
            }
			
		}

	?>

<script type="text/javascript">
	function back(){
		history.back();
	}
</script>