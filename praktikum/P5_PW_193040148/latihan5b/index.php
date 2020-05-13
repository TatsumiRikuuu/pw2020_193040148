<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
		<h1><center>10 BUKU FAVORIT</center></h1>
		<?php 
		require 'php/function.php';
		$buku = query("SELECT * FROM buku");
			
		?>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<div class="container">
		<table border="1" cellspacing="0" cellpadding="10">
			<tr bgcolor="blue">
					<th>No</th>
					<th>Cover Buku</th>
					<th>Judul</th>
					<th>Penulis</th>
					<th>Halaman</th>
					<th>Tahun Terbit</th>
			</tr>

			<?php $a = 1?>
			<?php foreach ($buku as $bk) : ?>
			<tr bgcolor="skyblue">
				<td><?= $a ?></td>
				<td><img src="assets/img/<?= $bk["Cover"]; ?>"></td>
				<td><?= $bk["Judul"] ?></td>
				<td><?= $bk["Penulis"] ?></td>
				<td><?= $bk["Halaman"] ?></td>
				<td><?= $bk["Tahun Terbit"] ?></td>
			</tr>

			<?php $a++ ?>
			<?php endforeach; ?>


</table>
</div>
</body>
</html>