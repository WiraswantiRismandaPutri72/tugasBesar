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
    <a href="halamanAdmin.php" class="btn btn-outline-dark ml-auto">Kembali</a>
  </div> 
</nav>

<div class="container">
  <h2 class="text-center mt-5">DATA OBAT DRUGSTORE</h2>     
  <nav class="navbar navbar-expand-sm navbar-dark">
  <form class="form-inline" action="searchSupplier.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="carisupplier">
    <button class="btn btn-success" type="submit">Search</button>
</nav>
  </form>
  <a href="tambahsupplier.html" class="btn btn-success" role="button">Tambah Data</a>
  <br><br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID SUPPLIER</th>
        <th>NAMA SUPPLIER</th>
        <th>NO HP</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <?php
                include "myconnection.php";

                $query = "SELECT * FROM supplier";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["id"]; ?> </td>
                <td> <?php echo $row["nama_supplier"]; ?> </td>
                <td> <?php echo $row["no_tlp"]; ?> </td>
                <td>
                    <a href="editSupplier.php?id=<?php echo $row["id"];?>">
                    <button>Edit</button> </a>
                    <a href="deleteSupplier.php?id=<?php echo $row["id"]?>">
                    <button>Hapus</button> </a>
                </td>
            </tr>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
   
  </table>
</div>
<br><br><br><br>
 <!-- Footer -->         
 <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color:#379683;">
    © 2020 Copyright:
    <a class="text-dark" href=" ">DRUGSTORE</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>