
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2>SI Sekolah | Data Siswa</h2>
    <a href="tambah.php">+ Tambah Data</a>
    <br/>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        <?php
            include 'koneksi.php';
            $no = 1;
            $query = mysqli_query($konek, "SELECT * FROM siswa");
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                        <a href="hapus.php?id=<?php echo $data['id']; ?>"
                            onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus 
                        </a>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>