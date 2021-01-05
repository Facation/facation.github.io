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
    <title>Facation | Registration</title>
</head>
<body>

    <?php include "includes/navbar.php"; ?>
    
     <!-- ---Header Section----- -->
   <section id="banner"> 
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                <p class="header-tittle">Web on Vacation</p>
                <p class="text-justify">Silakan Log In untuk memastikan akun Anda sudah terdaftar!</p>
                <!-- <a href="daftar.php"><button class="btn btn-outline-secondary lg-btn"><img src="../assets/images/login.png" alt=""> Sign Up</button></a> -->
               </div>
              <div class="col-md-6 text-center">
                <img src="assets/images/ilustrasi1.png" class="img-fluid">
              </div>
            </div>
        </div>
    </div>

        <img src="assets/images/wave.png" class="bottom-img">

   </section> 

  
      <?php
        require_once 'includes/koneksi.php';

        // $username = strtolower(stripslashes($_POST['username']));
        $username = $_POST['username'];
        // $password = $_POST['password'];
        $password = md5($_POST['password']);
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        // if ($result){
        //   echo "<script>
        //         alert('Username sudah terdaftar!')
        //   </script>";

        //   return false;
        // }

        $sql = "INSERT INTO akun (username,password,nama,email) VALUES
          ('$username', '$password', '$nama','$email')";

        if($koneksi->query($sql)===TRUE){
          echo "<script>
              alert('Registrasi Anda Berhasil');
                </script>";
        } else {
            echo "<script>
            alert('Terjadi kesalahan:');
              </script>" .$sql."<br/>".$koneksi->error;
        }

        
        $koneksi->close();
     
      ?>

    </section>
</body>
</html>