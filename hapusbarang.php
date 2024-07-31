<?php 
require_once("config.php");

$id_barang = $_GET['id_barang'];

$sql_deletebarang = "DELETE FROM barang WHERE id_barang = '$id_barang'";
mysqli_query($konek, $sql_deletebarang);

header("Location:owner.php");

 ?>