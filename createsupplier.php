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

    $query = "CREATE TABLE supplier(
                id_supplier INT PRIMARY KEY AUTO_INCREMENT,
                nama_supplier VARCHAR(100) NOT NULL,
                no_tlp VARCHAR(12) NOT NULL)";

    if(mysqli_query($connect, $query)){
        echo "Tabel supplier berhasil dibuat";
    }
    else{
        echo "Tabel supplier gagal dibuat <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>