<?php
	$localhost = "localhost";
	$idbazadedate = "root";
	$parolabazadedate = "";
	$db2 = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'posts');
	$db3 = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'registration');
	$date2 = "SELECT * FROM posturi ORDER BY likeuri,comentarii";
	$result = mysqli_query($db2,$date2);
	$titlu = array($result);
	$text = array($result);
	$profil = array($result);
	$ora = array($result);
	$data = array($result);
	$idul = array($result);
	$up = array($result);
	$down = array($result);
	$commentariu = array($result);
	$utilizator = array($result);
	$k = 1;
	while($r = mysqli_fetch_array($result))
	{
		$titlu[$k] = $r['titlu'];
		$text[$k] = $r['text'];
		$profil[$k] = $r['profil'];
		$ora[$k] = $r['ora'];
		$data[$k] = $r['data'];
		$idul[$k] = $r['id'];
		$up[$k] = $r['likeuri'];
		$down[$k] = $r['dislikeuri'];
		$comentariu[$k] = $r['comentarii'];
		$utilizator[$k] = $r['username'];
		$k = $k + 1;
	}
	$k = $k - 1;
	if(isset($_GET['like']))
	{
		$message = "Trebuie sa te conectezi ca sa faci asta!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	if(isset($_GET['dislike']))
	{
		$message = "Trebuie sa te conectezi ca sa faci asta!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	if(isset($_GET['comentariupost']) && $_GET['comentariupost'] == 1)
	{
		$message = "Trebuie sa te conectezi ca sa faci asta!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	mysqli_close($db2);
?>