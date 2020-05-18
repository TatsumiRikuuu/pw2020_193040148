<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
		<h1><center>10 BUKU FAVORIT</center></h1>
		<?php 
		$connect = mysqli_connect("localhost", "root", "") or die("koneksi ke db gagal");
		mysqli_select_db($connect, "tubes_193040148") or die ("database salah");

		$result = mysqli_query($connect, "SELECT * FROM buku");
			
		?>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<div class="container">
		<table border="1" cellspacing="0" cellpadding="10" style="text-align: center;">
			<tr bgcolor="blue">
					<th>No</th>
					<th>Cover Buku</th>
					<th>Judul</th>
					<th>Penulis</th>
					<th>Halaman</th>
					<th>Tahun Terbit</th>
			</tr>

			<?php $a = 1?>
			<?php while ($row = mysqli_fetch_assoc($result)) : ?>
			<tr bgcolor="skyblue">
				<td><?= $a ?></td>
				<td><img src="assets/img/<?= $row["Cover"]; ?>"></td>
				<td><?= $row["Judul"] ?></td>
				<td><?= $row["Penulis"] ?></td>
				<td><?= $row["Halaman"] ?></td>
				<td><?= $row["Tahun Terbit"] ?></td>
			</tr>

			<?php $a++ ?>
			<?php endwhile; ?>


</table>
</div>
</body>
</html>