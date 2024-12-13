<?php
include 'koneksi.php';

//mengambil data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//input data ke database
mysqli_query($konek, "INSERT INTO siswa (nama, nim, alamat) VALUES ('$nama', '$nim', '$alamat')");

//user dialihkan kembali ke index.php
header("location:index.php");
?>