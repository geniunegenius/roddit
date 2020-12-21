<?php include('server.php'); ?>
<?php include('server1.php'); ?>
<html>
<style>
	body
	{
		overflow-x:auto;
		margin:0;
		padding:0;
	}
	.container{
		overflow-y:auto;
		overflow-x:hidden;
		width:1349px;
		height:auto;
		min-height:100%;
		background-color:#eef2f5;
		margin:auto;
		padding:0;
	}
	.top{
		display:inline-block;
		margin:0px 0px 0px 0px;
		height:50px;
		width:100%;
		background-color:#cee3f8;
		border-top-style:solid;
		border-top-width:1px;
		border-bottom-style:solid;
		border-bottom-width:1px;
		border-bottom-color:#0000A0;
	}
	.redditlink{
		display:inline-block;
		margin:5 0 0 0;
		padding:0;
	}
	.redditlink1:hover{
		background-color:#add8e6;
		border:1px solid #add8e6;
		border-radius:5px;
	}
	.login{
		display:inline-block;
		float:right;
		width:410px;
		height:20px;
		background-color:#ADD8E6;
		text-align:left;
		border-radius:5%;
		margin:30 0 0 0;
	}
	p.logpage{
		text-align:left;
		color:gray;
		padding:4 0 0 4;
		margin:0;
	}
	.mainpage{
		float:left;
		padding:0;
		margin-top:0px;
		margin-left:0px;
		height:auto;
		min-height:100%;
		width:100%;
		background-color:#eef2f5;
	}
	.postare{
		margin: auto;
		margin-top: 25;
		padding: 15;
		width: 85%;
		height: auto;
		min-height: 100%;
		background-color: white;
		border: 0;
		border-radius: 5px;
	}
	button.inapoi{
		margin: 0;
		padding: 5;
		width: auto;
		height: 25;
		background-color: gray;
	}
	a{
		text-decoration:none;
		color:black;
	}
	.titlu{
		padding: 0;
		margin: 0;
		text-transform: uppercase;
	}
	.tabmenu1{
		display:inline-block;
		list-style-type:none;
		margin-left:0;
		margin-top:15px;
		padding:0px
	}
	li{
		padding:0;
		background-color:#eef2f5;
		display:inline-block;
		padding:0;
		margin-right:10px;
	}
	li.selected2{
		color:black;
		background-color:white;
	}
	li:hover{
		opacity:0.8;
	}
	a.selected3{
		padding:0;
		background-color:white;
		color:blue;
		border-bottom-style:solid;
		border-bottom-width:1.5;
		border-bottom-color:blue;
	}
	.numelike{
		margin: auto;
		margin-top: 0;
		margin-left: 0;
		padding: 0;
		width: 85%;
		height: auto;
		min-height: 100%;
		background-color: white;
		border: 0;
		border-radius: 5px;
	}
	textarea{
		margin-top: 5;
		padding: 0;
		width: 76%;
		border-radius: 5px;
		color: gray;
	}
	button.comentariu{
		margin-top: -17;
		margin-left: 755;
		padding: 0;
		width: auto;
		height: auto;
		border: 1px solid gray;
		border-radius: 5px;
		background-color: white;
		color: gray;
	}
	div.containercom{
		margin: auto;
		margin-top: 0;
		margin-left: 0;
		padding: 0;
		width: 85%;
		height: auto;
		min-height: 100%;
		background-color: white;
		border: 0;
		border-radius: 5px;
	}
	form.formation{
		padding: 0;
		margin: 0;
		border: 0;
	}
	div.comentariutext{
		color: gray;
		margin: auto;
		margin-top: 0;
		margin-left: 0;
		margin-bottom: 5;
		padding: 5;
		width: 85%;
		height: auto;
		min-height: 30;
		background-color: white;
		border: 1px solid gray;
		border-radius: 5px;
	}
</style>
<title> roddit </title>
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="png" href="img\wtm.png"><!--link the watermark-->
		<link rel="stylesheet" type="text/css" href="css\modal.css"><!--link the css file-->
	</head>
