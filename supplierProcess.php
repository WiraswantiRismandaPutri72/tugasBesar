<?php
    include "myconnection.php";

    $id = $_POST['myid'];
    $nama_supplier = $_POST['mysup'];
    $no_tlp = $_POST['mytlp'];

    $query ="UPDATE supplier SET nama_supplier='$nama_supplier', no_tlp='$no_tlp' WHERE id=$id";

    if(mysqli_query($connect, $query)){
        header('Location:supplierCRUD.php');
    }
    else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>