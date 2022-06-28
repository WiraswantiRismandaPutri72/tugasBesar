<?php
    include "myconnection.php";

    $id = $_GET["id"];

    $query = "DELETE FROM obat WHERE id=$id";

    if(mysqli_query($connect, $query)){
        header('Location:obatCRUD.php');
    }
    else{
        echo "Data gagal dihapus <br>". mysqli_error($connect);
    }

    mysqli_close();
?>