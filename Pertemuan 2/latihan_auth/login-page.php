<?php
session_start();
//cek apakah ada username
if(isset($_SESSION['username'])){
    header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<h1>HALLO!! <br/> SELAMAT DATANG</h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Login</p>
 
		<form action="index.php" method="POST">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email .."/>
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .."/>
 
			<input name="submit" type="submit" class="tombol_login" value="LOGIN"/>
 
			<br/>
			<br/>
			
		</form>
		
	</div>

</body>
</html>