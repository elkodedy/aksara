<?php  

	$ambil = $koneksi -> query("SELECT * FROM siswa WHERE id_siswa = '$_GET[id]'");
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

<h2 style="text-align: center;"><?php echo $pecah['nama_lengkap'] ?></h2><br>
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<div class="container-fluid">
	    <div class="row">
			<div class="col-lg-12">
				<div class="card">
			        <div class="card-header">
			            <strong>Akun </strong>
			        </div>
		        	<div class="card-body card-block">
		        		<img src="../img/<?php echo $pecah['foto'] ?>" class="mx-auto d-block" style="width:20%"><br>
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
		                        <input name="nama" type="text" class="form-control" value="<?php echo $pecah["nama_lengkap"]; ?>" <?php echo $r; ?>>
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
		                        <label for="email-input" class=" form-control-label">Usia</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="usia" type="text" class="form-control" value="<?php echo $pecah["usia"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Nama Ibu</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="nama_ibu" type="text" class="form-control" value="<?php echo $pecah["nama_ibu"]; ?>" <?php echo $r; ?>>
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
		                        <label for="email-input" class=" form-control-label">Nomor Handphone Orang Tua</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="no_telepon" type="text" class="form-control" value="<?php echo $pecah["kontak"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="email-input" class=" form-control-label">Tanggal Masuk</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input name="tgl_masuk" type="text" class="form-control" value="<?php echo $pecah["tgl_masuk"]; ?>"<?php echo $r; ?>>
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
		$koneksi -> query("UPDATE siswa SET username = '$_POST[username]' , password = '$_POST[password]' , nama_lengkap = '$_POST[nama]' , nama_ibu = '$_POST[nama_ibu]' , jenis_kelamin = '$_POST[jenis_kelamin]' , usia = '$_POST[usia]' , tgl_masuk = '$_POST[tgl_masuk]' , alamat = '$_POST[alamat]' , kontak = '$_POST[no_telepon]' WHERE id_siswa = '$_GET[id]'");

		echo "<script>alert('Perubahan BERHASIL');</script>";
		echo "<script>location='index.php?halaman=siswa';</script>";
	}

?>


