<div class="row">
    <div class="col-lg-12">
        <!-- USER DATA-->
        <div class="user-data m-b-30">
            <h2 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>PEMBIMBING
            </h2>
            <div class="table-responsive table">
                <table class="table table-borderless table-striped table-earninh">
                    <thead>
                        <tr>
                            <th>No</th>
							<th>Nama Pendidik</th>
							<th>Jenis Kelamin</th>
							<th>Jabatan</th>
							<th>Kontak</th>
							<th></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $nomor=1; ?>
					<?php $ambil = $koneksi -> query("SELECT * FROM pembimbing"); ?>
					<?php while($pecah = $ambil -> fetch_assoc()) { ?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td><?php echo $pecah['nama_lengkap']; ?></td>
							<td><?php echo $pecah['jenis_kelamin']; ?></td>
							<td><?php echo $pecah['jabatan']; ?></td>
							<td><?php echo $pecah['no_telepon']; ?></td>
							<td>
								<a href="index.php?halaman=detail_pembimbing&id=<?php echo $pecah['id_pembimbing']; ?>" class="btn btn-info">Detail</a>
                                <a href="index.php?halaman=hapus_pembimbing&id=<?php echo $pecah['id_pembimbing']; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
					<?php $nomor++; ?>
					<?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<a href="index.php?halaman=tambah_pembimbing" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Tambah</a>

        <!-- END USER DATA-->