
	<?php
	require 'php/function.php';

	if(isset($_GET['cari'])) {
		$keyword = $_GET['keyword'];
		$buku = query ("SELECT * FROM
			buku WHERE 
			id LIKE '%$keyword%' OR 
			judul LIKE '%$keyword%' OR 
			penulis LIKE '%$keyword%' OR 
			halaman LIKE '%$keyword' OR 
			terbit LIKE '%$keyword' ");
	}else {

	$buku = query("SELECT * FROM buku");
}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title></title>
</head>
	<body bgcolor="skyblue">
	<h1><center>TABEL BUKU</center></h1>
	<div class="container">
	<form action="" method="get">
		<input type="text" name="keyword" autofocus>
		<button type="submit" name="cari">cari!</button>
	</form>

	<?php if(empty($buku)) : ?>
		<tr>
			<td colspan="7">
				<h1>Data tidak ditemukan</h1>
			</td>
		</tr>
		<?php else : ?>

	<?php foreach ($buku as $bk) : ?>
	<p class="judul">
	<a href="php/detail.php?id=<?= $bk['id'] ?>">
	<?= $bk["judul"] ?>
	</a>
	</p>
	<?php endforeach; ?>
<?php endif; ?>
</div>
<a href="php/login.php?>"><button>Masuk ke Halaman Admin</button></a>

</div>
</body>
</html>

