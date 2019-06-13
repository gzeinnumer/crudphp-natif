<?php
//include config.php
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM barang"); // using mysqli_query instead
?>
<?php
if (isset($_GET['harga_total'])){
    $harga_total = $_GET['harga_total'];
} else{
    $harga_total = 0;
}

if (isset($_POST['cek_total'])) {
    while ($res = mysqli_fetch_array($result)) {
        $harga_total = $harga_total+$res['harga_brg']*$_POST[$res['id_brg']];
    }
    header("Location:barang.php?harga_total=$harga_total");
}
?>
<html>
<head>
    <title>Crud barang</title>
</head>
<body>
<a href="add.php">Add New Data</a><br/><br/>
<a href="register.php">Register</a><br/><br/>

<form action="barang.php" method="post">
    <table width='80%' border=0>

        <tr bgcolor='#CCCCCC'>
            <td>Id Barang</td>
            <td>Nama Barang</td>
            <td>Harga Barang</td>
            <td>Keterangan</td>
            <td>Jumlah Unit</td>
        </tr>
        <?php
        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['id_brg'] . "</td>";
            echo "<td>" . $res['nama_brg'] . "</td>";
            echo "<td>" . $res['harga_brg'] . "</td>";
            echo "<td>" . $res['detail_brg'] . "</td>";
            echo "<td><input type='number' name='".$res['id_brg']."'></td></tr>";
        }
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input name="cek_total" type="submit" value="Cek"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input name="harga_total" type="number" value="<?php echo $harga_total ?>"></td>
        </tr>
    </table>
</form>
</body>
</html>
