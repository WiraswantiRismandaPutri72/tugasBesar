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

    $query = "CREATE TABLE obat(
                id_obat INT PRIMARY KEY AUTO_INCREMENT,
                nama_obat VARCHAR(100) NOT NULL,
                jenis_obat VARCHAR(100) NOT NULL,
                stok_obat INT(50),
                harga_obat INT(11) NOT NULL)";

    if(mysqli_query($connect, $query)){
        echo "Tabel student berhasil dibuat";
    }
    else{
        echo "Tabel student gagal dibuat <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>