<body bgcolor="#eef2f5">
	<div class="container">
		<!--CHENARUL DE SUS-->
		<div class="top">
			<!--Poza roddit-->
			<a href="action_login.php"><img class="redditlink" src="img\reddit.png" height="40px" width="120px"></img></a>
			<!--Login si signup-->
			<div class="login">
				<p class="logpage"><a class="loginpagelink" href="profile.php"> <?php echo $_SESSION['username']; ?></a> <font size=1>|</font> <a class="loginpagelink" href="setari.php">setari</a> <font size=1>|</font> <a class="loginpagelink" href="action_login.php?logout='1'">delogheaza-te</a> </p>
			</div>
		</div>
		<div class="mainpage">
			<div class="postare">
				<button type="button" class="inapoi"> <a href="action_login.php" style="color: white;"> Inapoi </a> </button>
				<button type="button" class="inapoi"> <a href="#" style="color: white;"> Profil: <?php echo $_SESSION['postarealui']; ?> </a> </button>
				<span style="margin-left: 15; color: gray;"> postat pe data de 
					<?php 
						echo date('d',strtotime($_SESSION['datapostarii'])); 
						echo ' ' . date('M',strtotime($_SESSION['datapostarii']));
						echo ' ' . date('Y',strtotime($_SESSION['datapostarii']));
					?>
				</span>
				<br>
				<p class="titlu" style="margin-top: 35; display: inline-block;"> Titlul: <span style="color: blue;"> <?php echo $_SESSION['titlulpostarii']; ?> </span></p><a href="#"><img title="Editeaza titlul"> </img></a>		
				<?php
					echo '<a href="./postari_comentarii.php?id=1&titlu=1" title="Editeaza titlul" style="display: inline-block; margin-left:10px;"><img src="img/edit.png" height="13px" width="13px"></img></a>';
				?>
				<br>
				<?php
				if($_SESSION['textulpostarii'] != '')
					echo '<p class="titlu" style="margin-top: 5; display: inline-block;"> Textul: <span style="color: blue; display: inline-block;">';
					echo $_SESSION['textulpostarii'];
					echo '</span> </p>';
					echo '<a href="./postari_comentarii.php?id=1&text=1" title="Editeaza textul" style="display: inline-block; margin-left:10px;"><img src="img/edit.png" height="13px" width="13px"> </img></a> <br>'
				?>
				<ul class="tabmenu1">
					<li class="selected2"> <a class="selected3" href="#"> <font size=3 style="font-family:Bookman;"> Comentarii </font> </a> </li>
				</ul>
				<div class="numelike">
					<?php
						$localhost = "localhost";
						$idbazadedate = "root";
						$parolabazadedate = "";
						$db2 = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'posts');
						$idulpostarii = $_SESSION['idulpostariilike'];
						$nrcom = $_SESSION['nrcom'];
						$audatlike = "SELECT * FROM comments WHERE idpost='$idulpostarii'";
						$result = mysqli_query($db2,$audatlike);
						$ok=0;
						while ($r = mysqli_fetch_array($result)) 
						{
							echo '<div class="comentariutext">';
								echo '<span style="color: black;">';
									$comentariu = $r['comment'];
									$sql = "SELECT * FROM comments WHERE comment='$comentariu' AND idpost='$idulpostarii'";
									$resultat = mysqli_query($db2,$sql);
									$vector = mysqli_fetch_array($resultat);
									echo $vector['cinedacomm'];
								echo '</span>' . ' pe data de ';
								echo date('d',strtotime($r['data'])); 
								echo ' ' . date('M',strtotime($r['data']));
								echo ' ' . date('Y',strtotime($r['data']));
								echo '<span style="margin-left: 5; color: gray;">';
									echo '<br>' . $r['comment'] . " ";
								echo '</span>';
							echo '</div>';
							$ok=1;
						}
						if($ok==1)
						{
							echo '<form class="formation" method="POST" action="postari_comentarii.php">';
							echo '<textarea rows="3" cols="65" name="comentariu" placeholder="Comenteaza ceva inteligent..."></textarea><br>';
							echo '<button class="comentariu" type="submit" name="comenteaza" value="Comenteaza">Comenteaza</button>';
							echo '<input type="text" name="idulpostarii" value="';
							echo $idulpostarii;
							echo '" style="visibility: hidden;"></input>';
							echo '<input type="text" name="cinedacomment" value="';
							echo $_SESSION['username'];
							echo '" style="visibility: hidden;"></input>';
							echo '<input type="text" name="nrcom" value="';
							echo $nrcom;
							echo '" style="visibility: hidden;"></input>';
							echo '</form>';
						}
						else
						{
							echo '<span style="color: gray;" />Deocamdata acesta postare are 0 comentarii, vrei sa fii primul care comenteaza ceva?<br>';
							echo '<form class="formation" method="POST" action="postari_comentarii.php">';
							echo '<textarea rows="3" cols="65" name="comentariu" placeholder="Comenteaza ceva inteligent..."></textarea><br>';
							echo '<button class="comentariu" type="submit" name="comenteaza" value="Comenteaza">Comenteaza</button>';
							echo '<input type="text" name="idulpostarii" value="';
							echo $idulpostarii;
							echo '" style="visibility: hidden;"></input>';
							echo '<input type="text" name="cinedacomment" value="';
							echo $_SESSION['username'];
							echo '" style="visibility: hidden;"></input>';
							echo '<input type="text" name="nrcom" value="';
							echo $_SESSION['nrcom'];
							echo '" style="visibility: hidden;"></input>';
							echo '</form>';
						}
					?>
				</div>
			</div>
		</div>
	</div>
</body>


</html>