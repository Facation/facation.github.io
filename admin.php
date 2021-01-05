<?php
include ("includes/koneksi.php");
if(empty($_SESSION['nama'])){	   //kl session kosong dialihkan ke error.php
  header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <script src="assets/js/jquery-slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Facation | Admin</title>
</head>
<body>

<!-- -----Navbar------ -->
<section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php"><img src="logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Activities</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Guidance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-disabled="true" disabled>|</a>
                </li>
                <li class="nav-item">
                  <a style="cursor: pointer;" class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>
            </div> 
          </nav>   
    </section>

  <header>
  <section id="banner"> 
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                  <div class="text-center">
                      <h1>Selamat Datang <br> <?php echo $_SESSION['nama'] ?></h1>
                  </div>
            </div>
        </div>
    </div>
        <img src="assets/images/wave.png" class="bottom-img">
  </section>
  </header>

  <section id="services">
       <div class="container text-center">
           <h1 class="tittle">Admin Area </h1>
      </div>
  </section>
</body>
</html>