
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

    <a href="sessionLogout.php" class="btn btn-outline-dark ml-auto">Logout</a>
  </div> 
</nav>
<div class="container-fluid py-3">
  <h2 class="text-center">SELAMAT DATANG ADMIN</h2>
    <div class="card mt-5 bg-white text-dark">
          <div class="card-body">
            <h4 class="card-title">CRUD OBAT</h4>
            <p class="card-text">Menampilkan CRUD OBAT.</p>
            <a href="obatCRUD.php" class="card-link">TAMPILKAN</a>
          </div>
          
    </div>
    <div class="card mt-5 bg-white text-dark">
    <div class="card-body">
            <h4 class="card-title">CRUD SUPPLIER</h4>
            <p class="card-text">Menampilkan CRUD SUPPLIER.</p>
            <a href="supplierCRUD.php" class="card-link">TAMPILKAN</a>
          </div>
          
    </div>
    <div class="card mt-5 bg-white text-dark">
    <div class="card-body">
            <h4 class="card-title">CRUD TRANSAKSI</h4>
            <p class="card-text">Menampilkan CRUD TRANSAKSI.</p>
            <a href="#" class="card-link">TAMPILKAN</a>
          </div>
          
    </div>
</div>
</div>
<br>
<div class="container-fluid py-4 main-color">
      <div class="container text-center">
      © 2020 Copyright:
            <a class="text-dark" href=" ">DRUGSTORE</a>
         
      </div>
</div>
  
</body>


</html>