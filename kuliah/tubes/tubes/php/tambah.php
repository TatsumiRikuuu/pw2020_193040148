<?php
session_start();

if(!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';

if (isset($_POST['tambah'])) {
	if (tambah($_POST) >0) {
		echo "<script>
		alert('data berhasil ditambahkan !');
		document.location.href='admin.php';
		</script>";
	}else {
		echo "<script>
		alert('data gagal ditambahkan!');
		document.location.href='admin.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
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

<center>
<h3 style="color: white;">Form Tambah Data Tabel Buku</h3>
</center>
<form action="" method="post" enctype="multipart/form-data">
<ul style="font-family: 'Pangolin', cursive; 
    font-size: 15px;
    color: white;
    text-align: center;">
			<li>
				<label for="cover" style="font-size: 20px; font-style: bold; color: white;">Cover :</label><br>
				<input type="file" name="cover" id="cover" required><br><br>
			</li>
			<li>
				<label for="judul" style="font-size: 20px; font-style: bold; color: white;">Judul :</label><br>
				<input type="text" name="judul" id="judul" required style="width: 300px;"><br><br>
			</li>
			<li>
				<label for="penulis" style="font-size: 20px; font-style: bold; color: white;" >Penulis :</label><br>
				<input type="text" name="penulis" id="penulis" required style="width: 300px;"><br><br>
			</li>
			<li>
				<label for="halaman" style="font-size: 20px; font-style: bold; color: white;">Halaman :</label><br>
				<input type="halaman" name="halaman" id="halaman" required><br><br>
			</li>
			<li>
				<label for="terbit" style="font-size: 20px; font-style: bold; color: white;">Tahun Terbit :</label><br>
				<input type="terbit" name="terbit" id="terbit" required><br><br>
			</li>
		<br>

	
		

		
		<label class="add" for="tambah" style="font-family: 'Pangolin', cursive !important;"><button class="btn-small #bcaaa4 brown lighten-3" type="submit" name="tambah"><i class="material-icons">add_circle</i></label>Tambah Data</button>
      
		<a href= ../index.php class="waves-effect #bcaaa4 brown lighten-3 btn" type="submit" name="tambah"><i class="material-icons left">chevron_left</i>Kembali</a>


		
	</ul>
<body>

</body>
</html>