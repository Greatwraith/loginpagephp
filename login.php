<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login - SMK TELKOM BANJARBARU</h1>
    <form method="post" action="login_proses.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Masukkan Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Masukkan Password"></td>
            </tr>
            <td></td>
            <td><input type="submit" value="login"></td>
        </table>
    </form>
    <p>Jika belum memiliki akun silahkan klik <a href="form_register.php">Register</a></p>
</body>
</html>