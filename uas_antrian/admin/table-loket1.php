<h4>Daftar Antrian Loket 1</h4>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nomor Antrian</th>
            <th>Waktu</th>
        </tr>
    </thead>
    <tbody>
        <?php 
			$antrian = mysqli_query($databaseconn,"SELECT * FROM loket1 ORDER BY `loket1`.`id_antrian` ASC");
			while($b = mysqli_fetch_array($antrian)){
		?>
        <tr>
            <td><?php echo $b['id_antrian']; ?></td>
            <td><?php echo $b['nomor_antrian']; ?></td>
            <td><?php echo $b['waktu']; ?></td>
        </tr>
        <?php 
			}
		?>
    </tbody>
</table>
<a class="loglink" href="log/log-loket1.php">View Log</a>
<a class="button master" href="admin-loket1.php?antrian=show">Refresh</a>
<a class="button master" href="admin-loket1.php">Close</a>