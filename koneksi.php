

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "native"; //default db rest
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";
// $sql = "SELECT * FROM karyawan";
// $result = $conn->query($sql);

?>
