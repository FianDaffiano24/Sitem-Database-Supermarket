<?php 
require_once("config.php");

$id_penjualan = $_GET['id_penjualan'];

$sql_updatepenjualan = "SELECT * FROM penjualan WHERE id_penjualan = '$id_penjualan'";
$query = mysqli_query($konek, $sql_updatepenjualan);
$result2 = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
	$id_penjualan = $_POST['id_penjualan'];
	$id_barang = $_POST['id_barang'];
	$tanggal_transaksi = $_POST['tanggal_transaksi'];
	$barang_terjual = $_POST['barang_terjual'];
	$jumlah = $_POST['jumlah'];
	$total_harga = $_POST['total_harga'];

	$sql_editpenjualan = "UPDATE penjualan SET id_barang = '$id_barang', tanggal_transaksi = '$tanggal_transaksi', barang_terjual = '$barang_terjual', jumlah = '$jumlah', total_harga = '$total_harga' WHERE id_penjualan = '$id_penjualan'";
	mysqli_query($konek, $sql_editpenjualan);

	header("location:untuksemua.php");
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Penjualan</title>
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
    <li class="active"><a href="index.php">Home</a></li>
   </ul>
  </div>
 </nav>
	<h1>Ubah Data Barang</h1>

	<form action="editpenjualan.php" method="POST">
		<table>
			<tr>
				<td>id_penjualan/td>
				<td>:</td>
				<td>
					<input type="number" name="id_penjualan" value="<?= $result2['id_penjualan']; ?>">
				</td>
			</tr>
			<tr>
				<td>id_barang</td>
				<td>:</td>
				<td>
					<input type="number" name="id_barang" value="<?= $result2['id_barang']; ?>">
				</td>
			</tr>
			<tr>
				<td>tanggal_transaksi</td>
				<td>:</td>
				<td>
					<input type="date" name="tanggal_transaksi"value="<?= $result2['tanggal_transaksi']; ?>">
				</td>
			</tr>
			<tr>
				<td>barang_terjual</td>
				<td>:</td>
				<td>
					<input type="text" name="barang_terjual"value="<?= $result2['barang_terjual']; ?>">
				</td>
			</tr>
			<tr>
				<td>jumlah</td>
				<td>:</td>
				<td>
					<input type="number" name="jumlah"value="<?= $result2['jumlah']; ?>">
				</td>
			</tr>
			<tr>
				<td>total_harga</td>
				<td>:</td>
				<td>
					<input type="number" name="total_harga"value="<?= $result2['total_harga']; ?>">
				</td>
			</tr>
		</table>
		<button name="submit" type="submit">Ubah Data Penjualan</button>
	</form>
</body>

</html>