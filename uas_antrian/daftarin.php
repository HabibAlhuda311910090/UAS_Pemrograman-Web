<?php

include_once 'database.php';

if (isset($_POST['submit']))
{
    $user = $_POST['username'];
    $password = md5($_POST['password']);

    $regist ="INSERT INTO user_admin VALUES('', '$user','$password')";
    mysqli_query($databaseconn, $regist);
    header('location: index.php?pesan=registrasi_sukses');
}else{
    echo 'Eror Boi';
}

?>