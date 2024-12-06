<?php
    $konek = mysqli_connect("localhost","root", "", "sekolahanb");
    if (!$konek) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="" method="POST">
        <fieldset>
            <p>
                <label for="nama_siswa">Nama : </label>
                <input type="text" name="nama_siswa" placeholder="nama lengkap">
            </p>
            <p>
                <label for="alamat_siswa">Alamat: </label>
                <textarea name="alamat_siswa"></textarea>
            </p>
            <p>
                <label for="jk_siswa">Jenis Kelamin: </label>
                <label><input type="radio" name="jk_siswa" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jk_siswa" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="agama_siswa">Agama: </label>
                <select name="agama_siswa">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="asal_sekolah">Sekolah Asal: </label>
                <input type="text" name="asal_sekolah" placeholder="nama sekolah" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar"/>
            </p>
        </fieldset>
        </form>

        <button><a href="index.php">Kembali</a></button>

        <?php
            if(isset($_POST["daftar"])){
                //mengambil data dari formulir
                $nama_siswa = mysqli_real_escape_string($konek, $_POST['nama_siswa']);
                $alamat_siswa = mysqli_real_escape_string($konek, $_POST['alamat_siswa']);
                $jk_siswa = mysqli_real_escape_string($konek, $_POST['jk_siswa']);
                $agama_siswa = mysqli_real_escape_string($konek, $_POST['agama_siswa']);
                $asal_sekolah = mysqli_real_escape_string($konek, $_POST['asal_sekolah']);    

                //buat query
                $sql = "INSERT INTO data_siswa (nama_siswa, alamat_siswa, jk_siswa, agama_siswa, asal_sekolah) 
                        VALUES ('$nama_siswa', '$alamat_siswa', '$jk_siswa', '$agama_siswa', '$asal_sekolah')";
                $query = mysqli_query($konek, $sql);

                //apakah query sudah berhasil atau tidak
                if($query){
                    header('Location: index.php?status=sukses');
                } else {
                    header('Location: index.php?status=gagal');
                }
            }
        ?>
</body>
</html>