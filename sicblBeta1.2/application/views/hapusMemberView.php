<!DOCTYPE html>
<html lang="en">
  <body>
		<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3"><br>
			<h1>Daftar Member</h1>
			</div>
		</div><!-- /row -->
		<hr>
			<div class="row"><center>
			<?php foreach ($user as $row) { ?>
				<table border='1' width="700" height="50">
					<tr><td width="350"><center><?php echo $row->Username?></center></td><td width="350"><center><a href="<?php echo base_url () ?>viewProfileController/tampilProfilMember/<?php echo $row->NoId?>" class="btn btn-primary" role="button">Profil</a></center></td></tr>
			</table> <?php } ?>
			</div></center><!-- /row -->
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
