<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
    <h2>Buat Akun</h2>
    <form action="proses_daftar.php" method="post">
        <label>Nama:</label><b>
        <input type="text" name="name" required><br><br>

        <label>Username:</label><b>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><b>
        <input type="password" name="password" required><br><br>

        <label>Email:</label><b>
        <input type="text" name="email" required><br><br>

        <label>Tanggal lahir:</label><b>
        <input type="date" name="birth_date" required><br><br>
        <button type="submit">Buat Akun</button>
        <p>Sudah punya akun?<a href="login.php">Login di sini</a></p>

    </form>
</body>
</html>