<div class="row">
    <div class="col-lg-12">
        <!-- USER DATA-->
        <div class="user-data m-b-30">
            <h2 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>SISWA
            </h2>
            <div class="table-responsive table">
                <table class="table table-borderless table-striped table-earninh">
                    <thead>
                        <tr>
                            <th>No</th>
							<th>Nama Siswa</th>
							<th>Nama Ibu</th>
							<th>Jenis Kelamin</th>
							<th>Usia</th>
							<th>Tgl Masuk</th>
							<th></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $nomor=1; ?>
					<?php $ambil = $koneksi -> query("SELECT * FROM siswa"); ?>
					<?php while($pecah = $ambil -> fetch_assoc()) { ?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td><?php echo $pecah['nama_lengkap']; ?></td>
							<td><?php echo $pecah['nama_ibu']; ?></td>
							<td><?php echo $pecah['jenis_kelamin']; ?></td>
							<td><?php echo $pecah['usia']; ?></td>
							<td><?php echo $pecah['tgl_masuk']; ?></td>
							<td>
								<a href="index.php?halaman=detail_siswa&id=<?php echo $pecah['id_siswa']; ?>" class="btn btn-info">
									Detail
								</a>
								<a href="index.php?halaman=hapus_siswa&id=<?php echo $pecah['id_siswa']; ?>" class="btn btn-danger" onclick="return  confirm('Yakin Ingin Menghapus <?php echo $pecah['id_siswa']; ?>')">
                                    Hapus
                                </a>
							</td>
						</tr>
					<?php $nomor++; ?>
					<?php } ?>
				</tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<a href="index.php?halaman=tambah_siswa" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Tambah</a>


        <!-- END USER DATA-->