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

    <a href="#" class="btn btn-outline-dark ml-auto">Logout</a>
  </div> 
</nav>

<div class="container">
  <h2 class="text-center mt-5">DATA OBAT DRUGSTORE</h2>     
  <nav class="navbar navbar-expand-sm navbar-dark">
  
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
            $nama = $_GET["carisupplier"];
            include "myconnection.php";

            $query = "SELECT * FROM supplier WHERE nama_supplier LIKE '%$nama%'";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
        ?>
        
        <tr>
        <td> 
            <?php echo $row["id"]; ?> </td>
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
  <a href="supplierCRUD.php" class="btn btn-success" class="btn btn-success" role="button">Kembali ke Home</a>
</div>
</body>
</html>