<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compitiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Sitem Informasi Sekolah</h1>
    <h2>SMK Unipdu</h2>
    <a href="data_siswa.php">Daftar Siswa</a><br>
    <a href="tambah_siswa.php">Pendaftaran</a>

    <!-- notifikasi dari tambah_siswa.php -->
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
</body>
</html>