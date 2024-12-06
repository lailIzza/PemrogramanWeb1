<?php
$konek = mysqli_connect("localhost", "root", "", "sekolahanb");

// Pastikan ada ID yang diterima dari URL
if (isset($_GET['id_siswa'])) {
    $id_siswa = mysqli_real_escape_string($konek, $_GET['id_siswa']);
    
    // Ambil data siswa berdasarkan ID
    $query = mysqli_query($konek, "SELECT * FROM data_siswa WHERE id_siswa = '$id_siswa'");
    $data = mysqli_fetch_assoc($query);

    // Jika data tidak ditemukan, tampilkan pesan
    if (!$data) {
        die("Data tidak ditemukan!");
    }
} else {
    die("ID tidak ditemukan!");
}

// Jika tombol simpan ditekan
if (isset($_POST['simpan'])) {
    $nama_siswa = mysqli_real_escape_string($konek, $_POST['nama_siswa']);
    $alamat_siswa = mysqli_real_escape_string($konek, $_POST['alamat_siswa']);
    $agama_siswa = mysqli_real_escape_string($konek, $_POST['agama_siswa']);
    $asal_sekolah = mysqli_real_escape_string($konek, $_POST['asal_sekolah']);

    // Update data siswa
    $sql = "UPDATE data_siswa 
            SET nama_siswa = '$nama_siswa', 
                alamat_siswa = '$alamat_siswa', 
                agama_siswa = '$agama_siswa', 
                asal_sekolah = '$asal_sekolah' 
            WHERE id_siswa = '$id_siswa'";
    $query = mysqli_query($konek, $sql);

    // Redirect ke halaman tampil data
    if ($query) {
        header('Location: data_siswa.php?status=sukses');
    } else {
        header('Location: data_siswa.php?status=gagal');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="" method="POST">
        <p>
            <label>Nama Siswa:</label>
            <input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa']; ?>" required>
        </p>
        <p>
            <label>Alamat:</label>
            <textarea name="alamat_siswa" required><?php echo $data['alamat_siswa']; ?></textarea>
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama_siswa" required>
                <option value="Islam" <?php if($data['agama_siswa'] == 'Islam') echo 'selected'; ?>>Islam</option>
                <option value="Kristen" <?php if($data['agama_siswa'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                <option value="Hindu" <?php if($data['agama_siswa'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                <option value="Budha" <?php if($data['agama_siswa'] == 'Budha') echo 'selected'; ?>>Budha</option>
                <option value="Atheis" <?php if($data['agama_siswa'] == 'Atheis') echo 'selected'; ?>>Atheis</option>
            </select>
        </p>
        <p>
            <label>Asal Sekolah:</label>
            <input type="text" name="asal_sekolah" value="<?php echo $data['asal_sekolah']; ?>" required>
        </p>
        <p>
            <input type="submit" name="simpan" value="Simpan">
        </p>
    </form>
    <p>
        <a href="data_siswa.php">Kembali</a>
    </p>
</body>
</html>
