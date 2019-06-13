<?php
// include config.php
include_once("config.php");

if(isset($_POST['update']))
{
	$id_buku = $_POST['id_buku'];
	$judul_buku = $_POST['judul_buku'];
	$id_pengarang = $_POST['id_pengarang'];
	$jml_halaman = $_POST['jml_halaman'];
	$nomor_isbn = $_POST['nomor_isbn'];
	$tahun_terbit = $_POST['tahun_terbit'];


	// check empty
	if(empty($name) || empty($age) || empty($email)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE tbl_buku SET name='$name',age='$age',email='$email' WHERE id=$id");
		
		//direct ke page
		header("Location: index.php");
	}
}
?>
<?php
// dapatkan data dari url
$id_buku = $_POST['id_buku'];

//select data sesuai id
$result = mysqli_query($mysqli, "SELECT * FROM tbl_buku WHERE id_buku=$id_buku");

while ($res_buku = mysqli_fetch_array($result)){
    $id_buku=$res_buku['id_buku'];
    $judul_buku=$res_buku['judul_buku'];
    $id_pengarang=$res_buku['id_pengarang'];
    $jml_halaman=$res_buku['jml_halaman'];
    $nomor_isbn=$res_buku['nomor_isbn'];
    $tahun_terbit=$res_buku['tahun_terbit'];
}

//$query_pengarang = mysqli_query($mysqli,"SELECT nama_pengarang FROM tbl_pengarang WHERE id_pengarang=$id_pengarang;");
//
//while ($res_penggarang = mysqli_fetch_array($query_pengarang)){
//    $nama_pengarang=$res_penggarang['nama_pengarang'];
//}

?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>judul_buku</td>
				<td><input type="text" name="judul_buku" value="<?php echo $judul_buku;?>"></td>
			</tr>
			<tr> 
				<td>judul_buku</td>
				<td><input type="text" name="judul_buku" value="<?php echo $judul_buku;?>"></td>
			</tr>
			<tr> 
				<td>id_pengarang</td>
				<td><input type="text" name="id_pengarang" value="<?php echo $id_pengarang;?>"></td>
			</tr>
			<tr>
				<td>jml_halaman</td>
				<td><input type="text" name="jml_halaman" value="<?php echo $jml_halaman;?>"></td>
			</tr>
			<tr>
				<td>nomor_isbn</td>
				<td><input type="text" name="nomor_isbn" value="<?php echo $nomor_isbn;?>"></td>
			</tr>
			<tr>
				<td>tahun_terbit</td>
				<td><input type="text" name="tahun_terbit" value="<?php echo $tahun_terbit;?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
