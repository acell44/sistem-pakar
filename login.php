<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKTB</title>
    <link rel="icon" href="TKTB.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="nav">
            <div class="kiri">
                <img src="logo.png" alt="">
            </div>
            <div class="kanan">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </div>

        <div class="register">
            <div class="daftar">
                <h1>LOGIN</h1>
                <hr>
                <br>
                
                <form method="post" action="login_aksi.php">
                    <table width='100%'>
                        <tr>			
                            <td colspan='3'>Username</td>
                        </tr>
                        <tr>
                            <td colspan='3'><input type="text" name="username" required></td>
                        </tr>
                        <tr>			
                            <td colspan='3'>Password</td>
                        </tr>
                        <tr>
                            <td colspan='3'><input type="password" name="password" required></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td width="35%"></td>
                            <td><input type="submit" value="LOGIN"></td>
                            <td width="35%"></td>
                        </tr>
                        <tr>
                            <td colspan='3'><p><br>Jika anda belum memiliki akun silakan <a href="register.php">REGISTER</a></p></td>
                        </tr>		
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>