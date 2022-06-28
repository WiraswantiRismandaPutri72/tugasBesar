<?php
    include "myconnection.php";

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM admin WHERE USERNAME='$username' && password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['level'] == "1"){
        header("Location:halamanAdmin.php");
    }
    else if($row['level'] == "2"){
        header("Location:homeGuest.html");
    }
    else{
        header("Location:multiLogin.php?error=gagal");
    }
?>

<?php
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if($user=="admin" && $pass=="123"){
        session_start();
        $_SESSION["username"] = $user;
        $_SESSION["role"] = "Administrator";
        header("Location:halamanAdmin.php");
    }
    else{
        echo "Username atau password tidak sesuai <br>";
        echo '<a href="loginForm.html">Kembali ke Halaman Login</a>';
    }
?>