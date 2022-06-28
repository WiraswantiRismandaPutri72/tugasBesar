<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="trans.css">
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
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li> 
              </ul>
              <a href="index.php" class="btn btn-outline-dark ml-auto">Kembali</a>
            </div> 
          </nav>`
  
  <div class="container mt-5">
  <form action="processPembeli.php" method="post" enctype="multipart/form-data">
    <div class="card bg-white text-dark">
        <div class="card-body text-center"><h3>Data Pembeli</h3></div>
                <div class="form-group">
                <label for="nama_user">Nama :</label>
                <input name="myuser" type="text" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input name="myalamat" type="text" class="form-control" placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                <label for="jarak">Jarak :</label>
                <input name="myjarak" type="text" class="form-control" placeholder="Masukkan Jarak">
                </div>
                <button type="submit" class="btn btn-primary" name="send" value="Tambah">Submit</button>
    </div>
  </div>
  </div>
  <br><br><br><br>
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