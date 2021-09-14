<?php

$username = "UAPP";
$password = "UAPPPASS";
$database = "192.168.1.12:1521/SMADEV";

$conn = oci_connect($username, $password, $database);

if($conn){
echo "Berhasil";
}else{
echo "Gagal";
}

?>
