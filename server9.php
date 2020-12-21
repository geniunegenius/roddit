<?php
	$localhost = "localhost";
	$idbazadedate = "root";
	$parolabazadedate = "";
	$db2 = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'posts');
	$db3 = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'registration');
	$nume = $_SESSION['usercautat'];
	$comentarii = "SELECT * FROM comments WHERE cinedacomm='$nume' ORDER BY data";
	$result = mysqli_query($db2,$comentarii);
	$user = array($result);
	$comentariu = array($result);
	$idpost = array($result);
	$data = array($result);
	$k = 1;
	while($r = mysqli_fetch_array($result))
	{
		$user[$k] = $r['cinedacomm'];
		$comentariu[$k] = $r['comment'];
		$idpost[$k] = $r['idpost'];
		$data[$k] = $r['data'];
		$k = $k + 1;
	}
	$k = $k - 1;
	if(isset($_POST['urmareste']))
	{
		$userurmarit = $_SESSION['usercautat'];
		$userurmareste = $_SESSION['username'];
		$sql = "INSERT INTO followers (idurmarit , idurmaritor) VALUES ('$userurmarit' , '$userurmareste')";
		$date1 = "SELECT * FROM users WHERE username='$userurmarit'";
		$date2 = "SELECT * FROM users WHERE username='$userurmareste'";
		$result1 = mysqli_query($db3 , $date1);
		$result2 = mysqli_query($db3 , $date2);
		if(mysqli_query($db3,$sql))
		{
			while($r = mysqli_fetch_array($result1))
			{
				$k = $r['urmaritori']+1;
				$sql1 = "UPDATE users SET urmaritori='$k' WHERE username='$userurmarit'";
				mysqli_query($db3,$sql1);
			}
			while($r = mysqli_fetch_array($result2))
			{
				$k = $r['urmariri']+1;
				$sql1 = "UPDATE users SET urmariri='$k' WHERE username='$userurmareste'";
				mysqli_query($db3,$sql1);
			}
			header('Location:visitprofile.php');
		}
	}
	if(isset($_POST['nuurmareste']))
	{
		$userurmarit = $_SESSION['usercautat'];
		$userurmareste = $_SESSION['username'];
		$sql = "DELETE FROM followers WHERE idurmarit='$userurmarit' AND idurmaritor='$userurmareste'";
		$date1 = "SELECT * FROM users WHERE username='$userurmarit'";
		$date2 = "SELECT * FROM users WHERE username='$userurmareste'";
		$result1 = mysqli_query($db3 , $date1);
		$result2 = mysqli_query($db3 , $date2);
		if(mysqli_query($db3,$sql))
		{
			while($r = mysqli_fetch_array($result1))
			{
				$k = $r['urmaritori']-1;
				$sql1 = "UPDATE users SET urmaritori='$k' WHERE username='$userurmarit'";
				mysqli_query($db3,$sql1);
			}
			while($r = mysqli_fetch_array($result2))
			{
				$k = $r['urmariri']-1;
				$sql1 = "UPDATE users SET urmariri='$k' WHERE username='$userurmareste'";
				mysqli_query($db3,$sql1);
			}
			header('Location:visitprofile.php');
		}
	}
?>