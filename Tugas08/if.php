<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunan IF dalam PHP</title>
</head>
<body>
    <h1>Lucky.my</h1>
    <hr>

    <h3>Cek apakah nomermu yang beruntung?</h3>
    <form action="" method="post">
        <label for="bb">Silahkan masukkan nomer kartu:</label>
        <input type="number" name="bb" id="bb" required>
        <br><br>

        <button type="submit">Cek</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $bb = $_POST["bb"];

        echo"<h2>Hasil</h2>";
        echo"<p>Nomer kartu dengan seri : $bb</p>";
        if ($bb == 18634) {
            echo "<p>Selamat, anda mendapatkan hadiah utama.</p>";
        } else {
            echo "<p>Maaf, sepertinya anda kurang beruntung.</p>";
        }
    }
    ?>
</body>
</html>