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

    $query = "CREATE TABLE transaksi(
                nama VARCHAR(100) NOT NULL,
                alamat VARCHAR(100) NOT NULL,
                nama_obat VARCHAR(50) NOT NULL,
                jumlah INT(50) NOT NULL,
                harga_obat INT(11) NOT NULL,
                ongkir INT(11),
                total INT(20) NOT NULL)";

    if(mysqli_query($connect, $query)){
        echo "Tabel transaksi berhasil dibuat";
    }
    else{
        echo "Tabel transaksi gagal dibuat <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>