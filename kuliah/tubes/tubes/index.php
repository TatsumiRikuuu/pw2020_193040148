<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/materialize.css"/>
	<script src="js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<!--My CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--My Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Squada+One&display=swap" rel="stylesheet">
	
	<title></title>
</head>
	<body>
		 <div class="navbar-fixed">
    <nav class="#4e342e brown darken-3">
      <div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Busrooo.</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">

          <li><a href="index.php">HOME</a></li>
          <li><a href="php/menu.php">MENU</a></li>
          <li><a href = "php/login.php" class="waves-effect #bcaaa4 brown lighten-3 btn">SIGN IN</a></li>
          <li><a href = "php/registrasi.php" class="waves-effect #bcaaa4 brown lighten-3 btn">REGISTER</a></li>
          
        </ul>
      </div>
    </nav>
  </div>
</div>

<!--SideNav-->
<ul class="sidenav" id="mobile-nav">
  <li><a href="index.php">HOME</a></li>
  <li><a href="php/menu.php">MENU</a></li>
  <li><a href ="php/login.php" class="waves-effect #bcaaa4 brown lighten-3">SIGN IN</a></li>
  <li><a href = "php/registrasi.php" class="waves-effect #bcaaa4 brown lighten-3">REGISTER</a></li>
</ul>
 
 <!--Slider -->

   <div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="assets/img/bg1.jpg"> 
        <div class="caption center-align tulisan">
          <h1><b>Welcome To My Website!</b></h1>
        </div>
      </li>
      <li>
        <img src="assets/img/bg2.jpg"> 
        <div class="caption left-align tulisan">
          <h2>There is no friend as loyal as a book.</h2>
        </div>
      </li>
    </ul>
  </div>
  
		<!--Section-->
<section id="index" class="index #795548 brown">
	<div class="container">
		<div class="row">
			<h2 class="light center white-text text-white">4 random facts about books that are weirdly interesting</h2>
			<div class="col m3 s12">
				<div class="card-panel center">
					<i class="material-icons">toys</i>
					<h5></h5>
					<p>Illiteracy is still a huge problem throughout the world.</p>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="card-panel center">
					<i class="material-icons">donut_small</i>
					<p>There are over 129 million books in existence.</p>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="card-panel center">
					<i class="material-icons">bubble_chart</i>
					<p>The most expensive book ever purchased was sold for $30.8M.</p>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="card-panel center">
					<i class="material-icons">ac_unit</i>
					<p>There’s a word for loving the smell of old books.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Paralax -->
<div class="parallax-container">
      <div class="parallax"><img src="assets/img/bg3.jpg"></div>
      <div class="container book">
      	<h3 class="light center #795548 brown text-white">The three most read books in the world</h3>
      	<div class="row">
      		<div class="col m4">
      			<img src="assets/img/xx1.png">
            <h5 class="light center #795548 brown text-white">The Holy Bible</h5>
      		</div>
            <div class="col m4">
            <img src="assets/img/xx2.png">
            <h5 class="light center #795548 brown text-white">Quotations from Chairman Mao Tse-Tung</h5>
          </div>
            <div class="col m4">
            <img src="assets/img/xx3.png">
            <h5 class="light center #795548 brown text-white">Harry Potter</h5>
          </div>
      	</div>
      </div>
  </div>
 

 <!--Footer-->
        <footer class="page-footer #795548 brown">
            <h5 class="white-text"><center>Social Media</center></h5>
            <div class="row">
          	<div class="container">
            <div class="icons center text-white">
             <a href = https://web.facebook.com/busro.trisno class="waves-effect waves-light btn-small btn-#bcaaa4 brown lighten-3"><i class="material-icons left">sentiment_very_satisfied</i>Facebook</a>
             <a href = https://about.me/busro class="waves-effect waves-light btn-small btn-#bcaaa4 brown lighten-3"><i class="material-icons left">sentiment_satisfied</i>About Me</a>
             <a href = https://www.instagram.com/busroo.ty/?hl=id class="waves-effect waves-light btn-small btn-#bcaaa4 brown lighten-3"><i class="material-icons left">insert_emoticon</i>Instagram</a>
         </div>
     </div>
          <p><center>© 2020 Copyright Busro Trisno Yuwono</center></p>
          
        </div>
      </div>
    </footer>
            
            


<!--JavaScript-->
<script type="text/javascript" src="js/materialize.min.js"></script>
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

