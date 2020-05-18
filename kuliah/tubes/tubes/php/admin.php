<?php
session_start();

if(!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

//menghubungkan dengan file php lainnya
require 'function.php';

if (isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$buku = query("SELECT * FROM buku 
	  WHERE
	  id LIKE '%$keyword%' OR
	  judul LIKE '%$keyword%' OR 
	  penulis LIKE '%$keyword%' OR
	  halaman LIKE '%$keyword%' OR 
	  terbit LIKE '%$keyword%' ");

}else {

	$buku = query("SELECT * FROM buku");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
           <li><a href="admin.php">ADMIN</a></li>
          <li><a href = "logout.php" class="waves-effect #bcaaa4 brown lighten-3 btn">LOGOUT</a></li>
         
          
        </ul>
      </div>
    </nav>
  </div>
</div>

<!--SideNav-->
<ul class="sidenav" id="mobile-nav">
  <li><a href="../index.php">HOME</a></li>
  <li><a href="menu.php">MENU</a></li>
  <li><a href="admin.php">ADMIN</a></li>
  <li><a href = "logout.php" class="waves-effect #bcaaa4 brown lighten-3 btn">LOGOUT</a></li>
  
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

	<label class="add" for="tambah"><i class="material-icons">add_circle_outline</i></label><button class="btn-small #bcaaa4 brown lighten-3" type="submit" name="tambah"><a href=tambah.php>Tambah Data</a></button>
	</form>

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
          <a href="ubah.php?id=<?= $bk['id'] ?>" class="waves-effect #4e342e brown darken-3 btn">Ubah</a>
          <a href="hapus.php?id=<?= $bk['id'] ?>" class="waves-effect #4e342e brown darken-3 btn">Hapus</a>
      </div>
  </div>
</div>
    <?php endforeach; ?>


<?php endif; ?>

  	
	
	

</div>
</div>
</section>
</body>
</html>