<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Project RPL</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url()?>loginController"><b>SICBL</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div class="container">
		<div class="row">
		<div class="col-lg-6">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<h1>Isilah Form dibawah ini</h1>
			<br>
			<br>
			<br>
			<br>
			<form class="form-inline" role="form" method="POST" name="registerForm" enctype="multipart/form-data" action="<?php echo base_url()?>registerController/register">
				<div class="form-group">
					<table border='0'>
					<tr><td><h4>Username 	 : </td><td><input type="text" class="form-control" name="username" placeholder="Tuliskan username anda disini"> </h3></td></tr>
					<tr><td><h4>Password 	 : </td><td><input type="password" class="form-control" name="password" placeholder="Tuliskan password anda disini" > </h3></td></tr>
					<tr><td><h4>Nama Lengkap : </td><td><input type="text" class="form-control" name="nama" placeholder="Tuliskan nama lengkap anda disini"> </h3></td></tr>
					<tr><td><h4>Email		 : </td><td><input type="text" class="form-control" name="email" placeholder="Tuliskan email anda disini"> </h3></td></tr>
					<tr><td><h4>Foto	 	 : </td><td><input type="file" class="form-control" name="foto" ></h3></td></tr>
					</table>
				 </div>
				<br>
				<br>
				
				<button type="submit" class="btn btn-warning btn-lg" value="Login">Daftar</button>
			</form>
		</div>
		<div class="col-lg-6">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<img class="img-responsive" src="<?php echo base_url()?>assets/img/ser03.png" width="400" height="800" alt="">
		</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">
				<h1>Our Awesome Team</h1>
			</div>
		</div><!-- /row -->
		<div class="row mt centered">
			<div class="col-lg-4">
				<img class="img-circle" src="<?php echo base_url()?>assets/img/pic1.png" width="140" height="140" alt="">
				<h4>Daffarez Elguska </h4>
			</div><!--/col-lg-4 -->

			<div class="col-lg-4">
				<img class="img-circle" src="<?php echo base_url()?>assets/img/pic1.png" width="140" height="140" alt="">
				<h4>Maulana Putra P</h4>
			</div><!--/col-lg-4 -->

			<div class="col-lg-4">
				<img class="img-circle" src="<?php echo base_url()?>assets/img/pic1.png" width="140" height="140" alt="">
				<h4>Erma Rafliza </h4>
			</div>
			
			<div class="col-lg-4">
				<img class="img-circle" src="<?php echo base_url()?>assets/img/pic1.png" width="140" height="140" alt="">
				<h4>Sri Wahyuni</h4>
			</div>
			<div class="col-lg-4">
				<img class="img-circle" src="<?php echo base_url()?>assets/img/pic1.png" width="140" height="140" alt="">
				<h4>Andika Harlan</h4>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	<div class="container">
		<hr>
		<hr>
		<p class="centered">Created by BlackTie.co - Attribution License 3.0 - 2013</p>
	</div><!-- /container -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
