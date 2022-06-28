<?php
    include "myconnection.php";

    $target_path = "foto/";

    $target_path = $target_path . basename(
        $_FILES['myphoto']['name']);

    if(move_uploaded_file($_FILES['myphoto']['tmp_name'],$target_path)){
        $foto = $target_path;
    }

    $nama_obat = $_POST["myobat"];
    $jenis_obat = $_POST["myjenis"];
    $deskripsi = $_POST["mydeskripsi"];
    $stok_obat = $_POST["mystok"];
    $harga_obat = $_POST["myharga"];

    $query = "INSERT INTO obat(nama_obat, jenis_obat, deskripsi, stok_obat, harga_obat, photo)
            VALUES('$nama_obat', '$jenis_obat', '$deskripsi', '$stok_obat', '$harga_obat', '$foto')";

    if(mysqli_query($connect, $query)){
        header('Location:obatCRUD.php');
    }
    else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>