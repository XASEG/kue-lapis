<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword">

    <title>Signup</title>

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

  <body style="background-image :url(assets/img/pic/bg.jpg);
            background-repeat: no-repeat;
            color:#fff;">

      <!-- ****************************************************
      MAIN CONTENT
      ***************************************************** -->

     <div id="login-page" style="padding-top:3pc;">
  <div class="container">
    <form class="form-login" method="POST">
      <h2 class="form-login-heading">Signup</h2>
      <div class="login-wrap">
        <input type="text" class="form-control" name="user" placeholder="Username" autofocus>
        <br>
        <input type="password" class="form-control" name="password" placeholder="Password">
        <br>
        <button class="btn btn-primary btn-block" name="proses" type="submit"><i class="fa fa-lock"></i> Signup</button>
        <br>
      </div>
    </form>
  </div>
</div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('js/jquery.js')?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
  </body>
</html>s