<?php
	session_start();
	//declarare goala
	$username = "";
	$email = "";
	$password = "";
	$nume = "";
	$k = "";
	$semafor = "";
	$porecla = "";
	$bio = "";
	$avatar = "";
	$profil = "";
	$errors = array();
	$localhost = "localhost";
	$idbazadedate = "root";
	$parolabazadedate = "";
	//connectarea la baza de date
	$db = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'registration');
	//daca butonul de inregistrare e apasat
	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		//daca nu e nicio eroare, adauga utilizatorul in baza de date
		if(count($errors) == 0){
			mysqli_query($db , "INSERT INTO users (username , email , password) VALUES ('$username' , '$email' , '$password')");
			$_SESSION['username'] = $username;
			$semafor = 1;
			$_SESSION['semafor'] = $semafor;
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db , $query);
			if(mysqli_num_rows($result) == 1){
				//log user in
				$_SESSION['username'] = $username;
				$sql = "SELECT * FROM users WHERE username='$username'";
				$result1 = mysqli_query($db,$sql);
				$r = mysqli_fetch_array($result1);
				$_SESSION['porecla'] = $r['porecla'];
				$_SESSION['bio'] = $r['bio'];
				$_SESSION['avatar'] = $r['avatar'];
				$_SESSION['tipprofil'] = $r['tipprofil'];
				$semafor = 1;
				$_SESSION['semafor'] = $semafor;
				}
				header('location:action_login.php'); //redirectionare catre homepage dupa connectare
			}
		}
	//login din login page
	if (isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(count($errors) == 0){
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db , $query);
			if(mysqli_num_rows($result) == 1){
				//log user in
				$_SESSION['username'] = $username;
				$sql = "SELECT * FROM users WHERE username='$username'";
				$result1 = mysqli_query($db,$sql);
				$r = mysqli_fetch_array($result1);
				$_SESSION['porecla'] = $r['porecla'];
				$_SESSION['bio'] = $r['bio'];
				$_SESSION['avatar'] = $r['avatar'];
				$_SESSION['tipprofil'] = $r['tipprofil'];
				$semafor = 1;
				$_SESSION['semafor'] = $semafor;
				header('location:action_login.php'); //redirectionare catre homepage dupa connectare
			}
			else{
				echo "<script> window.alert('Combinatia dintre numele de utilizator si parola este gresita'); </script>";
			}
		}
	}
	//login din login page dupa ce apasa butonul de post
	if (isset($_POST['loginpostnou'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(count($errors) == 0){
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db , $query);
			if(mysqli_num_rows($result) == 1){
				//log user in
				$_SESSION['username'] = $username;
				$semafor = 1;
				$_SESSION['semafor'] = $semafor;
				header('location:submit.php'); //redirectionare catre pagina de postare dupa connectare
			}
			else{
				echo "<script> window.alert('Combinatia dintre numele de utilizator si parola este gresita'); </script>";
			}
		}
	}
	//flex box
	//connectarea la baza de date
	$db1 = mysqli_connect($localhost , $idbazadedate , '' , 'posts');
	$titlu = "";
	$text = "";
	$profil = "";
	$username1 = "";
	$ora = "";
	$data = "";
	$contor = 1;
	//daca butonul de postare e apasat
	if(isset($_POST['postez'])){
		$titlu = $_POST['titlu'];
		$text = $_POST['comment'];
		$profil = $_POST['profil1'];
		$username1 = $_POST['username1'];
		$ora = date("h:i:s");
		$data = date("Y-m-d");
		//daca nu e nicio eroare, adauga postul in baza de date
		if(count($errors) == 0){
			mysqli_query($db1 , "INSERT INTO posturi (username , titlu , text, profil, ora , data) VALUES ('$username1' , '$titlu' , '$text' , '$profil' , '$ora' , '$data')");
			$_SESSION['titlu'] = $titlu;
			$_SESSION['text'] = $text;
			$_SESSION['profil'] = $profil;
			$_SESSION['ora'] = $ora;
			$_SESSION['data'] = $data;
			header('location:profile.php'); //redirectionare catre pofil dupa postare
		}
	}
	mysqli_close($db1);
	//logout
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:index.php');
	}
?>