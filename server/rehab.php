<?php
include "server.php";
$bentuk_rehab = $_GET['bentuk_rehab'];
$nama_psikolog = $_GET['nama_psikolog'];
$antrian = rand(1,100);
$tanggal = date("Y-m-d");
$waktu = date("H:i:s");

$query = mysqli_query($conn, "INSERT INTO rehab (bentuk_rehab, nama_psikolog, antrian, tanggal, waktu) VALUES ('$bentuk_rehab', '$nama_psikolog', '$antrian', '$tanggal', '$waktu')");
if($query){
    header("Location: https://api.whatsapp.com/send?phone=$_GET[no]&text=Halo%20Saya%20Mau%20Rehab%20%3A%20$bentuk_rehab%20%3A%20$nama_psikolog%20%3A%20$antrian%20%3A%20$tanggal%20%3A%20$waktu");
}
else{
    echo "Gagal";
}