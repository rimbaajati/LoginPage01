<?php
require "config.php";

 
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    //var_dump($nama);
    //die();

    
    $query_sql = "INSERT INTO mahasiswaitspku.users (id, nama, username, password) VALUES ('$id', '$nama', '$username', '$password')";
    if (mysqli_query($koneksi, $query_sql)) {
       
        header("Location: index.html");
        exit();
    } else {
       
        echo "Pendaftaran Gagal: " . mysqli_error($koneksi);
    }//else {
    echo "Form error";

?>
