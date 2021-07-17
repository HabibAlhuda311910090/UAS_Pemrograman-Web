<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5" />
    <title>LOKET 3 LOG</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <?php 
        include '../../database.php';
        include '../session_check.php';

        $antrian = mysqli_query($databaseconn,"SELECT * FROM log_loket3 ORDER BY `log_loket3`.`id_log` ASC");
    ?>
</head>

<body>
    <br />
    <center>
        <h2>LOG HISTORY FOR LOKET 3</h2>
        <div class="container b">
            <h4>User Active :
                <span class="user_login">
                    <?php echo $_SESSION['username']; ?>
                </span>|
                <a class="link" href="../../logout.php">Logout</a>
            </h4>
        </div>
    </center>
    <div class="container b">
        <a class="back" href="../admin-loket3.php">Back</a>
        <table>
            <thead>
                <tr>
                    <th>Id Log</th>
                    <th>Id Antrian</th>
                    <th>Nomor Antrian</th>
                    <th>Waktu Pengambilan</th>
                    <th>Waktu Selesai</th>
                </tr>
            </thead>
            <tbody>
                <?php 
			while($b = mysqli_fetch_array($antrian)){
		    ?>
                <tr>
                    <td><?php echo $b['id_log']; ?></td>
                    <td><?php echo $b['id_antrian']; ?></td>
                    <td><?php echo $b['nomor_antrian']; ?></td>
                    <td><?php echo $b['waktu_diambil']; ?></td>
                    <td><?php echo $b['waktu_selesai']; ?></td>
                </tr>
                <?php 
			}
		    ?>
            </tbody>
        </table>
        <form action="reset.php" method="post">
            <div>
                <input type="submit" value="Reset Antrian" name="reset_loket3" id="btn-reset">
            </div>
        </form>
    </div>
</body>

</html>