<?php
    include "myconnection.php";

    $nama_user = $_POST["myuser"];
    $alamat = $_POST["myalamat"];
    $jarak = $_POST["myjarak"];

    $query = "INSERT INTO user(nama_user, alamat, jarak)
            VALUES('$nama_user', '$alamat', '$jarak')";

    if(mysqli_query($connect, $query)){
        header('Location:formTransaksi2.html');
    }
    else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>