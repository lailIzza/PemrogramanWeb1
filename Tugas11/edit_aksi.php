<?php
include 'koneksi.php';

//mengambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//update ke database
mysqli_query($konek, "update siswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'" );

//user dialihkan kembali ke index.php
header("location:index.php");

?>