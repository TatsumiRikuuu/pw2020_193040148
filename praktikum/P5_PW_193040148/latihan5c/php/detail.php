<?php

if (!isset($_GET['No'])) {
	header("location : ../index.php");
	exit;
}
require 'function.php';

$No = $_GET['No'];

$buku = query("SELECT * FROM buku WHERE No = $No")[0];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body bgcolor="blue">

	<div class="container">
	<div class="img">
	<img src="../assets/img/<?=$buku["Cover"];?>" alt="">
</div>
	<div class="keterangan">
		<p><?= $buku["Judul"]; ?></p>
		<p><?= $buku["Penulis"]; ?></p>
		<p><?= $buku["Halaman"]. " halaman" ?></p>
		<p><?="Terbit ". $buku["Tahun Terbit"]; ?></p>
	</div>
	<button class="tombol-kembali"><a href="../index.php">Back</button>

</body>
</html>