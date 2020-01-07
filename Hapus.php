<?php
include_once('koneksi.php');

// $idPengunjung = $_GET['idPengunjung'];

// Delete user row from table based on given id
//$result = mysqli_query($conn, "DELETE FROM pengunjung WHERE idPengunjung=$id");
//mysqli_query($conn,"delete from pengunjung where idPengunjung='$id'");

if (isset($_GET['idPengunjung'])) {
  $id = $_GET['idPengunjung'];
  $sql = "DELETE FROM peng WHERE idPengunjung='$id'";
  $cek = mysqli_query($conn, $sql);

  if ($cek) {
    echo "berhasil hapus";
  }
  else {
    echo "Gagal ". $sql ."<br>". mysqli_error($conn);
  }
}
// $sql = "DELETE FROM pengunjung where idPengunjung='$idPengunjung'";
// $cek = mysqli_query($conn, $sql);

// if ($cek) {
//   echo "berhasil hapus";
// }
// else {
//   echo "gagal hapus";
// }



 ?>
