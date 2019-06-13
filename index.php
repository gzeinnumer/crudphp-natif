<?php
//include config.php
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
$result_mahasiswa = mysqli_query($mysqli, "SELECT * FROM mahasiswa"); // using mysqli_query instead
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New Data</a><br/><br/>
<a href="register.php">Register</a><br/><br/>

<table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>Name</td>
        <td>Age</td>
        <td>Email</td>
        <td>Update</td>
    </tr>
    <?php
    while ($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $res['name'] . "</td>";
        echo "<td>" . $res['age'] . "</td>";
        echo "<td>" . $res['email'] . "</td>";
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
    }
    ?>
</table>

<table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>Nim</td>
        <td>Nama</td>
        <td>Tanggal Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
    </tr>
    <?php
    while ($res = mysqli_fetch_array($result_mahasiswa)) {
        echo "<tr>";
        echo "<td>" . $res['nim'] . "</td>";
        echo "<td>" . $res['nama'] . "</td>";
        echo "<td>" . $res['tanggal_lahir'] . "</td>";
        echo "<td>" . $res['jenis_kelamin'] . "</td>";
        echo "<td>" . $res['alamat'] . "</td>";
    }
    ?>
</table>
</body>
</html>
