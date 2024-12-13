<?php
include 'koneksi.php';

//mengambil data id dari url
$id = $_GET['id'];

//menghapus dari database
mysqli_query($konek, "delete from siswa where id='$id'");

//user dialihkan kembali ke index.php
header("location:index.php");