<?php
    include "myconnection.php";

    $nama = $_POST["mynama"];
    $alamat = $_POST["myalamat"];
    $nama_obat = $_POST["mynao"];
    $jumlah = $_POST["myjml"];
    $harga_obat = $_POST["myharo"];
    $ongkir = $_POST["myongkir"];
    $total = $_POST["mytotal"];

    $query = "INSERT INTO transaksi(nama, alamat, nama_obat, jumlah, harga_obat, ongkir, total)
            VALUES('$nama', '$alamat', '$nama_obat', '$jumlah', '$harga_obat', '$ongkir', '$total')";

    if(mysqli_query($connect, $query)){
        header('Location:struk.php');
    }
    else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>