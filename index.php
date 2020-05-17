<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="index/css/materialize.css"/>
	<script src="index/js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<!--My CSS-->
	<link rel="stylesheet" type="text/css" href="index/css/style.css">

	<!--My Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Squada+One&display=swap" rel="stylesheet">
	
	<title></title>
</head>
	<body>
		 <div class="navbar-fixed">
    <nav class="#424242 grey darken-3">
      <div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Busrooo.</a>
    </nav>
  </div>
</div>
 
 <!--Slider -->

   <div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="index/assets/img/1.jpg"> 
        <div class="caption center-align tulisan">
          <h1><b>Study Hard and Focus.</b></h1>
          <p>don't forget semicolon;</p>
        </div>
      </li>
      <li>
        <img src="index/assets/img/2.jpg"> 
        <div class="caption left-align tulisan">
          <h1><b>Study Hard and Focus.</b></h1>
          <p>don't forget semicolon;</p>
        </div>
      </li>
    </ul>
  </div>
  
		<!--Section-->
<section id="index" class="index #424242 grey darken-3">
	<div class="container">
		<div class="row">
			<h2 class="light center white-text text-white">MY WORKSHEET</h2>
			<div class="col m4 s12">
				<div class="card-panel center #29b6f6 light-blue lighten-1">
					<i class="large material-icons">desktop_windows</i>
					<h5></h5>
					<h5>PRAKTIKUM</h5>
          <p><a href="praktikum/">Click Here To See</a></p>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card-panel center #1de9b6 teal accent-3">
					<i class="large material-icons">developer_mode</i>
					<h5>KELAS</h5>
          <p><a href="kelas/">Click Here To See</a></p>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card-panel center #eeff41 lime accent-2">
					<i class="large material-icons">laptop_mac</i>
					<h5>TUBES</h5>
          <p><a href="tubes/">Click Here To See</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Paralax -->
<div class="parallax-container">
      <div class="parallax"><img src="index/assets/img/3.jpg"></div>
          </div>

 <!--Footer-->
        <footer class="page-footer #424242 grey darken-3">
            <h5 class="white-text"><center>Social Media</center></h5>
            <div class="row">
          	<div class="container">
            <div class="icons center text-white">
             <a href = https://web.facebook.com/busro.trisno class="waves-effect waves-light btn-small btn-#64b5f6 blue lighten-2"><i class="material-icons left">sentiment_very_satisfied</i>Facebook</a>
             <a href = https://about.me/busro class="waves-effect waves-light btn-small btn-#64b5f6 blue lighten-2"><i class="material-icons left">sentiment_satisfied</i>About Me</a>
             <a href = https://www.instagram.com/busroo.ty/?hl=id class="waves-effect waves-light btn-small btn-#64b5f6 blue lighten-2"><i class="material-icons left">insert_emoticon</i>Instagram</a>
         </div>
     </div>
          <p><center>© 2020 Copyright Busro Trisno Yuwono</center></p>
          
        </div>
      </div>
    </footer>
            
            


<!--JavaScript-->
<script type="text/javascript" src="index/js/materialize.min.js"></script>
<script>
	const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);
  

	const slider = document.querySelectorAll('.slider');
	M.Slider.init(slider);


	const parallax = document.querySelectorAll('.parallax');
	M.Parallax.init(parallax);
	
</script>

</body>
</html>

