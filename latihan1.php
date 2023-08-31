<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pertambahan</title>
</head>
<body>
    <h2>Kalkulator Pertambahan Sederhana</h2>
    <h2>Nur Muhammad Fadli</h2>
    <form method="post" action="">
        Angka 1: <input type="number" name="angka1" required><br>
        Angka 2: <input type="number" name="angka2" required><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil = $angka1 + $angka2;
        echo "<p>Hasil pertambahan: $hasil</p>";
    }
    ?>
</body>
</html>
