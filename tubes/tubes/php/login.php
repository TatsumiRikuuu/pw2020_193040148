<?php
session_start();
require 'function.php';
//melakukan pengecekkan apakah user sudah melakukan login jika sudah redirect ke halaman admin 
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
	$username = $_COOKIE['username'];
	$hash = $_COOKIE['hash'];



	//ambil username berdasarkan id
	$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");

$row = mysqli_fetch_assoc($result);

// cek cookie dan username
if ($hash === hash('sha256', $row['id'], false)){
	$_SESSION['username'] = $row['username'];
	header("Location: admin.php");
	exit;
}
}
//login
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
	//mencocokkan username dan pasword
	if (mysqli_num_rows($cek_user) > 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if(password_verify($password, $row['password'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] =  hash('sha256', $row['id'], false);

			//jika remember me dicentang
			if (isset($_POST['remember'])) {
				setcookie('username', $row['username'], time() + 60 * 60 * 24);
				$hash = hash('sha256', $row['id']);
				setcookie('hash', $hash , time() + 60 * 60 * 24);;
			}
		
		if (hash('sha256', $row['id']) == $_SESSION['hash']) {
			header("Location: admin.php");
			die;
		}

		header("Location: ../index.php");
		die;
	}
}
	$error= true;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<link rel="stylesheet" href="../css/materialize.css"/>
	<script src="../js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<!--My CSS-->
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<!--My Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Squada+One&display=swap" rel="stylesheet">

	
	<title></title>
</head>
	<body class="background">
		 <div class="navbar-fixed">
    <nav class="#4e342e brown darken-3">
      <div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Busrooo.</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">

          <li><a href="../index.php">HOME</a></li>
          <li><a href="menu.php">MENU</a></li>
          <li><a href = "login.php" class="waves-effect #bcaaa4 brown lighten-3 btn">SIGN IN</a></li>
          <li><a href = "registrasi.php" class="waves-effect #bcaaa4 brown lighten-3 btn">REGISTER</a></li>
          
        </ul>
      </div>
    </nav>
  </div>
</div>

<!--SideNav-->
<ul class="sidenav" id="mobile-nav">
  <li><a href="../index.php">HOME</a></li>
  <li><a href="menu.php">MENU</a></li>
  <li><a href ="login.php" class="waves-effect #bcaaa4 brown lighten-3">SIGN IN</a></li>
  <li><a href = "registrasi.php" class="waves-effect #bcaaa4 brown lighten-3">REGISTER</a></li>
</ul>


<!--Login -->
	<div class="kotak_login">
<h5 class="center">LOGIN</h5>	
		<hr></hr><br>
<form action="" method="post">
	<?php if (isset($error)) : ?>
		<p style="color : red; font-style: italic;">Username atau password salah</p>
	<?php endif; ?>
	<table>
		<tr>
			<td><i class="medium material-icons">account_circle</i>	</td>
			<td>:</td>
			<td><input type ="text" class="form_login" name="username"></td>
		</tr>
		<tr>
			<td><i class="medium material-icons">lock</i></td>
			<td>:</td>
			<td><input type ="password" class="form_login" name="password"></td>
		</tr>
	</table>
	<div class="remember">
		<p>
      <label>
		<input type="checkbox" name="remember">


        <span>
   
		<label for="remember">Remember me</label></span>
		
    </p>
		</div>
		<button type="submit" class="tombol_login" name="submit">Login</button> 
		<div class="registrasi">
			<p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
		</div>
		<hr></hr>
	</form>
</div>

 

<!--JavaScript-->
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
	const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

	
</script>
</body>
</html>
