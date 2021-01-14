<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

	<div class="row">
	    <div class="col-lg-12">
	        <!-- USER DATA-->
	        <div class="user-data m-b-30">
	            <h2 class="title-3 m-b-30">
	                <i class="zmdi zmdi-account-calendar"></i>Tambah Siswa
	            </h2>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="text-input" class="form-control-label" style="margin-left: 10%">
	                    	Pilih Siswa
	                    </label>
	                </div>
	                <div class="col-9 col-md-6">
						<select class="form-control" name="id_siswa" required>
							<option>--- PILIH ---</option>
		                	<?php
		                		$ambil = $koneksi -> query("
									SELECT id_siswa, nama_lengkap
									FROM siswa s
									WHERE id_siswa
					                GROUP BY id_siswa
		                		");
		                	?>
		                	<?php 
								while($pecah = $ambil -> fetch_assoc()){ ?>
									<option value="<?php echo $pecah['id_siswa'] ?>">
										<?php echo $pecah['nama_lengkap'];?>
									</option>
							<?php } ?>
						</select>
	                </div>
	                <button type="submit" class="btn btn-primary btn-sm" style="margin-left: 28.5%; margin-top: 3%;" name="submit">
		                <i class="fa fa-dot-circle-o"></i> Submit
		            </button>
	            </div>
	        </div>
	    </div>
	</div>

<!-- LEMBAR PENILAIAN -->
	<div class="row">
	    <div class="col-lg-12"> 
			<?php $jadwal ?>
			<?php $num = 0 ?>
		    <?php if(isset($_POST['submit'])) 
		    { 
		    	$id_siswa = $_POST['id_siswa']; 
			    $_SESSION["id_sis"] = $id_siswa;
		    	if ($id_siswa != '--- PILIH ---') { ?>
		    		<?php 
		    			$ambil = $koneksi -> query("
		    				SELECT *
		    				FROM siswa
		    				WHERE id_siswa='$id_siswa';
		    			");
		    			$pecah = $ambil -> fetch_assoc();
		    		?>

		        	<!-- ------------------------------------------------------------------------------ -->

			        <div class="user-data m-b-30">
			            <h2 class="title-3 m-b-30">
			                <i class="zmdi zmdi-account-calendar"></i><?php echo $pecah['nama_lengkap'] ?>
			            </h2>
			        	<div class="table-responsive table table-responsive-sm">
			        		<table class="table table-earninh table-bordered">
			        			<tbody>
			        				<tr>
					                	<td colspan="2">
					                		<h4>Tanggal</h4>
					                	</td>
					                	<td colspan="4">
					                		<strong><input type="date" name="tanggal" required></strong>
					                	</td>
				                	</tr>
			                		<tr>
			                			<td colspan="6">
			                				<h4><strong>Perilaku Dan Kontak Mata</strong></h4>
			                			</td>
			                		</tr>

			                		<?php $nomor=1 ?>
				                	<?php
				                		$ambil = $koneksi -> query("
					                		SELECT jt.id_jadwal, pr.sub_sub_program
											FROM jadwal_terapi jt, program_aba pr
											WHERE jt.id_pendidik ='$id' and jt.id_program = pr.id_program and pr.nama_program = 'Perilaku Dan Kontak Mata'
											ORDER BY jt.id_jadwal
				                		");
				                	?>
				                	<?php 
										while($pecah = $ambil -> fetch_assoc()){ ?>
											<tr>
												<td><?php echo $nomor ?></td>
												<td><?php echo $pecah['sub_sub_program'] ?></td>
												<td colspan="4">
													<input class="form-control" type="text" name="hasil<?php echo $pecah['id_jadwal'] ?>">
												</td>
											</tr>
									<?php $nomor++; ?>
									<?php } ?>

									<!-- ---------------------------------------------------------------------------- -->
			                		
			                		<tr>
			                			<td colspan="6">
			                				<h4><strong>Program SI</strong></h4>
			                			</td>
			                		</tr>
				                	<?php $nomor=1 ?>
				                	<?php 
				                		$ambil = $koneksi -> query("
							                		SELECT jt.id_jadwal, pr.sub_sub_program
													FROM jadwal_terapi jt, program_aba pr
													WHERE jt.id_pendidik ='$id' and jt.id_program = pr.id_program and pr.nama_program = 'Program SI'
													ORDER BY jt.id_jadwal
				                		");
				                	?>
				                	<?php 
										while($pecah = $ambil -> fetch_assoc()){ ?>
											<tr>
												<td><?php echo $nomor ?></td>
												<td><?php echo $pecah['sub_sub_program'] ?></td>
												<td colspan="4"><input class="form-control" type="text" name="hasil<?php echo $pecah['id_jadwal']; ?>"></td>
											</tr>
									<?php $nomor++; ?>
									<?php } ?>

									<!-- -------------------------------------------------------------------------- -->	

									<?php 
				                		$ambil = $koneksi -> query("
				                			SELECT nama_program
											FROM program_aba
											WHERE nama_program != 'Perilaku Dan Kontak Mata' and nama_program != 'Program SI'
											GROUP BY nama_program
											ORDER BY id_program
				                		");
				                	?>
				                	<?php 
										while($pecah = $ambil -> fetch_assoc()){ ?>
											<tr>
												<td style="padding-top: 4%;">
													<h4><strong>No</strong></h4>
												</td>
												<td width="30%">
													<center>
														<h4 style="padding-top: 4%;">
															<strong>
																Program<br><?php echo $pecah['nama_program'] ?>
															</strong>
														</h4>
													</center>
												</td>
												<td style="padding-top: 4%; width: 12%;">
													<center>
														<h4>
															<strong>Latihan 1</strong>
														</h4>
													</center>
												</td>
												<td style="padding-top: 4%; width: 12%;">
													<center>
														<h4>
															<strong>Latihan 2</strong>
														</h4>
													</center>
												</td>
												<td style="padding-top: 4%; width: 12%;">
													<center>
														<h4>
															<strong>Latihan 3</strong>
														</h4>
													</center>
												</td>
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
						                			SELECT sub_program
													FROM program_aba
													WHERE nama_program='$nama_program'
													GROUP BY sub_program
													ORDER BY id_program
						                		");
						                	?>
						                	<?php while($pecah1 = $ambil1 -> fetch_assoc()){ ?>
												<tr>
													<td>
														<strong><?php echo $nomor1 ?></strong>
													</td>
													<td>
														<strong><?php echo $pecah1['sub_program'] ?></strong>
													</td>
												</tr>
												<?php $nomor1++; ?>
							                	<?php $sub_program=$pecah1['sub_program'] ?>
							                	<?php $ambil2 = $koneksi -> query("
							                		SELECT jt.id_jadwal, pr.sub_sub_program
													FROM jadwal_terapi jt, program_aba pr
													WHERE jt.id_pendidik ='$id' and jt.id_program = pr.id_program and pr.sub_program = '$sub_program'
													ORDER BY jt.id_jadwal
							                		");
							                ?>

											<?php while($pecah2 = $ambil2 -> fetch_assoc()){ ?>
												<?php $num++; ?>
												<tr>
													<td></td>
													<td>
														<?php echo $pecah2['sub_sub_program'] ?>
													</td>
													<td>
														<input class="form-control" type="" name="latihan1<?php echo $pecah2['id_jadwal']; ?>">
													</td>
													<td>
														<input class="form-control" type="" name="latihan2<?php echo $pecah2['id_jadwal']; ?>">
													</td>
													<td>
														<input class="form-control" type="" name="latihan3<?php echo $pecah2['id_jadwal']; ?>">
													</td>
													<td>
														<input class="form-control" type="" name="hasil<?php echo $pecah2['id_jadwal']; ?>">
													</td>
												</tr>
											<?php } ?>
										<?php } ?>
									<?php } ?>
			        			</tbody>
			        		</table>
			   				<div class="card-footer">
				                <button type="input" class="btn btn-primary btn-sm" style="margin: 2% 0 2% 10%;" name="simpan">
					                <i class="fa fa-dot-circle-o"></i> Simpan
					            </button>
			   				</div>
			        	</div>
			        </div>
		    	<?php } ?>
	    	<?php } ?>	    	
		</div>
	</div>
					            <!--  -->
								<?php if(isset($_POST['simpan'])) { ?>
									<?php $tanggal=$_POST['tanggal']; ?>
									<?php $id_siswa = $_SESSION["id_sis"]; ?>
									<?php 
										echo "<h1>MASASASASASASAASAS</h1>";
										echo $id;
										echo $id_siswa;
									 ?>
									<!--  -->
									<?php
										$ambil = $koneksi -> query("
								    		SELECT jt.id_jadwal, pr.sub_sub_program
											FROM jadwal_terapi jt, program_aba pr
											WHERE jt.id_pendidik ='$id' and jt.id_program = pr.id_program and pr.nama_program = 'Perilaku Dan Kontak Mata'
											ORDER BY jt.id_jadwal
										");
									?>
									<?php 
									while($pecah = $ambil -> fetch_assoc()){ ?>
										<?php $id_jadwal = $pecah['id_jadwal'] ?>
										<?php
								    		$hasila= "hasil".$pecah['id_jadwal'];
								    		$hasilb=$_POST[$hasila];
								    	?>
										<?php
											$koneksi -> query("
												INSERT INTO peserta (id_jadwal, id_siswa, hasil, tanggal)
												VALUES 
													('$id_jadwal', '$id_siswa', '$hasilb', '$tanggal')
											");
										?>
									<?php } ?>
									<!--  -->
									<?php
										$ambil = $koneksi -> query("
								    		SELECT jt.id_jadwal, pr.sub_sub_program
											FROM jadwal_terapi jt, program_aba pr
											WHERE jt.id_pendidik ='$id' and jt.id_program = pr.id_program and pr.nama_program = 'Program SI'
											ORDER BY jt.id_jadwal
										");
									?>
									<?php 
										while($pecah = $ambil -> fetch_assoc()){ ?>
											<?php $id_jadwal = $pecah['id_jadwal'] ?>
											<?php
									    		$hasila= "hasil".$pecah['id_jadwal'];
									    		$hasilb=$_POST[$hasila];
									    	?>
											<?php $id_jadwal= $pecah['id_jadwal'] ?>
											<?php 
							    				$koneksi -> query("
							    					INSERT INTO peserta (id_jadwal, id_siswa, hasil, tanggal)
							    					VALUES 
							    						('$id_jadwal', '$id_siswa', '$hasilb', '$tanggal')
							    				");
											?>
									<?php } ?>

									<!--  -->
									<!--  -->
									<?php
										$ambil = $koneksi -> query("
								    		SELECT jt.id_jadwal, pr.sub_sub_program
											FROM jadwal_terapi jt, program_aba pr
											WHERE jt.id_pendidik ='$id' and jt.id_program = pr.id_program and pr.nama_program != 'Perilaku Dan Kontak Mata' and pr.nama_program != 'Program SI'
											ORDER BY jt.id_jadwal
										");
									?>
									<?php 
									while($pecah = $ambil -> fetch_assoc()){ ?>
										<?php $id_jadwal = $pecah['id_jadwal'] ?>
										<?php 
								    		$latihan1a= "latihan1".$pecah['id_jadwal'];
								    		$latihan1b=$_POST[$latihan1a];
								    		$latihan2a= "latihan2".$pecah['id_jadwal'];
								    		$latihan2b=$_POST[$latihan2a];
								    		$latihan3a= "latihan3".$pecah['id_jadwal'];
								    		$latihan3b=$_POST[$latihan3a];
								    		$hasila= "hasil".$pecah['id_jadwal'];
								    		$hasilb=$_POST[$hasila];
										?>
										<?php 
						    				$koneksi -> query("
						    					INSERT INTO peserta (id_jadwal, id_siswa, latihan1, latihan2, latihan3, hasil, tanggal)
						    					VALUES 
						    						('$id_jadwal', '$id_siswa', '$latihan1b', '$latihan2b', '$latihan3b', '$hasilb', '$tanggal')
						    				");
										?>
									<?php } ?>
									<?php echo "<script>window.alert(\"Data Telah Dimasukkan\")</script>"; ?>
								<?php } ?>
</form>


