<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Admin Loket Customer Service</title>
</head>

<body>

    <?php
	// koneksi database&session
	include '../database.php';
    include 'session_check.php';
 
	// mengambil data antrian terkecil
	$query = mysqli_query($databaseconn, "SELECT min(nomor_antrian) as antrianTerkecil FROM loket3");
	$data = mysqli_fetch_array($query);
	$antrian = $data['antrianTerkecil'];

	?>
    <br />
    <center>
        <h2>ANTRIAN CUSTOMER SERVICE</h2>
    </center>
    <div class="container clogin">
        <a class="back" href="admin-home.php">Back</a>
        <form action="delete.php" method="post">
            <div class="area">
                <label>Nomor Antrian:</label>
                <input type="text" name="nomor_antrian" id="noantrian" value="<?php echo $antrian ?>" readonly />
            </div>
            <div>
                <a class="button master" href="admin-loket3.php?pesan=called">Panggil</a>

                <?php
                    if(isset($_GET['pesan'])){
		                if($_GET['pesan'] == "called"){
			                echo "<center><p class='text'>Antrian Terpanggil</p></center>";
		                }
	                }
                ?>

            </div>

            <div>
                <input type="submit" value="Selesai" name="delete_loket3" id="btn">
            </div>
            <?php 
			
                $barang = mysqli_query($databaseconn,"SELECT max(nomor_antrian) as antrianTerbesar FROM loket3");
			    $b = mysqli_fetch_array($barang);
			?>

            <p class="text">Nomor Antrian Terakhir : <?php echo $b['antrianTerbesar']; ?></p>
        </form>


        <form action="reset.php" method="post">
            <div>
                <input type="submit" value="Reset Antrian" name="reset_loket3" id="btn-reset">
            </div>
        </form>
    </div>
    <div class="container d">
    <?php
        if(isset($_GET['antrian'])){
		    if($_GET['antrian'] == "show"){
			    include 'table-loket3.php';
		    }
	    } else {
            echo '<a class="button master" href="admin-loket3.php?antrian=show">Lihat Antrian</a>';
        }
    ?>
    </div>
</body>

</html>