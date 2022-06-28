<html lang="en">
<head>
  <title>Apotek SEHAT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="nav.css">
  
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark main-color">
  <!-- Brand -->
  <a class="navbar-brand" href="#">DRUGSTORE</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <a href="obatCRUD.php" class="btn btn-outline-dark ml-auto">Kembali</a>
  </div> 
</nav>
<div class="container mt-5">

<?php
  include "myconnection.php";
  $id = $_GET['id'];
  $query = "SELECT * FROM obat WHERE id=$id";
  $result = mysqli_query($connect,$query);
?>

<form action="editProcess.php" method="post" enctype="multipart/form-data">
<h2 class="text-center" > EDIT DATA OBAT</h2>
<?php
  while($row=mysqli_fetch_array($result)){
?>
  <div class="form-group">
    <label for="id_obat">ID Obat :</label>
    <input type="text" class="form-control" name="myid" value="<?php echo $row['id'];?>" readonly>
  </div>
  <div class="form-group">
    <label for="nama_obat">Nama Obat : </label>
    <input type="text" class="form-control" name="myobat" value="<?php echo $row['nama_obat'];?>">
  </div>
  <div class="form-group">
    <label for="jenis_obat">Jenis Obat : </label>
    <input type="text" class="form-control" name="myjenis" value ="<?php echo $row['jenis_obat'];?>">
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi Obat : </label>
    <input type="text" class="form-control" name="mydeskripsi" value="<?php echo $row['deskripsi'];?>">
  </div>
  <div class="form-group">
    <label for="stok_obat">Stok Obat : </label>
    <input type="text" class="form-control" name="mystok" value="<?php echo $row['stok_obat'];?>">
  </div>
  <div class="form-group">
    <label for="harga_obat">Harga Obat : </label>
    <input type="text" class="form-control"  name="myharga" value="<?php echo $row['harga_obat'];?>">
  </div> 
  <div class="custom-file">
  <label for="photo">Gambar Obat : </label>
  <input type="file" name="myphoto" value="<?php echo $row['photo'];?>">
  </div>
  <button type="submit" class="btn btn-primary" name="save" value="Simpan">Submit</button>
</form> 
<div>
<?php
  }
?>
</body>