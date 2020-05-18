<?php
session_start();

if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';

$id = $_GET['id'];
$bk = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
		alert('data berhasil diubah !');
		document.location.href='admin.php';
		</script>";
	}else {
		echo "<script>
		alert('data gagal diubah!');
		document.location.href='admin.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<title></title><link rel="stylesheet" href="../css/materialize.css"/>
	<script src="../js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<!--My CSS-->
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<!--My Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Squada+One&display=swap" rel="stylesheet">

	
	<title></title>
</head>
	<body style="background-image: url(../assets/img/bg5.jpg); background-size: cover;">
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
<form action="" method="post" enctype="multipart/form-data">
<ul>
	<input type="hidden" name="id" id="id" value="<?= $bk['id'];?>">
			<br><br>
			
			<li>
				<label for="cover">Cover :</label><br>
				<input type="file" name="cover" id="cover" required value="<?= $bk['cover']; ?>"><br><br>
			</li>
			<li>
				<label for="judul">Judul :</label><br>
				<input type="text" name="judul" id="judul" required value="<?= $bk['judul']; ?>"><br><br>
			</li>
			<li>
				<label for="penulis">Penulis :</label><br>
				<input type="text" name="penulis" id="penulis" required value="<?= $bk['penulis']; ?>"><br><br>
			</li>
			<li>
				<label for="halaman">Halaman :</label><br>
				<input type="halaman" name="halaman" id="halaman" required value="<?= $bk['halaman']; ?>"><br><br>
			</li>
			<li>
				<label for="terbit">Tahun Terbit :</label><br>
				<input type="terbit" name="terbit" id="terbit" required value="<?= $bk['terbit']; ?>"><br><br>
			</li>
		<br>

		
			<button type="submit" name="ubah">Ubah Data!</button>
			<button type="submit">
			<a href="index.php">Kembali</a>
		</button>
		
	</ul>
<body>

</body>
</html>