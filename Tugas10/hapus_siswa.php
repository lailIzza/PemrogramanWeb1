<?php
$konek = mysqli_connect("localhost", "root", "", "sekolahanb");

if (isset($_GET['id_siswa'])) {
    $id_siswa = mysqli_real_escape_string($konek, $_GET['id_siswa']); // Amankan ID

    $sql = "DELETE FROM data_siswa WHERE id_siswa = '$id_siswa'";
    $query = mysqli_query($konek, $sql);

    if ($query) {
        header('Location: data_siswa.php?status=sukses');
    } else {
        header('Location: data_siswa.php?status=gagal');
    }
} else {
    die("ID siswa tidak ditemukan!");
}
?>
