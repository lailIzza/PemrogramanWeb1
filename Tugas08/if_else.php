<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IfElse dalam php</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #5a67d8;
        }
        form {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: #5a67d8;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #4c51bf;
        }
        .result {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .result p {
            margin: 10px 0;
        }
    </style>
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