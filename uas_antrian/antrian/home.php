<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5" />
    <title>Home Antrian</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php 
        include '../database.php';

        $query1 = mysqli_query($databaseconn, "SELECT COUNT(nomor_antrian) as jumlahAntrianloket1 FROM loket1");
        $data1 = mysqli_fetch_array($query1);
        $antrian1 = $data1['jumlahAntrianloket1'];

        $query2 = mysqli_query($databaseconn, "SELECT COUNT(nomor_antrian) as jumlahAntrianloket2 FROM loket2");
        $data2 = mysqli_fetch_array($query2);
        $antrian2 = $data2['jumlahAntrianloket2'];

        $query3 = mysqli_query($databaseconn, "SELECT COUNT(nomor_antrian) as jumlahAntrianloket3 FROM loket3");
        $data3 = mysqli_fetch_array($query3);
        $antrian3 = $data3['jumlahAntrianloket3'];
    ?>
</head>

<body>
    <br />
    <center>
        <h2>SELAMAT DATANG!</h2>
        <h4 class="title">Silahkan Pilih Loket</h4>
    </center>
    <div class="container a">
        <div class="banner loket1">
            <p class="font normal">Loket 1 Pemeriksaan Oleh Dokter :
                <br />
                <br />
                <?php
                echo $antrian1
                ?> Antrian
            </p>
            <a class="button lok1" href="antrian_loket1.php">Ambil Antrian</a>
        </div>
        <br />
        <div class="banner loket2">
            <p class="font normal">Loket 2 Pembayaran :
                <br />
                <br />
                <?php
                echo $antrian2
                ?> Antrian
            </p>
            <a class="button lok2" href="antrian_loket2.php">Ambil Antrian</a>
        </div>
        <br />
        <div class="banner loket3">
            <p class="font normal">Loket 3 Customer Service :
                <br />
                <br />
                <?php
                echo $antrian3
                ?> Antrian
            </p>
            <a class="button lok3" href="antrian_loket3.php">Ambil Antrian</a>
        </div>
        <div>
            <a class="button master" href="../admin/admin-home.php">Admin</a>
        </div>
    </div>
</body>

</html>