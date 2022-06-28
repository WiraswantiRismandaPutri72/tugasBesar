<?php
    require "myconnection.php";
    $queryProduk = mysqli_query($connect,"SELECT nama_obat,jenis_obat,deskripsi, stok_obat,harga_obat,photo FROM obat");
?>

<html lang="en">
<head>
  <title>Apotek SEHAT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a9a9f028f4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php require "navbar.php";?>    
    
    <div class="container-fluid banner d-flex align-items-center">
      <div class="container text-center">
        <h1>SELAMAT DATANG DI APOTEK "SEHAT"</h1>
        <h3>Kini kami hadir di dekat Anda!</h3>
        <div class="col-md-8 offset-md-2"> 
        </div>
      </div>
    </div>

    <div class="container-fluid warna py-5">
      <div class="container text-center">
        <h2>Tentang Kami</h2>
        <p>
          Lebih dari 10 tahun eksistensi kami di bidang farmasi, khususnya dibidang obat-obatan.
          Kami menyediakan obat dengan harga terbaik (termurah) dan mutu yang terjamin keasliannya.
        </p>
      </div>
    </div>

    <div class="container-fluid py-5">
      <div class="container text-center">
      <h3 class="text-center">Daftar Obat</h3>
      <br>
        <div class="row mt-2">
          <?php while($data = mysqli_fetch_array($queryProduk)){?>
          <div class="col-sm-2 col-md-3 mb-3">
                  <div class="card">
                      <img class="card-img-top" src="<?php echo $data["photo"];?>" width=80 height=200>
                      <div class="card-body">
                        <h4 class="card-title"><?php echo $data['nama_obat'];?></h4>
                        <p class="text-center "><?php echo $data['deskripsi'];?></p>
                        <p class="text-center">Rp.<?php echo $data['harga_obat'];?></p>     
                   </div>
                  </div>
                  </div>
          <?php } ?>
      </div>
</div>
<BR>
<?php require "footer.php";?>   
</body>
</html>


