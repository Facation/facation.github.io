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
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-disabled="true" disabled>|</a>
                </li>
                <li class="nav-item">
                  <a style="cursor: pointer;" class="nav-link" href="includes/login.php">Login</a>
                </li>
              </ul>
            </div>
          </nav>   
    </section>
    
    <!-- Register Form -->
    <section id="register">
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn">Sign Up!</button>
            </div>
            <div class="social-icons2">
                <a href="https://web.facebook.com/" target="_blank"><img src="assets/images/icon/facebook-icon.png"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="assets/images/icon/instagram-icon.png"></a>
                <a href="https://twitter.com/" target="_blank"><img src="assets/images/icon/twitter-icon.png"></a>
            </div>
            <form action="register.php" method="POST" class="input-group">
                <input type="text" class="input-field" name="username" placeholder="Username" required>
                <input type="password" class="input-field" name="password" placeholder="Password" required>
                <input type="text" class="input-field" name="nama" placeholder="Enter Your Name" required>
                <input type="email" class="input-field" name="email" placeholder="Enter Your Email" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="btn-daftar" naeme="btnDaftar">Sign Up</button>
            </form>
        </div>
    </div>
    </section>
</body>
</html>