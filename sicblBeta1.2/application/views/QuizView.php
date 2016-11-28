
	<?php
		$no=$no+1;
		if($no<=5){
			?>
			<div class="container">
			<div class="row mt centered">
				<div class="col-lg-6 col-lg-offset-3"><br>
					<h1>Soal Quiz</h1>
				</div>
			</div><!-- /row -->
			<hr>
			nilai=
			<?php 
				echo $nilai;
			?>
			<br>
			<br>
			<?php
				
				echo $no;
			?>.
			<?php echo $dataSoal->Soal ?><br><br>
			<form class="form-inline" role="form" method="POST" name="formJawab" action="<?php echo base_url()?>quizController/kerjakanSoal/<?php echo $no ?>/<?php echo $nilai ?>">
				<input type="radio" name="jawaban" id="jawaban" value="A" checked="checked">A.<?php echo $dataSoal->PilihanA ?><br><br>
				<input type="radio" name="jawaban" id="jawaban" value="B">B.<?php echo $dataSoal->PilihanB ?><br><br>
				<input type="radio" name="jawaban" id="jawaban" value="C">C.<?php echo $dataSoal->PilihanC ?><br><br>
				<input type="radio" name="jawaban" id="jawaban" value="D">D.<?php echo $dataSoal->PilihanD ?><br><br>
				<button type="submit" class="btn btn-warning btn-lg" value="jawab">Jawab</button>
			</form>
			<br><br><br>
			<hr>
			</div><!-- /container -->
		<?php
		}
		else{
			?>
			<div class="container">
			<div class="row mt centered">
				<div class="col-lg-6 col-lg-offset-3"><br>
					<h1>Hasil Quiz</h1>
				</div>
			</div><!-- /row -->
			<hr>
			<div class="row mt centered">
				<div class="col-lg-6 col-lg-offset-3"><br>
					<h1>
					nilai akhir anda adalah=
					<?php 
						echo $nilai;
					?>
					</h1>
				</div>
			</div>
			
			<hr>
			</div><!-- /container -->
		<?php
		}
	?>
	
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
			
			<!--/col-lg-4 -->
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
    <script src="<?php echo base_url () ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
