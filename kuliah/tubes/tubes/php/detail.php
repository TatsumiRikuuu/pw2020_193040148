<?php 

if (!isset($_GET['id'])) {
	header("location : ../index.php");
	exit;
}
require 'function.php';

$id = $_GET['id'];

$buku = query("SELECT * FROM buku WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/materialize.css"/>
	<script src="../js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<!--My Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Viga&display=swap" rel="stylesheet">

	
	<title></title>
	<style>
		img {
			
	width: 260px;
	height: 260px;
	border: 8px solid #331a00;
	box-shadow: 7px 7px 7px 7px rgba(0,0,0,0.5);

		}

		body {
			background-image: url(../assets/img/bg5.jpg) !important;
			background-size: cover;
			text-align: center;
			color: white;
			font-family: 'Pangolin', cursive !important;
			font-size: 20px;
		}

		
	</style>
</head>
<body>
</head>
<body>

	<div class="container">
	<div class="img">
	<img src="../assets/img/<?=$buku["cover"];?>" alt="">
</div>
<div class="keterangan">
		<p><?= $buku["judul"]; ?></p>
		<p><?= $buku["penulis"]; ?></p>
		<p><?= $buku["halaman"]. " halaman" ?></p>
		<p><?="Terbit ". $buku["terbit"]; ?></p>
	</div>
	<a href = menu.php class="waves-effect #795548 brown btn-small"><i class="material-icons left">arrow_back</i>Back</a>
</body>
</html>