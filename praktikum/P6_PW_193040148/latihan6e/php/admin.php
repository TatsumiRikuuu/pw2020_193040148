<?php
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
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body bgcolor="Bisque">
	<div class="add">
	<a href="tambah.php">Tambah data!</a>
	</div>
	<form action="" method="get">
		<input type="text" name="keyword" autofocus>
		<button type="submit" name="cari">Cari!</button>
	</form>
	
	<table cellpadding="13" cellspacing="0" border="1" bgcolor="Bisque">
		<tr bgcolor="skyblue">
			<th>id</th>
			<th>opsi</th>
			<th>cover</th>
			<th>judul</th>
			<th>penulis</th>
			<th>halaman</th>
			<th>tahun terbit</th>
		</tr>

		<?php if(empty($buku)) : ?>
			<tr>
				<td colspan = "7">
					<h1>Data tidak ditemukan!</h1>
				</td>
			</tr>
			<?php else : ?>

<?php $a = 1?>
<?php foreach ($buku as $bk) : ?>

	<tr>
		<td><?= $a; ?></td>
		<td>
			<div class="update">
			<a href="ubah.php?id=<?= $bk['id'] ?>"><button>Ubah</button></a></div>
			<div class="delete">
			<a href="hapus.php?id=<?= $bk['id'] ?>" onclick="return confirm('Hapus data??')"><button>Hapus</button></a></div>
		</td>
		<td><img src="../assets/img/<?=$bk["cover"]; ?>" alt=""> </td>
		<td><?= $bk ["judul"] ?></td>
		<td><?= $bk ["penulis"] ?></td>
		<td><?= $bk ["halaman"] ?></td>
		<td><?= $bk ["terbit"] ?></td>
	</tr>
	<?php $a++ ?>
	

<?php endforeach; ?>
<?php endif; ?>
</table>
</body>
</html>