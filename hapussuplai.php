<?php 
require_once("config.php");

$id = $_GET['id'];

$sql_deletesuplai = "DELETE FROM tambah_barang WHERE id = '$id'";
mysqli_query($konek, $sql_deletesuplai);

header("Location:owner.php");

 ?>