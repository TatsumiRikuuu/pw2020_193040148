<?php
require 'function.php';

if(isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
		alert('Registrasi Berhasil');
		document.location.href = 'login.php';
		</script>";
	}else {
		echo "<script>
		alert('Registrasi Gagal'); 
		</script>";
	}
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



<!--Register-->
	<div class="kotak_login">
<h5 class="center">REGISTER</h5>	
		<hr></hr><br>
<form action="" method="post">
	
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
		<button type="submit" class="tombol_login" name="register">REGISTER</button> 
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
