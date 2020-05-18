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



	function upload() {
	
		$nama_file = $_FILES['cover']['name'];
		$tipe_file = $_FILES['cover']['type'];
		$ukuran_file = $_FILES['cover']['size'];
		$error = $_FILES['cover']['error'];
		$tmp_file = $_FILES['cover']['tmp_name'];


		//cek apakah tidak ada gambar yang di upload
		if ($error == 4) {
			echo "<script>
			alert('pilih gambar terlebih dahulu');
			</script>";
			return false;
		}

		//cek apakah yang di upload gambar
		$ekstensiFotoValid = ['jpg','jpeg','png','webp'];
		$ekstensiFoto = explode('.', $nama_file);
		$ekstensiFoto = strtolower(end($ekstensiFoto));
		if (!in_array($ekstensiFoto, $ekstensiFotoValid)){
			echo "<script>
			alert('yang anda upload bukan gambar');
			</script>";
			return false;
		}

		//type
		if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png' && tipe_file != 'image/jpg' && tipe_file != 'image/webp') {
				echo "<script>
				alert('yang ada pilih bukan gambar');
				</script>";
				return false;
		}

		//ukuran
		if($ukuran_file > 5000000) {
			echo "<script>
			alert('ukuran terlalu besar');
			</script>";
			return false;
		}

		//lolos
		$nama_file_baru = uniqid();
		$nama_file_baru .= '.';
		$nama_file_baru .= $ekstensiFoto;

		move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);
		return $nama_file_baru;
	}
//fungsi untuk menambah data didalam database
	function tambah($bk)
	{
		$connect = koneksi();
		$judul = htmlspecialchars($bk['judul']);
		$penulis = htmlspecialchars($bk['penulis']);
		$halaman = htmlspecialchars($bk['halaman']);
		$terbit = htmlspecialchars($bk['terbit']);

		//upload gambar
	$cover = upload();
	if (!$cover) {
		return false;
	}

	
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
		$id = htmlspecialchars($bk['id']);
		$judul = htmlspecialchars($bk['judul']);
		$penulis = htmlspecialchars($bk['penulis']);
		$halaman = htmlspecialchars($bk['halaman']);
		$terbit = htmlspecialchars($bk['terbit']);
		
		//upload gambar
	$cover = upload();
	if (!$cover) {
		return false;
	}

		$query = "UPDATE buku
		SET 
		id = $id,
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