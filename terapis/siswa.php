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
							<th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $nomor=1; ?>
					<?php $ambil = $koneksi -> query("
						SELECT s.id_siswa, s.nama_lengkap, s.nama_ibu, s.jenis_kelamin, s.usia, s.tgl_masuk
						FROM siswa s, peserta ps, jadwal_terapi jt
						WHERE s.id_siswa=ps.id_siswa and ps.id_jadwal=jt.id_jadwal and jt.id_pendidik='$id'
		                GROUP BY s.nama_lengkap");
		            ?>
					<?php while($pecah = $ambil -> fetch_assoc()) { ?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td><?php echo $pecah['nama_lengkap']; ?></td>
							<td><?php echo $pecah['nama_ibu']; ?></td>
							<td><?php echo $pecah['jenis_kelamin']; ?></td>
							<td><?php echo $pecah['usia']; ?></td>
							<td><?php echo $pecah['tgl_masuk']; ?></td>
							<td>
								<a href="index.php?halaman=detail_siswa&id=<?php echo $pecah['id_siswa']; ?>" class="btn btn-info">Detail</a>
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


        <!-- END USER DATA-->