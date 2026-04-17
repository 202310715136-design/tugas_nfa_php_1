<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Ujian</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
        }
        .container {
            width: 400px;
            margin: auto;
            margin-top: 50px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 10px;
            padding: 10px;
            width: 100%;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .hasil {
            margin-top: 20px;
            padding: 10px;
            background-color: #e7f3ff;
            border-left: 5px solid blue;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Nilai Ujian</h2>

    <form method="POST" action="">
        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Nilai Ujian</label>
        <input type="number" name="nilai" required>

        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        // Ambil data dari form
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai'];

        echo "<div class='hasil'>";
        echo "<h3>Hasil:</h3>";
        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Nilai: $nilai <br>";

        // Struktur kendali IF ELSE
        if ($nilai > 70) {
            echo "<b>Status: Lulus</b>";
        } else {
            echo "<b>Status: Remedial</b>";
        }

        echo "</div>";
    }
    ?>
</div>

</body>
</html>