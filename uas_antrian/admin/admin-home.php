<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5" />
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php 
        include '../database.php';
        include 'session_check.php';

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
        <h2>ADMIN PANEL</h2>
        <div class="container s">
            <h4>User Active :
                <span class="user_login">
                    <?php echo $_SESSION['username']; ?>
                </span>|
                <a class="link" href="../logout.php">Logout</a>
            </h4>
        </div>
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
            <a class="button lok1" href="admin-loket1.php">Kelola Antrian</a>
        </div>
        <br />
        <div class="banner loket2">
            <p class="font normal">Loket 2 Pembayaran & Pengambilan Obat:
                <br />
                <br />
                <?php
                echo $antrian2
                ?> Antrian
            </p>
            <a class="button lok2" href="admin-loket2.php">Kelola Antrian</a>
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
            <a class="button lok3" href="admin-loket3.php">Kelola Antrian</a>
        </div>
        <div>
            <a class="button master" href="../antrian/home.php">Home</a>
        </div>
    </div>
</body>

</html>