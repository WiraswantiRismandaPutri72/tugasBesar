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

    <a href="supplierCRUD.php" class="btn btn-outline-dark ml-auto">Kembali</a>
  </div> 
</nav>
<div class="container mt-5">

<?php
  include "myconnection.php";
  $id = $_GET['id'];
  $query = "SELECT * FROM supplier WHERE id=$id";
  $result = mysqli_query($connect,$query);
?>

<form action="supplierProcess.php" method="post" enctype="multipart/form-data">
<h2 class="text-center" > EDIT DATA SUPPLIER</h2>
<?php
  while($row=mysqli_fetch_array($result)){
?>
  <div class="form-group">
    <label for="id_supplier">ID Supplier :</label>
    <input type="text" class="form-control" name="myid" value="<?php echo $row['id'];?>" readonly>
  </div>
  <div class="form-group">
    <label for="nama_supplier">Nama Supplier : </label>
    <input type="text" class="form-control" name="mysup" value="<?php echo $row['nama_supplier'];?>">
  </div>
  <div class="form-group">
    <label for="no_telp">NO Hp : </label>
    <input type="text" class="form-control" name="mytlp" value ="<?php echo $row['no_tlp'];?>">
  </div>
  <button type="submit" class="btn btn-primary" name="save" value="Simpan">Submit</button>
</form> 
<div>
<?php
  }
?>
      
</body>