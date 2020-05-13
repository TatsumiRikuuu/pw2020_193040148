	<?php
	function koneksi() {
	$connect = mysqli_connect("localhost", "root","") or die("koneksi ke DB gagal");

	mysqli_select_db($connect, "tubes_193040148") or die("Database salah!");

	return $connect;
	}
	function query($sql){
		$connect = koneksi();
		$result = mysqli_query($connect, "$sql");

		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}

		return $rows;
	}

//fungsi untuk menambah data didalam database
	function tambah($bk)
	{
		$connect = koneksi();
		$cover = htmlspecialchars($bk['cover']);
		$judul = htmlspecialchars($bk['judul']);
		$penulis = htmlspecialchars($bk['penulis']);
		$halaman = htmlspecialchars($bk['halaman']);
		$terbit = htmlspecialchars($bk['terbit']);

	
		$query = "INSERT INTO buku
		VALUES 
		('', '$cover', '$judul', '$penulis', $halaman, $terbit)";

		mysqli_query($connect, $query);

		return mysqli_affected_rows($connect);

	}

	function hapus($id)
	{
		$connect = koneksi();
		mysqli_query($connect, "DELETE FROM buku where id = $id");

		return mysqli_affected_rows($connect);
	}


	function ubah($bk)
	{
	$connect = koneksi();
		$connect = koneksi();
		$id = htmlspecialchars($bk['id']);
		$cover = htmlspecialchars($bk['cover']);
		$judul = htmlspecialchars($bk['judul']);
		$penulis = htmlspecialchars($bk['penulis']);
		$halaman = htmlspecialchars($bk['halaman']);
		$terbit = htmlspecialchars($bk['terbit']);
	

		$query = "UPDATE buku
		SET 
		cover = '$cover',
		judul = '$judul',
		penulis = '$penulis',
		halaman = $halaman,
		terbit = $terbit
		WHERE id = $id";

		mysqli_query($connect, $query);

		return mysqli_affected_rows($connect);


	}

	//fungsi registrasi

		function registrasi($data) 
		{
			$connect = koneksi();
			$username = strtolower(stripcslashes($data["username"]));
			$password = mysqli_real_escape_string($connect, $data["password"]);

		//cek username sudah ada atau belum
			$result = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username' ");
			if (mysqli_fetch_assoc($result)) {
				echo "<script>
				alert('username sudah digunakan');
				</script>";
				return false;
			}

		//enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		//tambah user baru
		$query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
		mysqli_query($connect, $query_tambah);

		return mysqli_affected_rows($connect);
		}

	?>