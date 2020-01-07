<?php
include_once("koneksi.php");

$sql = "SELECT * FROM peng";
$result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     echo "<b>nama </b>"."<br>";
//     while($row = $result->fetch_assoc()) {
//         echo $row["karyawan_nama"]."<br>";
//     }
// }

//echo "Namanya<br>";
//while ($row = mysqli_fetch_array($result)) {
  //  echo $row["karyawan_nama"]."<br>";
//}
?>
<html>
<head>
    <title>Homepage</title>
    <meta http-equiv="refresh" content="3">
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>usia</th> <th>alamat</th> <th>akasi</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['usia']."</td>";
        echo "<td>".$row['alamat']."</td>";
        echo "<td><a href='Hapus.php?idPengunjung=$row[idPengunjung]'>Hapus</a></td>";
        echo "<td><a href='FormEditt.php?idPengunjung=$row[idPengunjung]'>edit</a></td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>
