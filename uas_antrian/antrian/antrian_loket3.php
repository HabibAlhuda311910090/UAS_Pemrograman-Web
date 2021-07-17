<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Loket Customer Service - Ambil Antrian</title>
</head>

<body>

    <?php
	//koneksi database
	include '../database.php';
 
	// mengambil data antrian terakhir
	$query = mysqli_query($databaseconn, "SELECT max(nomor_antrian) as antrianTerakhir FROM loket3");
	$data = mysqli_fetch_array($query);
	$antrian = $data['antrianTerakhir'];
 
	// mengambil urutan antrian dan menambahkan antrian
	$urutan = (int) substr($antrian, 8, 6);
	$urutan++;
 
	// menambahkan antrian otomatis
	$huruf = "ANTRIAN-";
    $hurufz = "-LOKET3";
	$antrian = $huruf . sprintf("%03s", $urutan) .$hurufz;
	?>

    <br />
    <br />
    <center>
        <h2>AMBIL ANTRIAN</h2>
    </center>
    <br />
    <br />
    <div class="container clogin">
        <a class="back" href="home.php">Back</a>
        <form action="saveantrian.php" method="post">
            <div class="area">
                <label>Nomor Antrian Tersedia:</label>
                <input type="text" name="nomor_antrian" id="noantrian" value="<?php echo $antrian ?>" readonly />
            </div>
            <div>
                <input type="submit" value="Ambil Antrian" name="add_loket3" id="btn">
            </div>
            <?php 
			
                $barang = mysqli_query($databaseconn,"SELECT max(nomor_antrian) as antrianTerakhir FROM loket3");
			    $b = mysqli_fetch_array($barang);
			?>

            <p class="text">Nomor Antrian Terakhir :
            <p class="highlight"><?php echo $b['antrianTerakhir']; ?></p>
            </p>
        </form>
    </div>
</body>

</html>