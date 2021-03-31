<?php
include("koneksi.php");
if( !isset($_GET['idPengunjung']) ){
	// kalau tidak ada id di query string
	header('Location: index.php');
}
//ambil id dari query string
$id = $_GET['idPengunjung'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM peng WHERE idPengunjung=$id";
$query = mysqli_query($conn, $sql);
$visitor = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>

<html>
<head>
	<title>Formulir Edit </title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<body>
	<header>
		<h3>Form Edit </h3>
	</header>


	<div class="wrapper">
			<div class="container-fluid">
					<div class="row">
							<div class="col-md-12">
									<div class="page-header">
											<h2></h2>
									</div>
									<form action="ProsesEditt.php" method="post">
									<input type="hidden" name="idPengunjung" value="<?php echo $visitor['idPengunjung'] ?>" />
											<div class="form-group">
													<label>Name</label>
													<input type="text" name="nama" class="form-control" value="<?php echo $visitor['nama']; ?>">
													<span class="help-block"></span>
											</div>
											<div class="form-group">
													<label>usia</label>
													<input type="number" name="usia" class="form-control"  value="<?php echo $visitor['usia'] ?>">
													<span class="help-block"></span>
											</div>
											<div class="form-group">
													<label>alamat</label>
													<input type="text" name="alamat" class="form-control"  value="<?php echo $visitor['alamat'] ?>">
													<span class="help-block"></span>
											</div>
											<input type="submit" class="btn btn-primary" value="simpan" name="simpan">
									</form>
							</div>
					</div>
			</div>
	</div>
	</body>
</html>
