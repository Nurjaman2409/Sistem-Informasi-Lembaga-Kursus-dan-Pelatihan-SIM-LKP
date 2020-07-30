<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <link href="img/logo/logo.png" rel="icon"> -->
  <title>LKP - Login</title>
  <link href="<?php echo base_url("asset/vendor/fontawesome-free/css/all.min.css")?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url("asset/vendor/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url("asset/css/ruang-admin.min.css")?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <!-- Login Content -->
  <div class="container-login mt-5">
    <div class="row justify-content-center">
      <div class="col-xl-9 col-lg-12 col-md-12">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <img src="<?php echo base_url("asset/img/logo/logo.png")?>" class="mb-1" width="30%" alt="">
                    <h1 class="h4 text-gray-900 mb-4"><b>SIM</b> LKP-DAINFO</h1>
                  </div>

                  <form class="user" action="<?php echo base_url("index.php/login/auth")?>" method="POST">
                    <div class="form-group">
                      <input type="text" name="user" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass" class="form-control" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <hr>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    </div>
                  </form>

                  <hr>
                  <div class="text-center">
                    <small>Sistem Informasi Manajemen Lembaga Kursus Pelatihan Dadaha Informatik <br> Kota Tasikmalaya</small>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="<?php echo base_url("asset/vendor/jquery/jquery.min.js")?>"></script>
  <script src="<?php echo base_url("asset/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
  <script src="<?php echo base_url("asset/vendor/jquery-easing/jquery.easing.min.js")?>"></script>
  <script src="<?php echo base_url("asset/js/ruang-admin.min.js")?>"></script>
</body>

</html>