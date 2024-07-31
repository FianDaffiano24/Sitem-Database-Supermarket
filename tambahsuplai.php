<?php 
require_once("config.php");

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];

	$sql_tambahsuplai = "INSERT INTO tambah_barang VALUES('$id', '$id_barang', '$nama_barang', '$jumlah')";
	mysqli_query($konek, $sql_tambahsuplai);

	header("location:owner.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Suplai</title>
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
	<h1>Tambah Data Suplai</h1>

	<form action="tambahsuplai.php" method="POST">
		<table>
			<tr>
				<td>id</td>
				<td>:</td>
				<td>
					<input type="number" name="id">
				</td>
			</tr>
			<tr>
				<td>id_barang</td>
				<td>:</td>
				<td>
					<input type="number" name="id_barang">
				</td>
			</tr>
			<tr>
				<td>nama_barang</td>
				<td>:</td>
				<td>
					<input type="text" name="nama_barang">
				</td>
			</tr>
			<tr>
				<td>jumlah</td>
				<td>:</td>
				<td>
					<input type="number" name="jumlah">
				</td>
			</tr>
		</table>
		<button name="submit" type="submit">Tambah Data Suplai</button>
	</form>
</body>
</html>