<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "apotek";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect){
        echo "Koneksi ke MySQL berhasil <br>";
    }
    else{
        echo "Koneksi ke MySQL gagal". mysqli_connect_error();
    }

    $query = "CREATE TABLE user(
                id_user INT PRIMARY KEY AUTO_INCREMENT,
                nama_user VARCHAR(100) NOT NULL,
                alamat VARCHAR(100) NOT NULL,
                jarak INT(50) NOT NULL)";

    if(mysqli_query($connect, $query)){
        echo "Tabel user berhasil dibuat";
    }
    else{
        echo "Tabel user gagal dibuat <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>