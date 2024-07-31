<?php 
require_once("config.php");

$id_barang = $_GET['id_barang'];

$sql_updatebarang = "SELECT * FROM barang WHERE id_barang = '$id_barang'";
$query = mysqli_query($konek, $sql_updatebarang);
$result1 = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];

	$sql_editbarang = "UPDATE barang SET nama_barang = '$nama_barang', jumlah = '$jumlah', harga = '$harga' WHERE id_barang = '$id_barang'";
	mysqli_query($konek, $sql_editbarang);

	header("location:owner.php");
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Barang</title>
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

	<form action="editbarang.php" method="POST">
		<table>
			<tr>
				<td>id_barang</td>
				<td>:</td>
				<td>
					<input type="number" name="id_barang" value="<?= $result1['id_barang']; ?>">
				</td>
			</tr>
			<tr>
				<td>nama_barang</td>
				<td>:</td>
				<td>
					<input type="text" name="nama_barang" value="<?= $result1['nama_barang']; ?>">
				</td>
			</tr>
			<tr>
				<td>jumlah</td>
				<td>:</td>
				<td>
					<input type="number" name="jumlah"value="<?= $result1['jumlah']; ?>">
				</td>
			</tr>
			<tr>
				<td>harga</td>
				<td>:</td>
				<td>
					<input type="number" name="harga"value="<?= $result1['harga']; ?>">
				</td>
			</tr>
		</table>
		<button name="submit" type="submit">Ubah Data Barang</button>
	</form>
</body>

</html>