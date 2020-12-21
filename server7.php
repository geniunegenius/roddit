<?php
	$localhost = "localhost";
	$idbazadedate = "root";
	$parolabazadedate = "";
	$db2 = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'posts');
	$db3 = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'registration');
	$nume = $_SESSION['username'];
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
?>