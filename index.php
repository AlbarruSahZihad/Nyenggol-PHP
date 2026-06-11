<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form PHP</title>
    <style>
        body{
            margin: 10vh;
        }
    </style>
</head>
<body>
    <h2>Form Login Mahasiswa</h2>
    <form method="POST" action="" style="align-items: center; ">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="username"><br><br>
        <label>NPM:</label><br>
        <input type="number" name="npm"><br><br>
        <label>Alamat:</label><br>
        <input type="text" name="alamat"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $npm = $_POST['npm'];
        $alamat = $_POST['alamat'];
        echo "<h3>Data yang dimasukkan:</h3>";
        echo "<p>username: " . htmlspecialchars($username) . "</p>";
        echo "<p>npm: " . htmlspecialchars($npm) . "</p>";
        echo "<p>alamat: " . htmlspecialchars($alamat) . "</p>";
    }
    ?>
</body>
</html>