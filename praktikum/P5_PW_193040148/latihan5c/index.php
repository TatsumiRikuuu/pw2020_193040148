<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body bgcolor="skyblue">
		<h1><center>10 BUKU FAVORIT</center></h1>
		<?php 
		require 'php/function.php';
		$buku = query("SELECT * FROM buku");
			
		?>

		<div class="container">
		<table border="1" cellspacing="0" cellpadding="10">
			<tr>
			<?php foreach ($buku as $bk) : ?>
			<p class="Judul">
			<a href="php/detail.php?No=<?=$bk['No'] ?>">
			<?= $bk["Judul"] ?>
			</a>
			</p>
			<?php endforeach; ?>





</div>
</body>
</html>