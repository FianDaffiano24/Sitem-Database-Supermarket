<?php 
require_once("config.php");

if (isset($_POST['submit'])) {
	$id_karyawan = $_POST['id_karyawan'];
	$nama_karyawan = $_POST['nama_karyawan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$no_hpwa = $_POST['no_hpwa'];

	$sql_tambahkaryawan = "INSERT INTO karyawan VALUES('$id_karyawan', '$nama_karyawan', '$jenis_kelamin', '$alamat', '$no_hpwa')";
	mysqli_query($konek, $sql_tambahkaryawan);

	header("location:owner.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Karyawan</title>
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
	<h1>Tambah Data Karyawan</h1>

	<form action="tambahkaryawan.php" method="POST">
		<table>
			<tr>
				<td>id_karyawan</td>
				<td>:</td>
				<td>
					<input type="number" name="id_karyawan">
				</td>
			</tr>
			<tr>
				<td>nama_karyawan</td>
				<td>:</td>
				<td>
					<input type="text" name="nama_karyawan">
				</td>
			</tr>
			<tr>
				<td>jenis_kelamin</td>
				<td>:</td>
				<td>
					<input type="text" name="jenis_kelamin">
				</td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td>
					<input type="text" name="alamat">
				</td>
			</tr>
			<tr>
				<td>no_hpwa</td>
				<td>:</td>
				<td>
					<input type="number" name="no_hpwa">
				</td>
			</tr>
		</table>
		<button name="submit" type="submit">Tambah Data Barang</button>
	</form>
</body>
</html>