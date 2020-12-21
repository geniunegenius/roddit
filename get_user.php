<?php
	
	$localhost = "localhost";
	$idbazadedate = "root";
	$parolabazadedate = "";
	//connectarea la baza de date
	$db = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'registration');
	if($_POST['name'])
	{
		$sql = "SELECT * FROM users WHERE username LIKE '%" . $_POST['name'] . "%'";
		$array = mysqli_query($db,$sql);
		foreach($array as $key){
	
?>

<div id="user"> 
	<a id="searchlink" href="action_login.php?usernamevizita=<?php echo $key['username']; ?> ">
		<?php
		if($key['avatar']) 
			echo '<img src="data:image/jpeg;base64,' . base64_encode($key['avatar']) . '" alt="avatar" id="pic"></img>';
		else
			echo '<img src="/img/avatardefault.png" alt="avatar" id="pic"> </img>';
		?>
		<span style="margin:0 0 5 0; padding:0;"> &nbsp; <?php echo $key['username']; ?> </span>
	</a>
</div>

<?php

	}
}

?>
	