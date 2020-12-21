<?php include('server.php'); ?>
<?php include('server1.php'); ?>
<html>
	<title> <?php echo $_SESSION['username'];?> : postare  </title>
	<head> 
		<link rel="icon" type="png" href="img\wtm.png"><!--link the watermark-->
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
			width:100%;
			background-color:white;
		}
		.mainleftside{
			float:left;
			padding:0;
			margin-top:0;
			margin-left:0;
			height:90;
			max-height:100%;
			width:964;
			background-color:white;
		}
		.mainrightside{
			float:right;
			padding:10 0 0 0;
			margin-top:0;
			height:80;
			max-height:100%;
			width:385;
			background-color:red;
			}
		form.search{
			margin: 5 0 0 100;
			width:300;
			border: 1px solid #f1f1f1;
		}
		form.postare{
			padding: 0 0 0 10;
			margin: 0;
			width:550;
			border: 0;
		}
		input.searchbar{
			width: 99.5%;
			padding: 5px 5px;
			margin: 1 1 1 1;
			display: inline-block;
			border: 1px solid #ccc;
		}
		.submitpost{
			width: 98%;
			height:	auto;
			padding: 5 5 5 5;
			margin-bottom: 15;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius:5px;
			background-color:#cee3f8;
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
		background-color:white;
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
	a.linkpost{
		text-decoration:none;
	}
	a.linkpost:hover{
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
	p.setaritext{
		text-align:left;
		padding-top:25px;
		padding-left:50px;
	}
		a.selected3{
			padding:0;
			background-color:#eef2f5;
			color:blue;
			border-bottom-style:solid;
			border-bottom-width:1.5;
			border-bottom-color:blue;
		}
		p.niciunpost{
			text-align:left;
			color:gray;
			margin-left:150;
		}
		h2.niciunpost1{
			padding:0;
			text-align:left;
			color:black;
			margin-left:100;
			margin-top:5;
		}
		h3.niciunpost2{
			display:inline-block;
			text-align:left;
			color:black;
			margin-left:10;
			margin-top:15;
		}
		p.niciunpost3{
			display:inline-block;
			text-align:left;
			color:black;
			margin-top:0;
			background-color:#D2B48C;
			border:1px solid orange;
			border-radius:5px;
			padding: 4 2 0 2;
			font-family:Constantia;
		}
		p.niciunpost4{
			display:inline-block;
			text-align:left;
			color:black;
			margin-top:0;
			padding: 4 2 0 2;
			font-family:Constantia;
		}
		.tabmenu{
			display:inline-block;
			list-style-type:none;
			margin-left:25px;
			margin-top:-19px;
			padding:0px
		}
		li.selected{
			border:0;
		}
		a.selected1{
			text-decoration:none;
		}
		a.selected1:hover{
			text-decoration:underline;
		}
		textarea{
			text-align:left;
			margin:0;
			padding:3;
			width:100%;
			height:auto;
		}
		input.formularsetaricheck{
			width: auto;
			padding: 5 5 5 10;
			margin: 0 1 1 10;
			display: inline-block;
			border: 1px solid black;
		}
	</style>
	<body bgcolor="white">
		<div class="container">
			<!--CHENARUL DE SUS-->
			<div class="top">
				<!--Poza roddit-->
				<a href="action_login.php"><img class="redditlink" src="img\reddit.png" height="40px" width="120px"></img></a>
				<!-- Meniu -->
				<ul class="tabmenu">
					<li class="selected"><a class="selected1" href="profile.php" id="hot"><font size=4>u/<?php echo $_SESSION['username']; ?></font></a>: postare</li>
				</ul>
				<!--Login si signup-->
				<div class="login">
					<p class="logpage"><a class="loginpagelink" href="profile.php"> <?php echo $_SESSION['username']; ?></a> <font size=1>|</font> <a class="loginpagelink" href="setari.php">setari</a> <font size=1>|</font> <a class="loginpagelink" href="action_login.php?logout='1'">delogheaza-te</a> </p>
				</div>
			</div>
			<div class="mainpage">
				<h3 class="niciunpost2"> posteaza pe roddit </h3>
				<form method="POST" action="profile.php" class="postare">
					<p class="niciunpost3"> Trimiteți o postare de tipul text. Spune ce ai pe suflet. Este obligatoriu un titlu, însă extinderea acestuia în câmpul text nu este. Începutul titlului dvs. cu "votati dacă" este o încălcare a legii intergalactice. </p>
					<div class="submitpost">
						<p class="niciunpost4"> <span style="color:red;">*</span>titlu</p>
						<textarea type="text" name="titlu" cols=2 maxlength=250 placeholder="Titlul postarii" style="min-width:100%; max-width:100%; min-height:35;" required></textarea>
					</div>
					<div class="submitpost">
						<p class="niciunpost4">text <span style="color:gray;">(optional) </span></p>
						<textarea type="text" name="comment" rows=5 maxlength=1500 placeholder="Textul tau" style="min-width:100%; max-width:100%; min-height:35;"></textarea>
					</div>
					<div class="submitpost">
						<p class="niciunpost4"><span style="color:red;">*</span>alege unde sa postezi</p><br>
						<input onclick="myfunc1()" class="formularsetaricheck" type="radio" id="1" value="1" name="profil1" style="font-family:Constantia" required>Profilul tau</input><br>
						<input onclick="myfunc2()" class="formularsetaricheck" type="radio" id="2" value="2" name="profil1" style="font-family:Constantia" required>Profilul altui utilizator:</input>
						<input type="text" id="search" name="search" placeholder="Cauta..." class="searchbar" style="margin-left:10;width:98%;visibility:hidden;"></input>
						<input type="text" id="search1" name="search1" class="searchbar" style="margin-left:10;margin-top:-28;width:98%;background-color:#d3d3d3;visibility:visible;" readonly></input>
					</div>
					<span style="color:black;">*obligatoriu</span><br>
					<input type="submit" name="postez" id="postez" value="Trimiteți" style="width:75; height:25; color:black; background-color:#D2B48C; border:1px solid orange; border-radius:5px;"></input>
					<input type="text" name="username1" id="username1" value="<?php echo $_SESSION['username']; ?>" style="visibility:hidden;"></input>
				</form>
			</div>
		</div>
	</body>
</html>
<script>
	function myfunc1(){
		var z = document.getElementById('search');
		var w = document.getElementById('search1');
		w.style.visibility = 'visible';
		w.style.margin = '-28 0 0 10';
		z.style.visibility = 'hidden';
	}
	function myfunc2(){
		var z = document.getElementById('search');
		var w = document.getElementById('search1');
		z.style.visibility = 'visible';
		w.style.visibility = 'hidden';
		w.style.margin = '-100';
	}
</script>