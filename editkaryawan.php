<?php 
require_once("config.php");

$id_karyawan = $_GET['id_karyawan'];

$sql_updatekaryawan = "SELECT * FROM karyawan WHERE id_karyawan = '$id_karyawan'";
$query = mysqli_query($konek, $sql_updatekaryawan);
$result4 = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
	$id_karyawan = $_POST['id_karyawan'];
	$nama_karyawan = $_POST['nama_karyawan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$no_hpwa = $_POST['no_hpwa'];

	$sql_editkaryawan = "UPDATE karyawan SET nama_karyawan = '$nama_karyawan', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_hpwa = '$no_hpwa' WHERE id_karyawan = '$id_karyawan'";
	mysqli_query($konek, $sql_editkaryawan);

	header("location:owner.php");
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Karyawan</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
  	 <div class="navbar-header">
    <a href="" class="navbar-brand">Minimarket SidatMart</a>
   </div>
   <ul class="nav navbar-nav">
    <li class="active"><a href="owner.php">Home</a></li>
   </ul>
  </div>
 </nav>
	<h1>Ubah Data Barang</h1>

	<form action="editkaryawan.php" method="POST">
		<table>
			<tr>
				<td>id_karyawan</td>
				<td>:</td>
				<td>
					<input type="number" name="id_karyawan" value="<?= $result4['id_karyawan']; ?>">
				</td>
			</tr>
			<tr>
				<td>nama_karyawan</td>
				<td>:</td>
				<td>
					<input type="text" name="nama_karyawan" value="<?= $result4['nama_karyawan']; ?>">
				</td>
			</tr>
			<tr>
				<td>jenis_kelamin</td>
				<td>:</td>
				<td>
					<input type="text" name="jenis_kelamin"value="<?= $result4['jenis_kelamin']; ?>">
				</td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td>
					<input type="text" name="alamat"value="<?= $result4['alamat']; ?>">
				</td>
			</tr>
			<tr>
				<td>no_hpwa</td>
				<td>:</td>
				<td>
					<input type="text" name="no_hpwa"value="<?= $result4['no_hpwa']; ?>">
				</td>
			</tr>
		</table>
		<button name="submit" type="submit">Ubah Data Barang</button>
	</form>
</body>

</html>