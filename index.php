<?php
include_once("koneksi.php");

$sql = "SELECT * FROM peng";
$result = $conn->query($sql);
?>
<html>
<head>
    <title>Homepage</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<body>
<a href="add.php" class="btn btn-primary">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>usia</th> <th>alamat</th> <th>aksi btn</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['usia']."</td>";
        echo "<td>".$row['alamat']."</td>";
        echo "<td>
                  <a href='Hapus.php?idPengunjung=$row[idPengunjung]' class='btn btn-danger'>Hapus</a>
                  <a href='FormEditt.php?idPengunjung=$row[idPengunjung]' class='btn btn-info'>edit</a>
              </td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>
