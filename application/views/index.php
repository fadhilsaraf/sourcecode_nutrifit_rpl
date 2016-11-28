<!DOCTYPE html>
<html>
  <head>
    <title>NUTRIFIT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
  </head>
  <body>
    <div id="nav">
    <nav class="navbar navbar-default navbar-static affix-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url () ?>">Sistem Informasi Cerdas Berlalu Lintas</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url () ?>">Home</a></li>
      </div><!-- /.navbar-collapse -->
    </div>
    </nav>
  </div>
    <!-- bagian login-->
    <section id="about" class="container">
	 <div class="container"><br>
        <h4>Login</h4><br>
          <form method="POST" name="frm" action="<?php echo base_url()?>home/cekuser">
		  <p>Username : </p>
          <input type="text" id="user" name="user" required><br><br>
		  <p>Password :</p>
          <input type="password" id="pass" name="pass"required><br><br><br>
		<input class="btn btn-primary btn-lg" type="submit" value="Login" class="submitcomment">
		<br><br>
	  Belum Terdaftar? <a href="<?php echo base_url () ?>home/daftar">Daftar Disini</a>
      </div>
    </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h4>KapukAlas</h4>
          <p>Layout dan Template credit to KapukAlas</p>
        </div>
        <div class="col-md-3">
          <h4>Our location</h4>
          <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-map-marker"></span></div>
            <div class="col-md-10">Jalan Veteran, Malang, Jawa Timur.</div>
          </div><br>
          <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-envelope"></span></div>
            <div class="col-md-10">www.ub.ac.id</div>
          </div><br>
          <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-earphone"></span></div>
            <div class="col-md-10">0341-551-611</div>
          </div>
        </div>
       <div class="col-md-3">
          <h4>Kelompok 2 RPL</h4>
          <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-pencil"></span></div>
            <div class="col-md-10">Daffarez Elguska. </div>
          </div><br>
          <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-pencil"></span></div>
            <div class="col-md-10">Maulana </div>
          </div><br>
		  <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-pencil"></span></div>
            <div class="col-md-10">Sri </div>
          </div><br>
		  <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-pencil"></span></div>
            <div class="col-md-10">Erma </div>
          </div><br>
		  <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-pencil"></span></div>
            <div class="col-md-10">Andika </div>
          </div>
        </div>
      </div>
    </div>
  </footer>  

  <footer id="copyright">
    <p>Universitas Brawijaya 2015</p>
  </footer>

    <script src="<?php echo base_url()?>js/jquery.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script>
      $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

      $(function() {
  //navbar affix
  $('#nav').affix({
    offset: {
      top: $('header').height()
    }
  });
});

      $('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})


      $( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').fadeIn(250);
        },
        function(){
            $(this).find('.caption').fadeOut(205);
        }
    ); 
});
    </script>
  </body>
</html>