<!-- LEMBAR PENILAIAN -->
<div class="row">
    <div class="col-lg-12"> 
        <!-- USER DATA-->
        <div class="user-data m-b-30">
            <h2 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>LEMBAR PENILAIAN
            </h2>
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" style="width: 50%;margin-left: 5%;">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class="form-control-label">Tanggal</label>
                    </div>
                    <div class="col-12 col-md-9">
						<select class="form-control" name="tanggal" required>
							<option value="--- PILIH ---">--- PILIH ---</option>
		                	<?php
		                		$ambil = $koneksi -> query("
		                			SELECT pt.tanggal
									FROM program_aba pr, peserta pt, jadwal_terapi jt, pendidik pk
									WHERE pr.id_program=jt.id_program and pt.id_jadwal=jt.id_jadwal and pt.id_siswa='$_GET[id]' and pr.nama_program='Perilaku Dan Kontak Mata' and pk.id_pendidik=jt.id_pendidik
									GROUP BY pt.tanggal
		                		");
		                	?>
		                	<?php 
								while($pecah = $ambil -> fetch_assoc()){ ?>
									<option value="<?php echo $pecah['tanggal'] ?>"><?php echo $pecah['tanggal'] ?></option>
							<?php } ?>
						</select>
                    </div>
	                <button type="submit" class="btn btn-primary btn-sm" style="margin-left: 28.5%; margin-top: 3%;" name="submit">
		                <i class="fa fa-dot-circle-o"></i> Submit
		            </button>
                </div>
            </form>
            <?php 
            	$tanggal='0000-00-00';
            	if (isset($_POST['submit'])){
					$tanggal = $_POST['tanggal']; ?>
					<?php if($tanggal != '--- PILIH ---'){ ?>
		            <form action="" method="post" class="form-horizontal lembar">
			            <div class="table-responsive table table-responsive-sm">
			                <table class="table table-striped table-earninh table-bordered">
			                	<tbody>
			                		<tr>
			                			<?php
					                		$ambil = $koneksi -> query("
					                			SELECT pk.nama_pendidik, pt.tanggal
												FROM program_aba pr, peserta pt, jadwal_terapi jt, pendidik pk
												WHERE pr.id_program=jt.id_program and pt.id_jadwal=jt.id_jadwal and pt.id_siswa='$_GET[id]' and pr.nama_program='Perilaku Dan Kontak Mata' and pk.id_pendidik=jt.id_pendidik and pt.tanggal='$tanggal'
												GROUP BY pk.nama_pendidik, pt.tanggal
					                		");
					                		$pecah = $ambil -> fetch_assoc();
					                	?>
					                	<td colspan="3"><h4>Tanggal</h4></td>
			                			<td colspan="3"><h4><strong>Terapis</strong></h4></td>
			                		</tr>
			                		<tr>
			                			<td colspan="3"><strong><?php echo $pecah['tanggal'] ?></td>
			                			<td colspan="3"><strong><?php echo $pecah['nama_pendidik']; ?></strong></td>
			                		</tr>
			                			<td colspan="6"></td>
			                		<tr>
			                			<td colspan="6"><h4><strong>Perilaku Dan Kontak Mata</strong></h4></td>
			                		</tr>
				                	<?php $nomor=1 ?>
				                	<?php 
				                		$ambil = $koneksi -> query("
				                			SELECT pr.sub_sub_program, pt.Latihan1, pt.Latihan2,pt.Latihan3,pt.hasil
											FROM program_aba pr, peserta pt, jadwal_terapi jt
											WHERE pr.id_program=jt.id_program and pt.id_jadwal=jt.id_jadwal and pt.id_siswa='$_GET[id]' and pr.nama_program='Perilaku Dan Kontak Mata' and pt.tanggal='$tanggal'
				                		");
				                	?>
				                	<?php 
										while($pecah = $ambil -> fetch_assoc()){ ?>
											<tr>
												<td><?php echo $nomor ?></td>
												<td><?php echo $pecah['sub_sub_program'] ?></td>
												<td colspan="4"><?php echo $pecah['hasil'] ?></td>
											</tr>
									<?php $nomor++; ?>
									<?php } ?>
									<!-- --- -->
			                		<tr>
			                			<td colspan="6"><h4><strong>Program SI</strong></h4></td>
			                		</tr>
				                	<?php $nomor=1 ?>
				                	<?php 
				                		$ambil = $koneksi -> query("
				                			SELECT pr.sub_sub_program, pt.Latihan1, pt.Latihan2,pt.Latihan3,pt.hasil
											FROM program_aba pr, peserta pt, jadwal_terapi jt
											WHERE pr.id_program=jt.id_program and pt.id_jadwal=jt.id_jadwal and pt.id_siswa='$_GET[id]' and pr.nama_program='Program SI' and pt.tanggal='$tanggal'
				                		");
				                	?>
				                	<?php 
										while($pecah = $ambil -> fetch_assoc()){ ?>
											<tr>
												<td><?php echo $nomor ?></td>
												<td colspan="5"><?php echo $pecah['sub_sub_program'] ?></td>
											</tr>
									<?php $nomor++; ?>
									<?php } ?>
									<!-- --- -->	
									<?php 
				                		$ambil = $koneksi -> query("
				                			SELECT pr.nama_program
											FROM program_aba pr, peserta pt, jadwal_terapi jt
											WHERE pr.id_program=jt.id_program and pt.id_jadwal=jt.id_jadwal and pt.id_siswa='$_GET[id]' and pr.nama_program != 'Perilaku Dan Kontak Mata' and pr.nama_program != 'Program SI' and pt.tanggal='$tanggal'
											GROUP BY pr.nama_program
											ORDER BY pr.id_program
				                		");
				                	?>
				                	<?php 
										while($pecah = $ambil -> fetch_assoc()){ ?>
											<tr>
												<td><h4><strong>No</strong></h4></td>
												<td width="30%">
													<center>
														<h4><strong>Program<br><?php echo $pecah['nama_program'] ?></strong></h4>
													</center>
												</td>
												<td><center><h4><strong>Latihan 1</strong></h4></center></td>
												<td><center><h4><strong>Latihan 2</strong></h4></center></td>
												<td><center><h4><strong>Latihan 3</strong></h4></center></td>
												<td>
													<center>
														<h4>Hasil</h4>
														<strong>Tercapai/Tidak<br>
														Belum Konsisten</strong>
													</center>
												</td>
											</tr>
						                	<?php $nomor1=1 ?>
						                	<?php $nama_program=$pecah['nama_program'] ?>
						                	<?php 
						                		$ambil1 = $koneksi -> query("
						                			SELECT pr.sub_program
													FROM program_aba pr, peserta pt, jadwal_terapi jt
													WHERE pr.id_program=jt.id_program and pt.id_jadwal=jt.id_jadwal and pt.id_siswa='$_GET[id]' and pr.nama_program='$nama_program' and pt.tanggal='$tanggal'
													GROUP BY pr.sub_program
													ORDER BY pr.id_program
						                		");
						                	?>
						                	<?php while($pecah1 = $ambil1 -> fetch_assoc()){ ?>
												<tr>
													<td> <strong><?php echo $nomor1 ?></strong></td>
													<td> <strong><?php echo $pecah1['sub_program'] ?></strong></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<?php $nomor1++; ?>
							                	<?php $sub_program=$pecah1['sub_program'] ?>
							                	<?php 
							                		$ambil2 = $koneksi -> query("
							                			SELECT pr.sub_sub_program, pt.latihan1, pt.latihan2,pt.latihan3,pt.hasil
														FROM program_aba pr, peserta pt, jadwal_terapi jt
														WHERE pr.id_program=jt.id_program and pt.id_jadwal=jt.id_jadwal and pt.id_siswa='$_GET[id]' and pr.sub_program='$sub_program' and pt.tanggal='$tanggal'
														GROUP BY pr.sub_sub_program
														ORDER BY pr.id_program
							                		");
							                	?>
												<?php while($pecah2 = $ambil2 -> fetch_assoc()){ ?>
													<tr>
														<td></td>
														<td><?php echo $pecah2['sub_sub_program'] ?></td>
														<td><center><?php echo $pecah2['latihan1']; ?></center></td>
														<td><center><?php echo $pecah2['latihan2']; ?></center></td>
														<td><center><?php echo $pecah2['latihan3']; ?></center></td>
														<td><center><?php echo $pecah2['hasil']; ?></center></td>
													</tr>
												<?php } ?>
											<?php } ?>
									<?php } ?>
			                	</tbody>
			                </table>
			            </div>
		            </form>
					<?php } ?>
            	<?php }
            ?>
        </div>
    </div>
</div>
