<div class="row">
    <div class="col-lg-12">
        <!-- USER DATA-->
        <div class="user-data m-b-30">
            <h2 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>VIDEO
            </h2>
            <div class="table-responsive table">
                <table class="table table-borderless table-striped table-earninh">
                    <thead>
                        <tr>
                            <th>No</th>
							<th>Video</th>
							<th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $nomor=1; ?>
					<?php $ambil = $koneksi -> query("SELECT * FROM video_youtube"); ?>
					<?php while($pecah = $ambil -> fetch_assoc()) { ?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td width="50%">
								<strong><?php echo $pecah['judul_video']; ?></strong><br>
								<iframe width="100%" height="300px" src="<?php echo $pecah['link_video'].'?rel=0' ?>"></iframe><br>
								Full Screen On Youtube : <a href="<?php echo $pecah['link_video'] ?>" class="btn btn-danger"> YouTube <i class="fab fa-youtube"></i></a><br>
								<a href="index.php?halaman=detail_video&id=<?php echo $pecah['id_video']; ?>" class="btn btn-info">
									Detail
								</a>
								<a href="index.php?halaman=hapus_video&id=<?php echo $pecah['id_video']; ?>" class="btn btn-danger">
                                    Hapus
                                </a>
							</td>
							<td>
								<br>
								<?php echo $pecah['ket_video']; ?>
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
<a href="index.php?halaman=tambah_video" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Tambah </a>


        <!-- END USER DATA-->