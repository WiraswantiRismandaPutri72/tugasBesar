<?php
    include "myconnection.php";

    $id = $_POST['myid'];
    $nama_obat = $_POST['myobat'];
    $jenis_obat = $_POST['myjenis'];
    $deskripsi = $_POST['mydeskripsi'];
    $stok_obat = $_POST['mystok'];
    $harga_obat = $_POST['myharga'];
    $foto = $_POST['myphoto'];

    $target_path = "foto/";

    $target_path = $target_path . basename(
        $_FILES['myphoto']['name']);

    if(move_uploaded_file($_FILES['myphoto']['tmp_name'],$target_path)){
        $foto = $target_path;
    }

    $query ="UPDATE obat SET nama_obat='$nama_obat', jenis_obat='$jenis_obat', deskripsi='$deskripsi', stok_obat=$stok_obat, harga_obat=$harga_obat, photo='$foto' WHERE id=$id";

    if(mysqli_query($connect, $query)){
        header('Location:obatCRUD.php');
    }
    else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>