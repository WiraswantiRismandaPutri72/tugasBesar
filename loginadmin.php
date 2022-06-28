<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="ut-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Apotek SEHAT</title>
        <!-- Menyisipkan Bootsrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- Menyisipkan Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="login.css">
        <script src="https://kit.fontawesome.com/a9a9f028f4.js" crossorigin="anonymous"></script>
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
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">HOME</a>
                </li>
              </ul>
            </div> 
          </nav>

          <?php
            if(isset($_GET["error"])){
                $error = $_GET["error"];
            }
            else{
                $error = "";
            }

            $message = "";
            if($error=="gagal"){
                $message = "Gagal login, silahkan coba kembali";
            }
        ?>

        <div class="container">
            <hr>
            <h3 class="text-center">LOGIN ADMIN</h3>
            <hr>
           <form action="multiProcess.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i>
                </div>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username anda">
            </div>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-unlock-alt"></i>
                </div>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password anda">
            </div>
            </div>
            <button type="submit" class="btn btn-success" name="login" value="Login">Login</button>
            <button type="submit" class="btn btn-danger">Reset</button>
           </form>
        </div>
<br><br><br><br><br>
        <footer class="bg-light text-center text-lg-start">
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color:#379683;">
            © 2020 Copyright:
            <a class="text-dark" href=" ">DRUGSTORE</a>
          </div>
          <!-- Copyright -->
        </footer>
        </div>
    </body>
</html>
