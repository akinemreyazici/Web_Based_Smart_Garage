<?php  
session_start();

// Eğer kullanıcı daha önce giriş yaptıysa ana sayfaya yönlendir
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: ana_sayfa.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="login.php" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="kullaniciAdi">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="sifre">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="bootstrap.js"></script>
</body>
</html>


