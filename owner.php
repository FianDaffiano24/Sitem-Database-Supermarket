<?php 

require_once("config.php");

$sql_read1 = "SELECT * FROM barang";
$query_db1 = mysqli_query($konek, $sql_read1);

$results1 = [];

while($row1 = mysqli_fetch_assoc($query_db1)){
	$results1[] = $row1;
}

$sql_read2 = "SELECT * FROM penjualan";
$query_db2 = mysqli_query($konek, $sql_read2);

$results2 = [];

while($row2 = mysqli_fetch_assoc($query_db2)){
	$results2[] = $row2;
}

$sql_read3 = "SELECT * FROM tambah_barang";
$query_db3 = mysqli_query($konek, $sql_read3);

$results3 = [];

while($row3 = mysqli_fetch_assoc($query_db3)){
	$results3[] = $row3;
}

$sql_read4 = "SELECT * FROM karyawan";
$query_db4 = mysqli_query($konek, $sql_read4);

$results4 = [];

while($row4 = mysqli_fetch_assoc($query_db4)){
	$results4[] = $row4;
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<title>Database Minimarket Khusus Owner</title>
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body class="badan">
 	<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
  	 <div class="navbar-header">
    <a href="index.php" class="navbar-brand">Minimarket SidatMart</a>
   </div>
   <ul class="nav navbar-nav">
    <li class="active"><a href="owner.php">Home</a></li>
   </ul>
  </div>
 </nav>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Welcome</h4>
            </div>
            <div class="modal-body">
                <p>Masukan Username : </p> <input type="text" name="Username">
                <p>Masukan Password : </p> <input type="password" name="Password">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Login</button>
            </div>
        </div>

    </div>
</div>
 	<center><h1>Database Minimarket SidatMart Khusus Owner</h1></center>
 	<h3>Barang</h3>
 	<table border="2" class="barang">
 		<tr>
 			<td>No</td>
 			<td>id_barang</td>
 			<td>nama_barang</td>
 			<td>jumlah</td>
 			<td>harga</td>
 			<td>aksi</td>
 		</tr>
 		<?php 
 		$no = 1;
 		foreach($results1 as $results1):
 		 ?>
 		<tr>
 			<td><?= $no; ?></td>
 			<td><?= $results1['id_barang']  ?></td>
 			<td><?= $results1['nama_barang']  ?></td>
 			<td><?= $results1['jumlah']  ?></td>
 			<td><?= $results1['harga']  ?></td>
 			<td>
 				<a href="editbarang.php?id_barang=<?=$results1['id_barang']; ?>">Edit</a>
 				||
 				<a href="hapusbarang.php?id_barang=<?=$results1['id_barang'];?>">Hapus</a>
 			</td>
 		</tr>
 		<?php 
 		$no++;
 		endforeach;
 		 ?>
 	</table>
 	<div><a href="tambahbarang.php" class="tb">Tambah Data Barang</a></div>
 	<br>
 	<h3>Penjualan</h3>
 	<table border="2" class="penjualan">
 		<tr>
 			<td>No</td>
 			<td>id_penjualan</td>
 			<td>id_barang</td>
 			<td>tanggal_transaksi</td>
 			<td>barang_terjual</td>
 			<td>jumlah</td>
 			<td>total_harga</td>
 			<td>aksi</td>
 		</tr>

 		<?php 
 		$no = 1;
 		foreach($results2 as $results2):
 		 ?>

 		<tr>
 			<td><?= $no; ?></td>
 			<td><?= $results2['id_penjualan']  ?></td>
 			<td><?= $results2['id_barang']  ?></td>
 			<td><?= $results2['tanggal_transaksi']  ?></td>
 			<td><?= $results2['barang_terjual']  ?></td>
 			<td><?= $results2['jumlah']  ?></td>
 			<td><?= $results2['total_harga']  ?></td>
 			<td>
 				<a href="edit.php?id_penjualan=<?=$results2['id_penjualan']; ?>">Edit</a>
 				||
 				<a href="hapus.php?id_penjualan=<?=$results2['id_penjualan'];?>">Hapus</a>
 			</td>
 		</tr>
 		<?php 
 		$no++;
 		endforeach;
 		 ?>
 	</table>
 	<br>
 	<h3>tambah_barang</h3>
 	<table border="2" class="suplai">
 		<tr>
 			<td>No</td>
 			<td>id</td>
 			<td>id_barang</td>
 			<td>nama_barang</td>
 			<td>jumlah</td>
 			<td>aksi</td>
 		</tr>
 		<?php 
 		$no = 1;
 		foreach($results3 as $results3):
 		 ?>
 		<tr>
 			<td><?= $no; ?></td>
 			<td><?= $results3['id']  ?></td>
 			<td><?= $results3['id_barang']  ?></td>
 			<td><?= $results3['nama_barang']  ?></td>
 			<td><?= $results3['jumlah']  ?></td>
 			<td>
 				<a href="editsuplai.php?id=<?=$results3['id']; ?>">Edit</a>
 				||
 				<a href="hapussuplai.php?id=<?=$results3['id'];?>">Hapus</a>
 			</td>
 		</tr>
 		<?php 
 		$no++;
 		endforeach;
 		 ?>
 	</table>
 	<div><a href="tambahsuplai.php" class="ts">Tambah Data Suplai Barang</a></div>
 	<br>
 	<h3>Karyawan</h3>
 	<table border="2" class="karyawan">
 		<tr>
 			<td>No</td>
 			<td>id_karyawan</td>
 			<td>nama_karyawan</td>
 			<td>jenis_kelamin</td>
 			<td>alamat</td>
 			<td>no_hpwa</td>
 			<td>aksi</td>
 		</tr>
 		<?php 
 		$no = 1;
 		foreach($results4 as $results4):
 		 ?>
 		<tr>
 			<td><?= $no; ?></td>
 			<td><?= $results4['id_karyawan']  ?></td>
 			<td><?= $results4['nama_karyawan']  ?></td>
 			<td><?= $results4['jenis_kelamin']  ?></td>
 			<td><?= $results4['alamat']  ?></td>
 			<td><?= $results4['no_hpwa']  ?></td>
 			<td>
 				<a href="editkaryawan.php?id_karyawan=<?=$results4['id_karyawan']; ?>">Edit</a>
 				||
 				<a href="hapuskaryawan.php?id_karyawan=<?=$results4['id_karyawan'];?>">Hapus</a>
 			</td>
 		</tr>
 		<?php 
 		$no++;
 		endforeach;
 		 ?>
 	</table>
 	<div><a href="tambahkaryawan.php" class="tk">Tambah Data Karyawan</a></div>
 	<br>

 	<script>$('#myModal').modal('show');</script>
 </body>
 <center><footer>copyright</footer></center>
 <center><footer>Muhammad Daffiano Rahmatullah-1900018081</footer></center>
 <center><footer>est 2021</footer></center>
 </html>