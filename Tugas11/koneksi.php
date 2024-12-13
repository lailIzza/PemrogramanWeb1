<?php
$konek = mysqli_connect("localhost","root", "", "sekolah_tgs11");
if( !$konek ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>