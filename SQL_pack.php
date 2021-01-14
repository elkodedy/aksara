	<?php 

//db_akademik
// 1.
query("
	SELECT mh.nama as NamaMahasiswa, mk.NAMA as NamaMatkul, mk.sks FROM matakuliah mk, peserta ps, mahasiswa mh, kuliah kl WHERE mh.nim=ps.nim and ps.KODEKULIAH=kl.KODEKULIAH and kl.KODEMK=mk.KODEMK ORDER BY `NamaMahasiswa` ASC

-- ------------------------------------------------------------------------------------------------
-- 2.
	SELECT mh.nama as NamaMahasiswa, SUM(mk.sks) as JumlahSKS FROM matakuliah mk, peserta ps, mahasiswa mh, kuliah kl WHERE mh.nim=ps.nim and ps.KODEKULIAH=kl.KODEKULIAH and kl.KODEMK=mk.KODEMK GROUP BY mh.NAMA ORDER BY `NamaMahasiswa` ASC
-- ------------------------------------------------------------------------------------------------
-- 3.
	SELECT mk.NAMA as Matkul, ds.NAMA as Dosen FROM matakuliah mk, kuliah kl, dosen ds WHERE mk.KODEMK=kl.KODEMK and kl.NIP=ds.NIP ORDER BY `Matkul` ASC
-- ------------------------------------------------------------------------------------------------

-- 4.
	SELECT mh.nama as namaMahasiswa, ds.nama as namaDosen FROM mahasiswa mh, dosen ds WHERE mh.DOSENPEMBIMBING=ds.NIP
-- ------------------------------------------------------------------------------------------------
-- 5.
	SELECT mh.NAMA as Mahasiswa, mk.NAMA as Matkul, ps.NILAI FROM matakuliah mk, peserta ps, mahasiswa mh, kuliah kl WHERE mh.nim=ps.nim and ps.KODEKULIAH=kl.KODEKULIAH and kl.KODEMK=mk.KODEMK ORDER BY `Mahasiswa` ASC
-- ------------------------------------------------------------------------------------------------
-- 6.
	SELECT mh.nama as NamaMahasiswa, mk.NAMA as NamaMatkul, mk.sks FROM matakuliah mk, peserta ps, mahasiswa mh, kuliah kl WHERE mh.nim=ps.nim and ps.KODEKULIAH=kl.KODEKULIAH and kl.KODEMK=mk.KODEMK GROUP BY mh.NAMA, mk.NAMA ORDER BY `NamaMahasiswa` ASC
-- -------------------------------------------------------------------------------------------------
UPDATE pendidik SET username_pendidik = '$_POST[username]' , password_pendidik = '$_POST[password]' 

-- 

-- db_aksara
-- 1.	
	SELECT s.nama_lengkap, jt.id_jadwal,pk.nama_pendidik , mp.nama_mp, pt.nilai
	FROM peserta pt, jadwal_terapi jt, siswa s, mata_pelajaran mp, pendidik pk
	WHERE pt.id_jadwal = jt.id_jadwal and s.id_siswa = pt.id_siswa AND jt.id_mp = mp.id_mp and jt.id_pendidik = pk.id_pendidik


-- 2.
	INSERT INTO `jadwal_terapi` (`id_jadwal`, `id_program`, `id_pendidik`, `tanggal`) 
	VALUES 
		(NULL, '2', '1', '2018-09-28'), 
		(NULL, '3', '1', '2018-09-28'), 
		(NULL, '4', '1', '2018-09-28'), 
		(NULL, '5', '1', '2018-09-28'), 
		(NULL, '6', '1', '2018-09-28'), 
		(NULL, '7', '1', '2018-09-28'), 
		(NULL, '8', '1', '2018-09-28'), 
		(NULL, '9', '1', '2018-09-28'), 
		(NULL, '10', '1', '2018-09-28'), 
		(NULL, '11', '1', '2018-09-28'), 
		(NULL, '12', '1', '2018-09-28'), 
		(NULL, '13', '1', '2018-09-28'), 
		(NULL, '14', '1', '2018-09-28'), 
		(NULL, '15', '1', '2018-09-28'), 
		(NULL, '16', '1', '2018-09-28'), 
		(NULL, '17', '1', '2018-09-28'), 
		(NULL, '18', '1', '2018-09-28'), 
		(NULL, '19', '1', '2018-09-28'), 
		(NULL, '20', '1', '2018-09-28'), 
		(NULL, '21', '1', '2018-09-28'), 
		(NULL, '22', '1', '2018-09-28'), 
		(NULL, '23', '1', '2018-09-28'), 
		(NULL, '24', '1', '2018-09-28'), 
		(NULL, '25', '1', '2018-09-28'), 
		(NULL, '26', '1', '2018-09-28'), 
		(NULL, '27', '1', '2018-09-28'), 
		(NULL, '28', '1', '2018-09-28'), 
		(NULL, '29', '1', '2018-09-28'), 
		(NULL, '30', '1', '2018-09-28'),
		(NULL, '31', '1', '2018-09-28'),
		(NULL, '32', '1', '2018-09-28'),
		(NULL, '33', '1', '2018-09-28'); 


-- 3.
	INSERT INTO `peserta` (`id_jadwal`, `id_siswa`, `Latihan1`, `Latihan2`, `Latihan3`, `hasil`) 
	VALUES
		('70', '2', '+/-', '+/-', '+/-', ''),
		('71', '2', '+/-', '+/-', '+/-', 'Belum konsisten'),
		('72', '2', '+', '+', '+', 'Tercapai'),
		('73', '2', '+/-', '+/-', '+/-', ''),
		('74', '2', '+/-', '+/-', '+/-', ''),
		('75', '2', '+/-', '+/-', '+/-', ''),
		('76', '2', '', '', '', ''), 
		('77', '2', '', '', '', ''), 
		('78', '2', '+', '+', '+', 'Tercapai'), 
		('79', '2', '-', '+/-', '+', ''), 
		('80', '2', '-', '+/-', '+', ''), 
		('81', '2', '', '', '', ''), 
		('82', '2', '+', '+', '+', 'Tercapai'), 
		('83', '2', '', '', '', ''), 
		('84', '2', '+/-', '+', '+', ''), 
		('85', '2', '', '', '', ''), 
		('86', '2', '+/-', '+/-', '+/-', 'Belum konsisten'), 
		('87', '2', '', '', '', ''), 
		('88', '2', '+', '+', '+', 'Tercapai'), 
		('89', '2', '', '', '', ''), 
		('90', '2', '+', '+', '+', 'Tercapai'), 
		('91', '2', '', '', '', ''), 
		('92', '2', '+/-', '+/-', '+/-', ''), 
		('93', '2', '', '', '', ''), 
		('94', '2', '+/-', '+/-', '+/-', 'Belum konsisten'), 
		('95', '2', '', '', '', ''), 
		('96', '2', '+', '+', '+', 'Tercapai'), 
		('97', '2', '', '', '', ''), 
		('98', '2', '+/-', '+/-', '+/-', 'Belum konsisten'), 
		('99', '2', '', '', '', ''), 
		('100', '2', '+/-', '+/-', '+/-', 'Belum konsisten'), 
		('101', '2', '+', '+', '+', 'Tercapai');

-- 4.'''''''''''''''Menampilkan sub_sub_program dan nilainya berdasarkan id siswa'''''''''''''''
	SELECT pr.sub_sub_program, pt.Latihan1, pt.Latihan2,pt.Latihan3,pt.hasil
	FROM program_aba pr, peserta pt, jadwal_terapi jt
	WHERE pr.id_program=jt.id_program and pt.id_jadwal=jt.id_jadwal and pt.id_siswa=4




-- /////////////////////////////////////////////////////////////////////////////////////////////////

") ?>




<!-- ///////////////// -->
<?php echo 'latihan1' . $num ?>
<!-- //////////////////////////////// -->
<?php while ($id_pendidik = $jadwal -> fetch_assoc()) {
	
	print_r($id_pendidik);
	echo "<br>";
	
} ?>
<!-- ///////////////////////// -->
<?php $num = 0 ?>
<?php 
	$ambil = $koneksi -> query("
		SELECT nama_program
		FROM program_aba
		WHERE nama_program != 'Perilaku Dan Kontak Mata' and nama_program != 'Program SI'
		GROUP BY nama_program
		ORDER BY id_program
	");
?>
<?php while($pecah = $ambil -> fetch_assoc()){ ?>
	
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
		<?php $nomor1++; ?>
    	<?php $sub_program=$pecah1['sub_program'] ?>
    	<?php 
    		$ambil2 = $koneksi -> query("
    			SELECT sub_sub_program
				FROM program_aba
				WHERE sub_program='$sub_program'
				GROUP BY sub_sub_program
				ORDER BY id_program
    		");
    		$jadwal = $koneksi -> query("
    			SELECT pk.id_pendidik, jt.id_jadwal
				FROM jadwal_terapi jt, pendidik pk
				WHERE jt.id_pendidik = pk.id_pendidik and pk.id_pendidik = '$id'
				ORDER BY jt.id_program");
    	?>
    	<?php while($pecah2 = $ambil2 -> fetch_assoc()){
    		$koneksi -> query("
    			INSERT INTO `peserta` (`id_jadwal`, `id_siswa`, `Latihan1`, `Latihan2`, `Latihan3`, `hasil`,  `tanggal`) 
    		");
    	} ?>
	<?php } ?>
<?php } ?>



<!-- Proses Inputan Data -->
	<?php 
		if (isset($_POST['input'])){

		}
	?>

	<?php  

		if (isset($_POST['input'])) 
		{

			$username = $_POST['username'];
			$password = $_POST['password'];
			$nama = $_POST['nama'];
			$ibu = $_POST['ibu'];
			$gender = $_POST['gender'];
			$usia = $_POST['usia'];
			$tanggal = $_POST['tanggal'];
			$alamat = $_POST['alamat'];
			$telepon = $_POST['telepon'];
			
			$ambil = $koneksi -> query("SELECT * FROM siswa WHERE nama = '$nama' ");
            $yangcocok = $ambil -> num_rows;

            if ($yangcocok==1) 
            {
                echo "<script>alert('Pendaftaran Gagal, Nama Sudah Digunakan');</script>";
                echo "<script>location='index.php?halaman=tambah_pembimbing';</script>";
            }
            else
            {
                $koneksi -> query("INSERT INTO siswa (nama_lengkap,nama_ibu,jenis_kelamin,usia,tgl_masuk,username,password,alamat,kontak) VALUES ('$nama','$ibu','$gender','$usia','$tanggal','$username','$password','$alamat','$telepon')");

                echo "<script>alert('Pendaftaran Berhasil');</script>";
                echo "<script>location='index.php?halaman=pembimbing';</script>";
            }
			
		}

	?>

        <!-- END USER DATA-->


    
	<?php 
		$ambil = $koneksi -> query("
			SELECT nama_program
			FROM program_aba
			WHERE nama_program != 'Perilaku Dan Kontak Mata' and nama_program != 'Program SI'
			GROUP BY nama_program
			ORDER BY id_program
		");
	?>
	<?php while($pecah = $ambil -> fetch_assoc()){ ?>
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
	    	<?php $sub_program=$pecah1['sub_program'] ?>
	    	<?php 
	    		$ambil2 = $koneksi -> query("
	    			SELECT sub_sub_program, id_program
					FROM program_aba
					WHERE sub_program='$sub_program'
					GROUP BY sub_sub_program
					ORDER BY id_program
	    		");
	    	?>
			<?php $index=0; ?>
	    	<?php while($pecah2 = $ambil2 -> fetch_assoc()){ ?>

	    		<?php 
		    		$latihan1a= "latihan1".$pecah2['id_program'];
		    		$latihan1b=$_POST[$latihan1a];
		    		$latihan2a= "latihan2".$pecah2['id_program'];
		    		$latihan2b=$_POST[$latihan2a];
		    		$latihan3a= "latihan3".$pecah2['id_program'];
		    		$latihan3b=$_POST[$latihan3a];
		    		$hasila= "hasil".$pecah2['id_program'];
		    		$hasilb=$_POST[$hasila];
	    		?>

	    		<?php $sub_sub_program=$pecah2['id_program'] ?>
	    		<?php 
	    			$ambil3 = $koneksi -> query("
	    				SELECT id_jadwal 
	    				FROM jadwal_terapi
	    				WHERE id_pendidik='$id'
	    			");
	    		?>
				<?php $set=0 ?>
	    		<?php while($pecah3 = $ambil3 -> fetch_assoc()){ ?>
	    			<?php $id_jadwal= $pecah3['id_jadwal'] ?>
	    			<?php 
	    				if($index==$set){
		    				$koneksi -> query("
		    					INSERT INTO peserta (id_jadwal, id_siswa, latihan1, latihan2, latihan3, hasil, tanggal)
		    					VALUES 
		    						('$id_jadwal', '$id_siswa', '$latihan1b', '$latihan2b', '$latihan3b', '$hasilb', '$tanggal')
		    				");
	    				}
	    				$set++;
	    			?>
	    		<?php } ?>
				<?php $index++; ?>
	    	<?php } ?>
		<?php } ?>
	<?php } ?>