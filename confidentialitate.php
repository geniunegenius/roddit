<?php include('server.php'); ?>
<?php include('server1.php'); ?>
<html>
	<title> roddit : <?php echo $_SESSION['username']; ?> </title>
	<head> 
		<link rel="icon" type="png" href="img\wtm.png"><!--link the watermark-->
		<link rel="stylesheet" type="text/css" href="css\modal.css"><!--link the css file-->
	</head>
	<style>
		body{
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
			width:1366px;
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
		a{
			text-decoration:none;
			color:black;
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
			width:900;
			background-color:#eef2f5;
		}
		.mainleftside{
			float:left;
			padding:0;
			margin-top:0;
			margin-left:0;
			height:90;
			max-height:100%;
			width:964;
			background-color:#eef2f5;
		}
		.mainrightside{
			float:right;
			padding:10 0 0 0;
			margin-top:0;
			height:80;
			max-height:100%;
			width:385;
			background-color:#eef2f5;
			}
		form.search{
			width:375;
			border: 1px solid #f1f1f1;
		}
		input.searchbar{
			width: 99.5%;
			padding: 5px 5px;
			margin: 1 1 1 1;
			display: inline-block;
			border: 1px solid #ccc;
		}
		input.formularsetari{
			width: 100%;
			padding: 5 5 5 10;
			margin: -10 1 1 80;
			display: inline-block;
			border: 1px solid black;
		}
		input.formularsetaricheck{
			width: auto;
			padding: 5 5 5 10;
			margin: 0 1 1 90;
			display: inline-block;
			border: 1px solid black;
		}
		input.salveazasetari{
			width: auto;
			color:white;
			padding: 5 5 5 5;
			margin: 15 1 1 80;
			display: inline-block;
			border: 1px solid blue;
			background-color:blue;
			border-radius:5px;
			cursor:pointer;
		}
		input.salveazasetari:hover{
			opacity:0.8;
		}
		a.copyright1:hover{
			text-decoration:underline;
			color:gray;
		}
		a.linkpostnou{
			text-decoration:none;
			color:black;
			margin-left:15px;
			padding:8px 114px 3px 114px;
			border:1px solid #cee3f8;
			border-radius:5px;
			text-align:center;
			background-color:#cee3f8;
			cursor:pointer;
		}
		a.linkpostnou:hover{
			opacity:0.8;
		}
	.profilerightside{
		float:right;
		margin-top:0;
		height:auto;
		min-height:100%;
		width:449;
		background-color:#eef2f5;
		}
	.chenaruldindreapta{
		margin-left:25;
		margin-top:50;
		height:100px;
		width:350px;
		background-color:white;
		border-style:solid;
		border-width:1px;
		border-color:white;
		border-radius:5px;
	}
	a.linkprofil{
		text-decoration:none;
	}
	a.linkprofil:hover{
		text-decoration:underline;
	}
	a.linkpostnou{
		text-decoration:none;
		color:white;
		margin-left:15px;
		padding:8px 122.5px 3px 122.5px;
		border:1px solid #0000A0;
		border-radius:5px;
		text-align:center;
		background-color:#0000A0;
		cursor:pointer;
	}
	a.linkpostnou:hover{
		opacity:0.6;
	}
	.tabmenu1{
			display:inline-block;
			list-style-type:none;
			margin-left:80px;
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
			background-color:#eef2f5;
		}
		li:hover{
			opacity:0.8;
		}
		a.selected3{
			padding:0;
			background-color:#eef2f5;
			color:blue;
			border-bottom-style:solid;
			border-bottom-width:1.5;
			border-bottom-color:blue;
		}
	
	font{
		font-family:Constantia;
	}
	p.setaritext{
		width:100%;
		text-align:left;
		padding:0;
		margin-top:25px;
		margin-left:80;
		font-weight:bold;
	}
	p.infosetari{
		color:gray;
		width:100%;
		text-align:left;
		padding:0;
		margin-top:-10;
		margin-left:80;
		display:block;
		font-weight:lighter;
	}
	button.setariavatar{
		width:auto;
		background-color: #eef2f5;
		color: black;
		padding:50 15 50 15;
		margin-top:0;
		margin-left:80;
		border: dotted;
		border-color:black;
		cursor: pointer;
		border-radius:5px;
	}
	</style>
	<body bgcolor="#eef2f5">
		<div class="container">
			<!--CHENARUL DE SUS-->
			<div class="top">
				<!--Poza roddit-->
				<a href="action_login.php"><img class="redditlink" src="img\reddit.png" height="40px" width="120px"></img></a>
				<!--Numele,setarile si logout-->
				<div class="login">
					<p class="logpage"><a class="loginpagelink" href="profile.php"> <?php echo $_SESSION['username']; ?></a> <font size=1>|</font> <a class="loginpagelink" href="setari.php">setari</a> <font size=1>|</font> <a class="loginpagelink" href="action_login.php?logout='1'">delogheaza-te</a> </p>
				</div>
			</div>
			<!--Pagina principala-->
			<div class="mainpage">
				<!--Meniul-->
				<ul class="tabmenu1">
					<li class="selected2"><a href="setari.php" id="personalizare"><font size=3 style="font-family:Bookman;">Personalizare profil</font></a></li>
					<li class="selected2"><a class="selected3" href="confidentialitate.php" id="confidentialitate"><font size=3 style="font-family:Bookman;">Confidentialitate</font></a></li>
					<li class="selected2"><a href="regulileprofilului.php" id="reguli"><font size=3 style="font-family:Bookman;">Regulile profilului</font></a></li>
				</ul>
				<!--Formularul-->
				<form method="POST" action="#" style="width:65%;">
					<p class="setaritext">Vizibilitatea conținutului</p>
					<p class="infosetari">Postările de pe acest profil pot apărea global, iar profilul dvs. poate fi descoperit de utilizatori</p>
					<input type="checkbox" name="vizibilitate" id="vizibilitate" class="formularsetaricheck"> <font size=3 style="color:gray;font-family:Bookman;"> Activeaza </font> </input>
					<p class="setaritext">Activ în vizibilitatea comunităților</p>
					<input class="formularsetaricheck" type="radio" id="1" name="comunitatevizibilitate" required> <font size=3 style="color:gray;font-family:Bookman;"> Afișați-mi comunitățile active pe profilul meu </font> </input><br>
					<input class="formularsetaricheck" type="radio" id="2" name="comunitatevizibilitate" required> <font size=3 style="color:gray;font-family:Bookman;"> Nu afișați comunitățile mele active pe profilul meu  </font> </input>
					<br><input class="salveazasetari" name="salveazasetari" type="submit" value="Salveaza">  </input>
				</form>
			</div>
			<div class="profilerightside">
				<div class="chenaruldindreapta" style="height:auto;">
					<?php
						$db3 = mysqli_connect('localhost' , 'root' , '' , 'registration');
						$nume = $_SESSION['username'];
						$sql = "SELECT * FROM users WHERE username='$nume'";
						$result = mysqli_query($db3,$sql);
						while($r = mysqli_fetch_array($result))
						{
							if($r['avatar']){
								echo '<img src="data:image/jpeg;base64,';
								echo base64_encode($r['avatar']);
								echo '" alt="avatar" style="width:100; height:100; border-radius:15%; margin-left:15px; margin-top:30px;" title="Avatar"></img> <br>';
							}
							else
								echo '<img src="/img/avatardefault.png" alt="avatar" style="width:100; height:100; border-radius:15%; margin-left:15px; margin-top:30px;" title="Avatar"></img> <br>';
							echo '<p style="padding:0px 0px 0px 15px; margin-bottom: 0; color:black;"><a class="linkprofil" href="profile.php" title="Profilul tau"><i>u/ </i>' . $_SESSION['username'] . '</a></p>';
							echo '<p style="padding:0px 0px 0px 15px; color:gray; margin: 0;">' . $r['porecla'] .'</p>';
							echo '<p style="padding:0px 0px 0px 15px; color:gray; margin: 0; margin-bottom: 15;"><i>';
							if ($r['bio']!=NULL){
								echo '"' . $r['bio'] . '"';
							}
							else
								echo $r['bio'];
							echo '</i> </p>';
						}
					mysqli_close($db3);
					?>
				</div>
			</div>
		</div>
	</body>
</html>
<script>
	document.getElementById('picsetaribut').addEventListener('click', openDialog);
		function openDialog() {
		document.getElementById('picsetari').click();
		}
</script>