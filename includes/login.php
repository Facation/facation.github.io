<?php
include ("koneksi.php");

if(isset($_POST['btn-login']))
{
  $user_login=$_POST['username'];
  $pass_login=md5($_POST['password']);

  // echo $user_login;
  // echo "   ";
  // echo $pass_login;

  $sql = "SELECT * FROM akun WHERE username = '{$user_login}' AND password = '{$pass_login}'";
  $query = mysqli_query($koneksi, $sql);
  $count = mysqli_num_rows($query);

  if(!$query){
    die("Query gagal " . mysqli_error($koneksi));
  }
  if(!empty($user_login) && (!empty($pass_login))){
    if($count==0){
      echo "<script>alert('Username Not Found')</script>";
    } else {
      while ($row = mysqli_fetch_array($query)){
      $user = $row['username'];
      $pass = $row['password'];
      $nama = $row['nama'];
      $email = $row['email'];
    }
    if($user_login == $user && $pass_login == $pass){      
      header("location:../admin.php");
      $_SESSION['username'] = $user;
      $_SESSION['nama'] = $nama;
      $_SESSION['email'] = $email;
     } else {
      echo "<script>
                alert('User tidak ditemukan!')
          </script>";
     }
   }
 }else {
   if(empty($user_login) || empty($pass_login)){
     echo "<script>
                alert('Username atau password tidak boleh kosong!')
          </script>";
   }
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" >
    <script src="../assets/js/jquery-slim.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Facation | Login</title>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" >
    <script src="../assets/js/jquery-slim.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Facation | Registration</title>
</head>
<body>

    <!-- -----Navbar------ -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../index.php"><img src="../assets/images/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
          </nav>   
    </section>
    
    <!-- Login Form -->
    <section id="login">
    <div class="hero1">
        <div class="form-box2">
            <div class="button-box2">
                <div id="btn1"></div>
                <button type="button" class="toggle-btn">Log In!</button>
            </div>
            <div class="social-icons1">
                <a href="https://web.facebook.com/" target="_blank"><img src="../assets/images/icon/facebook-icon.png"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="../assets/images/icon/instagram-icon.png"></a>
                <a href="https://twitter.com/" target="_blank"><img src="../assets/images/icon/twitter-icon.png"></a>
            </div>
            <form method="POST" class="input-group">
              <input type="text" class="input-field" name="username" placeholder="Username" required>
              <input type="password" class="input-field" name="password" placeholder="Password" required>
              <p class="regis">Don't have account?<a class="new-account" href="../daftar.php"> Register here!</a></p>  
              <button type="submit" class="btn-login" name="btn-login">Login</button>
          </form>
    </div>
    </section>
</body>
</html>