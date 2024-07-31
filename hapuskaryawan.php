<?php 
require_once("config.php");

$id_karyawan = $_GET['id_karyawan'];

$sql_deletekaryawan = "DELETE FROM karyawan WHERE id_karyawan = '$id_karyawan'";
mysqli_query($konek, $sql_deletekaryawan);

header("Location:owner.php");

 ?>