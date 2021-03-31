<?php
include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

	// ambil data dari formulir
	$id = $_POST['idPengunjung'];
	$nama = $_POST['nama'];
  $usia = $_POST['usia'];
	$alamat = $_POST['alamat'];
	// buat query update
	$sql = "UPDATE peng SET nama='$nama', usia='$usia', alamat='$alamat' WHERE idPengunjung=$id";
	$query = mysqli_query($conn, $sql);

	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: index.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}


} else {
	die("Akses dilarang...");
}
?>
