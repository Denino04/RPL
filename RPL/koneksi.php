<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "FinalRPL";
$koneksi=new mysqli($hostname,$username,$password, $database);
if ($koneksi->connect_error)
{
// jika terjadi error, matikan proses dengan die() atau exit();
die('Maaf koneksi gagal: '. $connect->connect_error);
}
?>