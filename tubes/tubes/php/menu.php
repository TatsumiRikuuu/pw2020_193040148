<?php
	require 'function.php';

	if(isset($_GET['cari'])) {
		$keyword = $_GET['keyword'];
		$buku = query ("SELECT * FROM
			buku WHERE 
			id LIKE '%$keyword%' OR 
			judul LIKE '%$keyword%' OR 
			penulis LIKE '%$keyword%' OR 
			halaman LIKE '%$keyword%' OR 
			terbit LIKE '%$keyword%' ");
	}else {

	$buku = query("SELECT * FROM buku");

}
	?>

<link rel="stylesheet" href="../css/materialize.css"/>
	<script src="../js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<!--My CSS-->
	<link rel="stylesheet" type="text/css" href="../css/style.css">

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

          <li><a href="../index.php">HOME</a></li>
          <li><a href="menu.php">MENU</a></li>
          <li><a href = "login.php" class="waves-effect #bcaaa4 brown lighten-3 btn">SIGN IN</a></li>
          <li><a href = "registrasi.php" class="waves-effect #bcaaa4 brown lighten-3 btn">REGISTER</a></li>
          
        </ul>
      </div>
    </nav>
  </div>
</div>

<!--SideNav-->
<ul class="sidenav" id="mobile-nav">
  <li><a href="../index.php">HOME</a></li>
  <li><a href="menu.php">MENU</a></li>
  <li><a href ="login.php" class="waves-effect #bcaaa4 brown lighten-3">SIGN IN</a></li>
  <li><a href = "registrasi.php" class="waves-effect #bcaaa4 brown lighten-3">REGISTER</a></li>
</ul>
		<!--Section-->
<section id="services" class="services #795548 brown">
	<div class="container">
	<div class="row">
	<form action="" method="get">
	<input type="text" name="keyword" autofocus>
	<label class="label-icon" for="search"><i class="material-icons">search</i></label><button class="btn-small #bcaaa4 brown lighten-3" type="submit" name="cari">Search Here</button>
	</form>
	<?php if(empty($buku)) : ?>
		<tr>
			<td colspan="7">
				<h1>Data tidak ditemukan</h1>
			</td>
		</tr>
		<?php else : ?>

	<h1 class="light center white-text text-white">Daftar Buku</h1>
    
 
	

<div class="row">
<?php foreach ($buku as $bk) : ?>
   <div class="col m4 s12">
      <div class="card">
        <div class="card-image">
          <img src="../assets/img/<?= $bk['cover']; ?>" class="img">
        </div>
        <div class="card-content">
          <span class="card-title black-text text-darken-3"><?= $bk['judul'] ?></span>
        </div>
         <div class="card-action">
          <a href="detail.php?id=<?= $bk['id']; ?>" class="waves-effect #4e342e brown darken-3 btn">Lihat Detail</a>
      </div>
  </div>
</div>
    <?php endforeach; ?>


<?php endif; ?>
</div>
</div>
</section>
  	
	
<!--FYI-->
<section id="contact" class="contact #4e342e brown darken-3">
	<div class="container">
		<div class="row">
				<div class="card-panel #bcaaa4 brown lighten-3 center white-text">
					<i class="material-icons">info</i>
					<h3>~I Hope You Enjoy With Our Website~</h3>
				</div>
			</div>
		</div>
	</div>
</section>


<!--JavaScript-->
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
	const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

	
</script>
</body>
</html>