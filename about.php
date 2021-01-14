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

<div class="container-fluid" style="margin-top: 118px">
    <div class="">
		<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			<div class="panel panel-default">
		        <div class="panel-heading">
		            <strong>Nama Lembaga </strong>
		        </div>
		        <div class="panel-body">
		            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		                <div class="form-group">
		                    <div class="col-12 col-md-12">
		                        <input type="text" class="form-control" value="<?php echo $pecah["nama_lembaga"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>


		    <div class="panel panel-default">
		        <div class="panel-heading">
		            <strong>Alamat Lembaga</strong>
		        </div>
		        <div class="panel-body">
		            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		                <div class="form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Jalan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["al_jalan"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Kelurahan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["al_kelurahan"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Kecamatan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["al_kecamatan"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Kabupaten / Kota</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["al_kota"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Provinsi</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["al_provinsi"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Kode Pos</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["kd_pos"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="col col-md-3">
		                        <label class=" form-control-label">Nomor Telepon</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["no_telepon"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="form-group">
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


			<div class="panel panel-default">
		        <div class="panel-heading">
		            <strong>Pengelola / Pimpinan Lembaga</strong>
		        </div>
		        <div class="panel-body">
		            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		                <div class="form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Nama</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah2["nama_lengkap"]; ?>"  <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Jabatan</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah2["jabatan"],' Lembaga'; ?>"  <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="form-group">
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


			<div class="panel panel-default">
		        <div class="panel-heading">
		            <strong>Informasi Tambahan </strong>
		        </div>
		        <div class="panel-body">
		            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		                <div class="form-group">
		                    <div class="col col-md-3">
		                        <label for="text-input" class=" form-control-label">Hak Milik</label>
		                    </div>
		                    <div class="col-12 col-md-9">
		                        <input type="text" class="form-control" value="<?php echo $pecah["status_tempat"]; ?>" <?php echo $r; ?>>
		                    </div>
		                </div>
		                <div class="form-group">
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
		</div>
	</div>
</div>

<section class="konten"> 
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 form-group">
				<div class="col-md-4 col-md-offset-2">
					<img src="img/academy.png" width="100%" style="border-radius: 10px">
				</div>
				<div class="col-md-6 col-md-offset-0">
					<h1 style="font-size: 50px">Nama Lembaga</h1>
					<p style="font-size: 20px"><?php echo $pecah["nama_lembaga"]; ?></p>
				</div>
			</div>	
			<div class="row align-items-center">
          <div class="col-md-6 order-md-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/academy.png" alt="" width="100%"> 
            </div> 
          </div>
          <div class="col-md-6 order-md-1">
            <div class="p-5">
              <h2 class="display-4">For those about to rock...</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
		</div>
	</div>
</section>








