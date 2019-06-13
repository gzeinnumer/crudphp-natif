<?php
include("config.php");

if (isset($_POST['status'])){
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $tgl_lahir = $_POST["tgl"];
    $bln_lahir = $_POST["bln"];
    $th_lahir = $_POST["thn"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];

    $lahir = $tgl_lahir . "-" . $bln_lahir . "-" . $th_lahir;

    $query = "INSERT INTO mahasiswa(nim,nama, tanggal_lahir, jenis_kelamin, alamat) VALUES('$nim','$nama','$lahir','$jenis_kelamin','$alamat');";
    $insert_Result = mysqli_query($mysqli, $query);

    if ($insert_Result) {
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    } else {
        echo "<font color='green'>Data add Failed.";
    }

}

?>