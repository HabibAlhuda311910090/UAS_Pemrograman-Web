<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <br />
    <br />
    <center>
        <h2>HALAMAN LOGIN</h2>
    </center>
    <br />
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<center><p>Maaf username atau password anda salah!</p></center>";
		}else if($_GET['pesan'] == "logout"){
			echo "<center><p>Silahkan login kembali!</p></center>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<center><p>Mohon untuk login terlebih dahulu!</p></center>";
		}else if($_GET['pesan'] == "registrasi_sukses"){
			echo "<center><p>Akun berhasil terdaftar! Silahkan login</p></center>";
		}
	}
	?>
    <div class="container clogin">
        <br />
        <form action="session.php" method="post">
            <div class="area">
                <label>Username:</label>
                <input type="text" name="username" id="username" placeholder="Masukkan username" />
            </div>
            <div class="area">
                <label>Password:</label>
                <input type="password" name="password" id="password" placeholder="Masukkan password" />
            </div>
            <div>
                <input type="submit" value="Sign In" id="btn">
            </div>
            <span class="text">Belum Punya Akun? </span> <a class="link" href="daftar.php">Daftar</a>
        </form>
    </div>
</body>

</html>