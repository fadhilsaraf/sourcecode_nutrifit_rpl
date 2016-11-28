	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3"><br>
				<h1>Sticky Posting</h1>
			</div>
		</div><!-- /row -->
		<hr>
		
		<?php foreach ($posting as $row) { ?>
		<h4><?php  echo $row->JudulPosting ?></h4><br>
		Ditulis oleh : <?php  echo $row->Username ?> <br> Last update on : <?php echo $row->TanggalPosting?><br>
		<br>
		<?php echo substr($row->IsiPosting,0,50) ?><br><br>
		<a href="<?php echo base_url () ?>detailPostingController/displayDetail/<?php echo $row->IdPosting?>" class="btn btn-primary" role="button">Detail Posting</a>
		<?php if($this->session->userdata('USERNAME')=='admin' or $this->session->userdata('USERNAME')==$row->Username){ ?>
		<a href="<?php echo base_url () ?>updatePostingController/displayUpdate/<?php echo $row->IdPosting ?>" class="btn btn-primary" role="button">Update Posting</a>
		<a href="<?php echo base_url () ?>deletePostingController/deletePost/<?php echo $row->IdPosting?>" class="btn btn-primary" role="button">Hapus Posting</a>
		<?php } ?>
		<hr>
		<?php } ?><br><br><br>
		<hr>
	</div><!-- /container -->
	<div class="container">
		<p class="centered">Template credit to BlackTie.co - Attribution License 3.0 - 2013</p>
	</div><!-- /container -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url () ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
