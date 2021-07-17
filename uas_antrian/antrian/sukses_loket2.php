<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Antrian Terambil</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

    <?php
        include "../database.php";
    ?>

    <div class="container clogin">
            <?php 
                $barang = mysqli_query($databaseconn,"SELECT max(nomor_antrian) as antrianTerambil FROM loket2");
			    $b = mysqli_fetch_array($barang);
			?>

        <p class="text">Terimakasih Nomor Antrian Anda : 
        <p class="highlight"><?php echo $b['antrianTerambil']; ?></p>
        <a class="back" href="home.php">Homepage</a>
        </form>
    </div>
</body>

</html>