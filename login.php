 <?php 
 
 ?>
 <?php 
require_once("config.php");
if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM akun_chair WHERE username=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":email" => $username
         
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["role"] = $username;
            // login sukses, alihkan ke halaman timeline
            header("Location: index.php");
        }
        else{
             echo "<script>alert('Password salah, Coba Lagi.');</script>";
             header("Refresh:0");
        }
    }
    else{
         echo "<script>alert('Username tidak terdaftar atau akun belum terverifikasi, silahkan coba lagi dengan username yang benar atau tunggu admin memverifikasi akun anda.');</script>";
         header("Refresh:0");
    }
}

?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assetslogin-path="assetslogin/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login Chair Cosite</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assetslogin/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assetslogin/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assetslogin/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assetslogin/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assetslogin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="assetslogin/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="assetslogin/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assetslogin/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.php" class="app-brand-link gap-2">
                  <span class="app-brand-logo">
                       <center>
                    <img src="https://akademisi.co.id/images/akademisi.png" height="100" alt="Avatar" class="image">
                   
                    Sistem Website Conference
                    </center>
                  </span>
             
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Login Chair Conference </h4>
              <p class="mb-4">Masukan Username dan Password anda untuk masuk ke dashboard.</p>

              <form class="form-login" method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="username"
                    placeholder="Masukan username anda"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                   <!-- <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a>-->
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Ingat Saya </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button style="background: linear-gradient(24deg, rgba(7,207,220,1) 0%, rgba(27,138,195,1) 92%);" type="submit" name="login" class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
                </div>
              </form>

            
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <div class="buy-now">
      <a
        href="#"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Contact US</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assetslogin/vendor/js/core.js -->
    <script src="assetslogin/vendor/libs/jquery/jquery.js"></script>
    <script src="assetslogin/vendor/libs/popper/popper.js"></script>
    <script src="assetslogin/vendor/js/bootstrap.js"></script>
    <script src="assetslogin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assetslogin/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assetslogin/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
