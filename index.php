<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form PHP</title>
</head>
<body>
    <h2>Form Login</h2>
    <form method="POST" action="">
        <label>Nama Pengguna:</label><br>
        <input type="text" name="username"><br><br>
        <label>Kata Sandi:</label><br>
        <input type="password" name="password"><br><br>
        <button type="submit" name="submit">Login</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "<h3>Data yang dimasukkan:</h3>";
        echo "<p>Username: " . htmlspecialchars($username) . "</p>";
        echo "<p>Password: " . htmlspecialchars($password) . "</p>";
    }
    ?>
</body>
</html>