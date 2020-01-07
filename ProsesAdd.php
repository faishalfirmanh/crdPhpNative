
<?php
  include_once("koneksi.php");
 if(isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $sql ="INSERT INTO peng (nama, usia, alamat) VALUES('$nama','$usia','$alamat')";
    if (mysqli_query($conn, $sql)) {
      // echo '<script type="text/JavaScript">
      //        alert("sukses ditambahkan");
      //        </script>';
      header('Location: read.php');
      }
else {
  echo "Gagal insert";  //untuk 1 insert
}

}

?>
