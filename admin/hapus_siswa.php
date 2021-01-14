<?php 

	$del = $koneksi->query("SELECT * 
							FROM peserta pt, jadwal_terapi jt, siswa s 
							WHERE pt.id_siswa = s.id_siswa AND pt.id_jadwal = jt.id_jadwal AND s.id_siswa = '$_GET[id]'"
						);
	while($pecah = $del -> fetch_assoc()){ 
		$get = $pecah['id_jadwal'];
		$koneksi->query("DELETE FROM jadwal_terapi WHERE id_jadwal = '$get' ");
	} 


	$koneksi->query("DELETE FROM peserta WHERE id_siswa = '$_GET[id]'");
	$koneksi->query("DELETE FROM siswa WHERE id_siswa = '$_GET[id]'");

	echo "<script>alert('BERHASIL, Data Telah di Hapus');</script>";
	echo "<script>location='index.php?halaman=siswa';</script>";

 ?>