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

        $querya = mysqli_query($databaseconn, "SELECT min(nomor_antrian) as antrianTerkecil FROM loket1");
	    $dataa = mysqli_fetch_array($querya);
	    $antriana = $dataa['antrianTerkecil'];

        $queryb = mysqli_query($databaseconn, "SELECT min(nomor_antrian) as antrianTerkecil FROM loket2");
	    $datab = mysqli_fetch_array($queryb);
	    $antrianb = $datab['antrianTerkecil'];

        $queryc = mysqli_query($databaseconn, "SELECT min(nomor_antrian) as antrianTerkecil FROM loket3");
	    $datac = mysqli_fetch_array($queryc);
	    $antrianc = $datac['antrianTerkecil'];
    ?>
</head>

<body>
    <br />
    <center>
        <h2>SELAMAT DATANG DI PUSKESMAS BERSAMA!</h2>
        <h4 class="title">Mohon untuk menunggu sesuai antrian</h4>
    </center>
    <div class="container s">
        <h4>Loket 1 Pemeriksaan Oleh Dokter</h4>
        <div class="banner loket1">
            <p class="font normal">
                <?php
                    if(isset($_GET['pesan'])){
		                if($_GET['pesan'] == "called"){
			                echo $antriana;
                            echo '<br/> Silahkan Ke Loket 1';
		                }
	                } else {
                        echo "<a class='link' href='../homepage/homepage.php?pesan=called'>Refresh Page</a><br/>";
                    }
                ?>
                <br />
            </p>
            <p class="font small">
                Antrian Tersisa :
                <?php
                    echo $antrian1
                ?> Antrian
            </p>
        </div>
        <h4>Loket 2 Pembayaran</h4>
        <div class="banner loket2">
            <p class="font normal">
                <?php
                    if(isset($_GET['pesan'])){
		                if($_GET['pesan'] == "called"){
			                echo $antrianb;
                            echo '<br/> Silahkan Ke Loket 2';
		                }
	                } else {
                        echo "<a class='link' href='../homepage/homepage.php?pesan=called'>Refresh Page</a><br/>";
                    }
                ?>
                <br />
            </p>
            <p class="font small">
                Antrian Tersisa :
                <?php
                    echo $antrian2
                ?> Antrian
            </p>
        </div>
        <h4>Loket 3 Customer Service</h4>
        <div class="banner loket3">
            <p class="font normal">
                <?php
                    if(isset($_GET['pesan'])){
		                if($_GET['pesan'] == "called"){
			                echo $antrianc;
                            echo '<br/> Silahkan Ke Loket 3';
		                }
	                } else {
                        echo "<a class='link' href='../homepage/homepage.php?pesan=called'>Refresh Page</a><br/>";
                    }
                ?>
                <br />
            </p>
            <p class="font small">
                Antrian Tersisa :
                <?php
                    echo $antrian3
                ?> Antrian
            </p>
        </div>
    </div>
</body>

</html>