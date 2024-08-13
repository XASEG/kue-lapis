<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('css/bootstrap.css')?>" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url('font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?= base_url('css/style.css')?>" rel="stylesheet">
    <link href="<?= base_url('css/style-responsive.css')?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-image: url('<?= base_url('assets/img/pic/index.jpg') ?>');
            background-repeat: no-repeat;
            color:#fff;">

    <div id="login-page" style="padding-top:3pc;">
      <div class="container">
        <form class="form-login" method="POST" action="<?=base_url('home/aksi_login')?>">
          <h2 class="form-login-heading">Login</h2>
          <div class="login-wrap">
            <input type="text" class="form-control" name="user" placeholder="Username" autofocus>
            <br>
            <input type="password" class="form-control" name="pass" placeholder="Password">
            <br>
            <button class="btn btn-primary btn-block" name="proses" type="submit"><i class="fa fa-lock"></i> LOGIN</button>
            <br>
            <p class="small mb-0 text-center"><a href="<?= base_url('home/signup') ?>">Don't have an account? Create an account</a></p>
          </div>
        </form>
      </div>
    </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('js/jquery.js')?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
  </body>
</html>