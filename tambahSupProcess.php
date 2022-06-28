<?php
    include "myconnection.php";

    $nama_supplier = $_POST["mysup"];
    $no_tlp = $_POST["mytlp"];

    $query = "INSERT INTO supplier(nama_supplier, no_tlp)
            VALUES('$nama_supplier', '$no_tlp')";

    if(mysqli_query($connect, $query)){
        header('Location:supplierCRUD.php');
    }
    else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>