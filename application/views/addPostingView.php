	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3"><br>
				<h1>Form Tambah Posting</h1>
			</div>
		</div><!-- /row -->
		<hr>
		Silahkan memasukan judul dan isi posting yang diinginkan pada form dibawah ini :
		<form action="<?php echo site_url() ?>addPostingController/addPosting" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
				<table style="width:800px">
					<tr>
					<td  style="border-bottom:none">Judul Posting</td>
					<td  style="border-bottom:none">:</td>
					<td style="border-bottom:none"><input width="500px" type="text" name="JudulPosting" value=""> </td>
					</tr>
					<tr>
					<td  style="border-bottom:none">Isi Posting</td>
					<td  style="border-bottom:none">:</td>
					<td style="border-bottom:none">
					<textarea name="IsiPosting"></textarea>
					</td>
					</tr><br><br><br>
					<tr>
					<td> <input type="submit" value="Submit" class="btn btn-primary">
					<a href="<?php echo base_url()?>viewPostingController/viewPosting" class="btn btn-primary" role="button">Kembali<a>
					</td>
				</tr>
			</table>
			</form>
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
