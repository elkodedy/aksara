<?php 

	$ambil = $koneksi -> query("SELECT * FROM profil_lembaga"); 
	$pecah = $ambil -> fetch_assoc();

	if (isset($_POST['ubah'])) 
	{
		$r = "required";
	}
	else
	{
		$r = "readonly";
	}

	$ambil2 = $koneksi -> query("SELECT * FROM struktur_lembaga WHERE jabatan = 'Pimpinan'");
	$pecah2 = $ambil2 -> fetch_assoc(); 

?>

<!-- <pre><?php //print_r($pecah); ?></pre> -->

<div class="container-fluid">
    <div class="row">
		<div class="col-lg-12">
			<div class="card">
		        <div class="card-header">
		            <strong>Nama Lembaga </strong>
		        </div>
		        <div class="card-body card-block">
		            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		                <div class="row form-group">
		                    <div class="col-12 col-md-12">
		                        <input type="text" class="form-control" value="<?php echo $pecah["nama_lembaga"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>


		    <div class="card">
		        <div class="card-header">
		            <strong>Alamat Lembaga</strong>
		        </div>
		        <div class="card-body card-block">
		            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Jalan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["al_jalan"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Kelurahan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["al_kelurahan"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Kecamatan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["al_kecamatan"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Kabupaten / Kota</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["al_kota"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Provinsi</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["al_provinsi"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Kode Pos</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["kd_pos"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Nomor Telepon</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["no_telepon"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Email</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["email"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>


			<div class="card">
		        <div class="card-header">
		            <strong>Pengelola / Pimpinan Lembaga</strong>
		        </div>
		        <div class="card-body card-block">
		            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Nama</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah2["nama_lengkap"]; ?>"  <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Jabatan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah2["jabatan"],' Lembaga'; ?>"  <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Nomor Handphone / Telepon</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah2["no_telepon"]; ?>"  <?php echo $r; ?>>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>


			<div class="card">
		        <div class="card-header">
		            <strong>Informasi Tambahan </strong>
		        </div>
		        <div class="card-body card-block">
		            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Hak Milik</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["status_tempat"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Ukuran (M<sup>2</sup>)</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["ukuran"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>

		    <div class="card">
		        <div class="card-header">
		        	<form method="post">
			            <button class="btn btn-primary btn-sm" name="ubah">
			                <i class="fa fa-gear"></i> Ubah <span class="glyphicon glyphicon-wrench"></span>
			            </button>
			            <button class="btn btn-success btn-sm" name="daftar">
			                <i class="fa fa-thumbs-up"></i> Simpan <span class="glyphicon glyphicon-wrench"></span>
			            </button>
		        	</form>
		        </div>
		    </div>
		</div>
	</div>
</div>
