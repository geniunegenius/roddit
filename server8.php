<?php
	$localhost = "localhost";
	$idbazadedate = "root";
	$parolabazadedate = "";
	$db2 = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'posts');
	$db3 = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'registration');
	$nume = $_SESSION['usercautat'];
	$porecla = "";
	$bio = "";
	$avatar = "";
	$profil = "";
	$date2 = "SELECT * FROM posturi WHERE username='$nume' ORDER BY data";
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
		$numelike = $_GET['username1'];
		$idulpostarii = $_GET['id'];
		$_SESSION['idulpostarii'] = $idulpostarii;
		$likeurile = $_GET['like'];
		//iau dislikeurile din posturi
		$dislikeuriposturi = $_GET['dislikeuriposturi'];
		$caututilizatorul = "SELECT * FROM votari WHERE cinedalike='$numelike' AND idpost='$idulpostarii' AND sus=1";
		$adatdislike = "SELECT * FROM votari WHERE cinedalike='$numelike' AND idpost='$idulpostarii' AND jos=1";
		$result = mysqli_query($db2 , $caututilizatorul);
		$result2 = mysqli_query($db2 , $adatdislike);
		if(mysqli_num_rows($result) == 0)
		{
			if(mysqli_num_rows($result2) == 0) //nu a dat dislike - pun likeul in mod normal
			{
				$merge = "INSERT INTO votari (idpost , cinedalike , sus , jos) VALUES ('$idulpostarii' , '$numelike' , '1' , '0')";
				mysqli_query($db2, $merge);
				$likeurile = $likeurile + 1;
				$sql = "UPDATE posturi SET likeuri='$likeurile' WHERE id='$idulpostarii'";
				mysqli_query($db2, $sql);
			}
			if(mysqli_num_rows($result2) >= 1)//a dat dislike - vrea sa puna like
			{
				$merge1 = "UPDATE votari SET jos='0' WHERE idpost='$idulpostarii'";
				mysqli_query($db2, $merge1);
				$merge2 = "UPDATE votari SET sus='1' WHERE idpost='$idulpostarii'";
				mysqli_query($db2, $merge2);
				$likeurile = $likeurile + 1;
				$dislikeuriposturi = $dislikeuriposturi - 1;
				$sql1 = "UPDATE posturi SET likeuri='$likeurile' WHERE id='$idulpostarii'";
				mysqli_query($db2, $sql1);
				$sql2 = "UPDATE posturi SET dislikeuri='$dislikeuriposturi' WHERE id='$idulpostarii'";
				mysqli_query($db2, $sql2);
			}
			header("Location:visitprofile.php");
		}
		else
		{
			$merge1 = "DELETE FROM votari WHERE idpost='$idulpostarii' AND cinedalike='$numelike'";
			mysqli_query($db2, $merge1);
			$likeurile = $likeurile - 1;
			$sql1 = "UPDATE posturi SET likeuri='$likeurile' WHERE id='$idulpostarii'";
			mysqli_query($db2, $sql1);
			header("Location:visitprofile.php");
		}
	}
	if(isset($_GET['dislike']))
	{
		$numedislike = $_GET['username1'];
		$idulpostarii = $_GET['id'];
		$dislikeurile = $_GET['dislike'];
		//iau likeurile din posturi
		$likeuriposturi = $_GET['likeuriposturi'];
		$caututilizatorul = "SELECT * FROM votari WHERE cinedalike='$numedislike' AND idpost='$idulpostarii' AND jos=1";
		$adatlike = "SELECT * FROM votari WHERE cinedalike='$numedislike' AND idpost='$idulpostarii' AND sus=1";
		$result = mysqli_query($db2 , $caututilizatorul);
		$result2 = mysqli_query($db2 , $adatlike);
		if(mysqli_num_rows($result) == 0)
		{
			if(mysqli_num_rows($result2) == 0) //nu a dat like - pun dislikeul in mod normal
			{
				$merge = "INSERT INTO votari (idpost , cinedalike , sus , jos) VALUES ('$idulpostarii' , '$numedislike' , '0' , '1')";
				mysqli_query($db2, $merge);
				$dislikeurile = $dislikeurile + 1;
				$sql = "UPDATE posturi SET dislikeuri='$dislikeurile' WHERE id='$idulpostarii'";
				mysqli_query($db2, $sql);
			}
			if(mysqli_num_rows($result2) >= 1)//a dat like - vrea sa puna dislike
			{
				$merge1 = "UPDATE votari SET jos='1' WHERE idpost='$idulpostarii'";
				mysqli_query($db2, $merge1);
				$merge2 = "UPDATE votari SET sus='0' WHERE idpost='$idulpostarii'";
				mysqli_query($db2, $merge2);
				$likeuriposturi = $likeuriposturi - 1;
				$dislikeurile = $dislikeurile + 1;
				$sql1 = "UPDATE posturi SET likeuri='$likeuriposturi' WHERE id='$idulpostarii'";
				mysqli_query($db2, $sql1);
				$sql2 = "UPDATE posturi SET dislikeuri='$dislikeurile' WHERE id='$idulpostarii'";
				mysqli_query($db2, $sql2);
			}
			header("Location:visitprofile.php");
		}
		else
		{
			$merge1 = "DELETE FROM votari WHERE idpost='$idulpostarii' AND cinedalike='$numedislike'";
			mysqli_query($db2, $merge1);
			$dislikeurile = $dislikeurile - 1;
			$sql2 = "UPDATE posturi SET dislikeuri='$dislikeurile' WHERE id='$idulpostarii'";
			mysqli_query($db2, $sql2);
			header("Location:visitprofile.php");
		}
	}
	$get = "";
	if(isset($_POST['salveazasetari']))
	{
		$uploadOk = 1;
		$porecla = $_POST['numeafisat'];
		$bio = $_POST['descriere'];
		$get = $_FILES["picsetari"]["name"];
		if($get != "")
		{
			$imgContent = addslashes(file_get_contents($_FILES['picsetari']['tmp_name']));
			$sql3 = "UPDATE users SET avatar='$imgContent' WHERE username='$nume'";
			mysqli_query($db3,$sql3);
		}
		$profil = $_POST['tipuldeprofil'];
		$sql1 = "UPDATE users SET porecla='$porecla' WHERE username='$nume'";
		$sql2 = "UPDATE users SET bio='$bio' WHERE username='$nume'";
		$sql4 = "UPDATE users SET tipprofil='$profil' WHERE username='$nume'";
		mysqli_query($db3,$sql1);
		mysqli_query($db3,$sql2);
		mysqli_query($db3,$sql4);
		$_SESSION['porecla'] = $porecla;
		$_SESSION['bio'] = $bio;
		$_SESSION['tipprofil'] = $profil;
	}
	if(isset($_GET['comentariupost']) && $_GET['comentariupost'] == 1)
	{
		$idulpostarii = $_GET['id'];
		$_SESSION['idulpostariilike'] = $idulpostarii;
		$_SESSION['nrcom'] = $_GET['nrcom'];
		$date = "SELECT * FROM posturi WHERE id='$idulpostarii'";
		$result = mysqli_query($db2,$date);
		while($r = mysqli_fetch_array($result))
		{
			$_SESSION['postarealui'] = $r['username'];	
			$_SESSION['titlulpostarii'] = $r['titlu'];	
			$_SESSION['textulpostarii'] = $r['text'];	
			$_SESSION['datapostarii'] = $r['data'];	
		}
		header("Location:postari_comentarii.php");
	}
	if(isset($_POST['comenteaza']) && !empty($_POST['comentariu'])){
		$comentariu = $_POST['comentariu'];
		$idulpostarii = $_POST['idulpostarii'];
		$numecinedacom = $_POST['cinedacomment'];
		$nrcom = $_POST['nrcom'];
		if($comentariu != "")
		{
			$sql = "INSERT INTO comments (idpost , cinedacomm , comment) VALUES ('$idulpostarii' , '$numecinedacom' , '$comentariu')";
			mysqli_query($db2,$sql);
			$nrcom = $nrcom + 1;
			$sql1 = "UPDATE posturi SET comentarii='$nrcom' WHERE id='$idulpostarii'";
			mysqli_query($db2,$sql1);
		}
	}
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
	mysqli_close($db3);
	mysqli_close($db2);
?>