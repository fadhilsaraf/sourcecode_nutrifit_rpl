<!DOCTYPE html>
<html lang="en">
  <body>
		<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3"><br>
			</div>
		</div><!-- /row -->
		<hr>
			<div class="row">
				<div class="col-lg-6">
				<img class="img-circle" src="<?php echo base_url(); echo $user->Avatar?>" width="200" height="200" alt="">
				</div><!-- /col-lg-6 -->
				<div class="col-lg-6">
					Nama :  <?php echo $user->NamaLengkap ?> <br> <br>
					Username :  <?php echo $user->Username ?> <br><br>
					Email :  <?php echo $user->Email ?> <br><br><br>
					<a href="<?php echo base_url()?>editProfilController/editProfilForm" class="btn btn-primary" role="button">Edit Profile</a>
				</div><!-- /col-lg-6 -->
				
			</div><!-- /row -->
		</div><!-- /container -->
	
	<div class="container">
		<hr>
		<hr>
		<p class="centered">Template credit to BlackTie.co - Attribution License 3.0 - 2013</p>
	</div><!-- /container -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
