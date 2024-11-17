<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IfElse dalam php</title>
    
</head>

<body>
    <h1>E-Mart</h1>
    <hr>

    <form method="POST" action="">
        <label for="pelanggan_loyal">Apakah Anda pelanggan loyal?</label>
        <select id="pelanggan_loyal" name="pelanggan_loyal" required>
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>
        <br><br>

        <label for="total_belanja">Masukkan total belanja anda </label>
        <input type="number" id="total_belanja" name="total_belanja">
        <br><br>

        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['pelanggan_loyal']) && isset($_POST['total_belanja'])) {
        $pelanggan_loyal = $_POST['pelanggan_loyal'];
        $total_belanja = floatval($_POST['total_belanja']);

        echo "<div class='result'>";
        echo "<p>Total Belanja Anda: Rp" . number_format($total_belanja, 2, ',', '.') . "</p>";

        if ($pelanggan_loyal === "ya") {
            $diskon = $total_belanja * 0.1; // 10% diskon
            $total_setelah_diskon = $total_belanja - $diskon;

            echo "<p>Selamat, Anda mendapatkan diskon loyalitas sebesar Rp" . number_format($diskon, 2, ',', '.') . ".</p>";
            echo "<p>Total belanja setelah diskon: Rp" . number_format($total_setelah_diskon, 2, ',', '.') . ".</p>";
        } else {
            echo "<p>Terima kasih sudah berbelanja, tingkatkan status loyalitas Anda untuk mendapatkan diskon.</p>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>