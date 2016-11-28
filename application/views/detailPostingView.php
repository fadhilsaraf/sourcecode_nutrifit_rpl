	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3"><br>
				<h1><?php echo $posting->JudulPosting ?><br><br></h1>
			</div>
		</div><!-- /row -->
		<hr>
		<h4><?php  echo $posting->JudulPosting ?></h4><br>
		Ditulis oleh : <?php  echo $posting->Username ?> pada <?php echo $posting->TanggalPosting?><br>
		<br>
		<?php echo $posting->IsiPosting ?><br><br>
		<hr>
		<?php if($this->session->userdata('USERNAME')=='admin' or $this->session->userdata('USERNAME')==$posting->Username){ ?>
		<a href="<?php echo base_url () ?>updatePostingController/displayUpdate/<?php echo $posting->IdPosting ?>" class="btn btn-primary" role="button">Update Posting</a>
		<a href="<?php echo base_url () ?>deletePostingController/deletePost/<?php echo $posting->IdPosting?>" class="btn btn-primary" role="button">Hapus Posting</a>
		<?php } ?>
		<a href="<?php echo base_url () ?>viewPostingController/viewPosting" class="btn btn-primary" role="button">Kembali</a>
		<hr>
	</div><!-- /container -->
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">
				<h2>Komentar</h2>
			</div>
		</div><!-- /row -->
		<hr>
		<?php foreach ($komen as $row) { ?>
		Ditulis oleh : <?php echo $row->Username ?> pada <?php echo $row->TanggalKomen ?><br>
		<br>
		<?php echo $row->IsiKomen ?><br><br>
		<?php if($this->session->userdata('USERNAME')=='admin' or $this->session->userdata('USERNAME')==$row->Username){ ?>
		<a href="<?php echo base_url () ?>detailPostingController/deleteComment/<?php echo $row->IdKomen ?>/<?php echo $row->IdPosting ?>" class="btn btn-primary" role="button">Hapus Komentar</a>
		<?php } ?>
		<hr>
		<?php } ?>
			<form action="<?php echo site_url() ?>detailPostingController/addComment/<?php echo $posting->IdPosting ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
				<table style="width:800px">
					<tr>Tambah Komentar<br>
					<td style="border-bottom:none">
					<textarea name="komentar" width="500px"></textarea>
					</td>
					</tr>
					<tr><br>
					<td><br><input type="submit" value="Submit" class="btn btn-primary">
					</td>
				</tr>
			</table>
			</form>
		<hr>
		<hr>
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
