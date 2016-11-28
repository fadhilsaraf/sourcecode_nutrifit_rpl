<!DOCTYPE html>
<html lang="en">
  <body>
	<div class="container">
		<div class="row">
		<div class="col-lg-6">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<h1>Editlah data diri anda pada form dibawah ini : </h1>
			<br>
			<br>
			<form class="form-inline" role="form" method="POST" name="registerForm" enctype="multipart/form-data" action="<?php echo base_url()?>editProfilController/update/<?php echo $this->session->userdata('NOID')?>">
				<div class="form-group">
					<table border='0'>
					<tr><td><h4>Username 	 : </td><td><input type="text" class="form-control" name="username" placeholder="Tuliskan username anda disini" value="<?php echo $user->Username; ?>"> </h3></td></tr>
					<tr><td><h4>Password 	 : </td><td><input type="text" class="form-control" name="password" placeholder="Tuliskan password anda disini" > </h3></td></tr>
					<tr><td><h4>Nama Lengkap : </td><td><input type="text" class="form-control" name="nama" placeholder="Tuliskan nama lengkap anda disini" value="<?php echo $user->NamaLengkap; ?>"> </h3></td></tr>
					<tr><td><h4>Email		 : </td><td><input type="text" class="form-control" name="email" placeholder="Tuliskan email anda disini" value="<?php echo $user->Email; ?>"> </h3></td></tr>
					<tr><td><h4>Foto	 	 : </td><td><input type="file" class="form-control" name="foto" ></h3></td></tr>
					</table>
				 </div>
				<br>
				<br>
				
				<button type="submit" class="btn btn-warning btn-lg" value="uptade">Submit</button>
			</form>
		</div>
		<div class="col-lg-6">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<img class="img-responsive" src="<?php echo base_url()?>assets/img/ser03.png" width="450" height="850" alt="">
		</div>
		</div>
	</div>
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
