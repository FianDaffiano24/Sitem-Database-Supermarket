<?php 
require_once("config.php");

$id = $_GET['id'];

$sql_updatesuplai = "SELECT * FROM tambah_barang WHERE id = '$id'";
$query = mysqli_query($konek, $sql_updatesuplai);
$result3 = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];

	$sql_editsuplai = "UPDATE tambah_barang SET id_barang = '$id_barang', nama_barang = '$nama_barang', jumlah = '$jumlah' WHERE id = '$id'";
	mysqli_query($konek, $sql_editsuplai);

	header("location:owner.php");
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Suplai</title>
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
	<h1>Ubah Data Suplai</h1>

	<form action="editsuplai.php" method="POST">
		<table>
			<tr>
				<td>id</td>
				<td>:</td>
				<td>
					<input type="number" name="id" value="<?= $result3['id']; ?>">
				</td>
			</tr>
			<tr>
				<td>id_barang</td>
				<td>:</td>
				<td>
					<input type="number" name="id_barang" value="<?= $result3['id_barang']; ?>">
				</td>
			</tr>
			<tr>
				<td>nama_barang</td>
				<td>:</td>
				<td>
					<input type="text" name="nama_barang"value="<?= $result3['nama_barang']; ?>">
				</td>
			</tr>
			<tr>
				<td>jumlah</td>
				<td>:</td>
				<td>
					<input type="number" name="jumlah"value="<?= $result3['jumlah']; ?>">
				</td>
			</tr>
		</table>
		<button name="submit" type="submit">Ubah Data Jumlah</button>
	</form>
</body>

</html>