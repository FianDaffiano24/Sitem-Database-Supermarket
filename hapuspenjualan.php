<?php 
require_once("config.php");

$id_penjualan = $_GET['id_penjualan'];

$sql_deletepenjualan = "DELETE FROM penjualan WHERE id_penjualan = '$id_penjualan'";
mysqli_query($konek, $sql_deletepenjualan);

header("Location:untuksemua.php");

 ?>