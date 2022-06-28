<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="struk.css">
</head>
<body>

<div class="container py-5 ">
        <div class="card main-color">
        <div class="card-body">
            <h3 class="text-center">Struk Pembelian</h3>
            <hr>
<?php
                $promag = 7000;
                $lacodin = 26000;
                $mylanta = 12000 ;
                $jumlah = $_POST["myjml"];
                $nama = $_POST["mynama"];
                


                    if($nama=="Promag"){
                        $harga = $promag*$jumlah;
                    }
                    else if($nama=="Lacodin"){
                        $harga = $lacodin* $jumlah;
                    }else{
                        $harga = $mylanta* $jumlah;
                    }

                    
                     echo "Nama Pembeli : " . $_POST["mynama"] . "<br><br>";
                     echo "Alamat Pembeli : " . $_POST["myalamat"] . "<br><br>";
                     echo "Barang yang dibeli : " . $_POST["mynao"] . "<br><br>";
                     echo "Jumlah Barang: " . $_POST["myjml"] . "<br><br>";
                     echo "Harga Barang: " . $_POST["myharo"] . "<br><br>";
                     echo "Ongkir Rp : " . $_POST["myongkir"] . "<br><br>";
                     echo "Total Bayar : " . $_POST["mytotal"] . "<br><br>";



           ?>
        </div>
        <button type="button" class="btn btn-dark">CETAK</button>


        </div>
</div>

</body>
</html>