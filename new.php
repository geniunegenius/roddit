<?php include('server.php'); ?>
<?php include('server3.php'); ?>
<html>
	<title> roddit </title>
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="icon" type="png" href="img\wtm.png"><!--link the watermark-->
		<link rel="stylesheet" type="text/css" href="css\modal.css"><!--link the css file-->
		<link rel="stylesheet" href="jquery-ui.min.css"><!--link the css file-->
		<script src="jquery.js"></script>
		<script src="jquery-ui.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#search').keyup(function(){
					var name = $('#search').val();
					$.ajax({ 
						type:'POST', 
						url:'get_user1.php',
						data:{name:name},
						success:function(data){
					$('div#rezultate').css({'display':'block','border':'1px solid #ccc'});
					$('div#rezultate').html(data);}
					});
				});
			});
		</script>
	</head>
	<style>
		div#rezultate{
			width: 346.2;
			min-height:0;
			padding: 0px 0px;
			margin: -3 0 0 2;
			border: 0px solid #ccc;
			border-style:double;
			display:none;
			
		}
		#pic{
			vertical-align:middle;
			width:30; height:30; border-radius:5%; margin:0; padding:0;
		}
		#user{
			margin:2px;
		}
		a#searchlink{
			text-decoration:none;
			color:blue;
		}
	</style>
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
		.tabmenu{
			display:inline-block;
			list-style-type:none;
			margin-left:25px;
			margin-top:-19px;
			padding:0px
		}
		li{
			background-color:#ADD8E6;
			display:inline-block;
			padding:1px 5px 0px 5px;
			margin-right:5px;
		}
		li.selected{
			border:1px solid #0000A0;
			border-bottom:1px solid white;
			background-color:white;
		}
		li:hover{
			opacity:0.8;
		}
		font{
			font-family:Constantia;
		}
		a{
			text-decoration:none;
			color:black;
		}
		a.selected1{
			text-decoration:none;
			color:orange;
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
			padding:5 0 0 10;
			margin-top:0px;
			margin-left:0px;
			height:auto;
			min-height:100%;
			width:1366;
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
			padding:17 0 0 0;
			margin-top:0;
			height:70;
			max-height:100%;
			width:385;
			background-color:white;
			}
		form.search{
			width:350;
			margin:13 0 0 0;
			border: 1px solid #f1f1f1;
		}
		input#search{
			width: 99.5%;
			padding: 5px 5px;
			margin: 1 1 0 1;
			display: inline-block;
			border: 1px solid #ccc;
		}
		a.copyright1:hover{
			text-decoration:underline;
			color:gray;
		}
		a.linkpostnou{
			font-family:Bookman;
			text-decoration:none;
			color:black;
			margin:10 0 10 0;
			padding:6px 90px 3px 90px;
			border:1px solid #cee3f8;
			border-radius:5px;
			text-align:center;
			background-color:#cee3f8;
			cursor:pointer;
		}
		a.linkpostnou:hover{
			opacity:0.8;
		}
		.chenarnewsfeed{
			margin-left:0;
			margin-top:0;
			height:auto;
			min-height:100%;
			width:auto;
			background-color:white;
			border-style:solid;
			border-width:1px;
			border-color:white;
			border-radius:5px;
		}
		.divpostareright{
			float:left;
			height:auto;
			min-height:40;
			width:69.3%;
			margin:5 0 0 0;
			padding:0;
			border:1px solid white;
			border-radius:5px;
			background-color:white;
		}
		p.niciunpost{
			text-align:left;
			color:gray;
			margin-left:150;
		}
		p.niciunpost1{
			padding:0;
			text-align:left;
			color:black;
			margin:0;
		}
		p.niciunpost2{
			padding:0;
			text-align:left;
			color:#1e90ff;
			margin:0;
		}
		p.niciunpost3{
			display:block;
			padding:0;
			text-align:left;
			color:gray;
			margin-top:0;
			margin-left:0;
		}
		.collapse{display:none}
		.collapse.in{display:block}
		a.comentariilink{
			display:inline-block;
			padding-right:10;
			color:black;
		}
		a.comentariilink:hover{
			text-decoration:underline;
		}
		a.comentariilinklike{
			display:inline-block;
			color:black;
		}
		a.comentariilinklike:hover{
			text-decoration:underline;
		}
		.comentariilinkscore{
			display:inline-block;
			color:gray;
			padding-right:10;
		}
		.redditlink{
			display:inline-block;
			margin:5 0 0 0;
			padding:0;
		}
		.redditlink1{
			display:block;
			margin-top: 5;
			background-color:#d3d3d3;
			padding:0;
			border:1px solid #d3d3d3;
			border-radius:5px;
		}
		.redditlink1:hover{
			background-color:#add8e6;
			border:1px solid #add8e6;
			border-radius:5px;
		}
		a.redditlink2{
			text-decoration:none;
		}
		.divpostaretext{
			width:95%;
			border:1px solid #1e90ff;
			border-radius:5px;
			background-color:#d3d3d3;
			height:auto;
			min-height:auto;
			padding:5 5 0 5;
			margin-left:30;
			margin-top:-10;
			margin-bottom:10;
			
		}
	</style>
	<body>
		<div class="container">
			<!--CHENARUL DE SUS-->
			<div class="top">
				<!--Poza roddit-->
				<a href="index.php"><img class="redditlink" src="img\reddit.png" height="40px" width="120px"></img></a>
				<!--Meniul-->
				<ul class="tabmenu">
					<li><a href="index.php" id="hot"><font size=4>trending</font></a></li>
					<li class="selected"><a class="selected1" href="new.php" id="new"><font size=4>noi</font></a></li>
				</ul>
				<!--Login si signup-->
				<div class="login">
					<p class="logpage">Vrei sa ni te alaturi? <a href="#" class="copyright1" onclick="document.getElementById('id01').style.display='block'">Logheaza-te</a> sau <a href="#" class="copyright1" onclick="document.getElementById('id02').style.display='block'">inregistreaza-te</a>.</p>
				</div>
			</div>
			<div class="mainleftside">
				<div style="padding:2 2 2 2;margin:11 10 10 10; width:942; height:62; background-color:#c3c3c3; border:1px solid orange; border-radius:5px;"> 
					<h4 style="padding:0; margin:0; text-align: left; display:inline; font-size:18;">In acest tab apar cele mai noi postari: cele mai noi 'pieces of art' pe care utilizatorii le posteaza. Roddit isi rezerva dreptul de a-si alege utilizatorii si continutul partajat de acestia in conformitate cu regulamentul si regulile de utilizare ale platformei.</h4><h3 style="display:inline; color:red;"> Utilizarea Roddit este un privilegiu, respectati-l.</h4>
				</div>
			</div>
			<div class="mainrightside">
				<a class="linkpostnou" href="#" onclick="document.getElementById('id09').style.display='block'">POSTEAZA CEVA NOU</a>
				<form method="POST" action="#" class="search" autocomplete="off">
					<input type="text" name="search" id="search" placeholder="Cauta..."></input>
				</form>
				<div id="rezultate"> </div><br>
				
			</div>
			<!--Pagina principala-->
			<div class="mainpage">
				<!--<p class="copyright">Use of this site constitutes acceptance of our <a href="" class="copyright1">User Agreement</a> and <a href="" class="copyright1">Privacy Policy</a>.&copy; 
				<script language="javascript" type="text/javascript">
					var today = new Date()
					var year = today.getFullYear()
					document.write(year)
				</script> roddit inc. All rights reserved.</p>-->
				<?php
				$data2 = date("Y-m-d");
				$data3 = date("h:i:s");
				$oracurenta = date('h', strtotime($data3));
				$minutecurente = date('i', strtotime($data3));
				$secundecurente = date('s', strtotime($data3));
				$ancurent = date('Y', strtotime($data2));
				$lunacurenta = date('m', strtotime($data2));
				$zicurenta = date('d', strtotime($data2));
				echo '<div class="chenarnewsfeed">';
				$var=$k;
				$ok=1;
				while($var>0 && $ok<25){
					$_SESSION['titlu'] = $titlu[$var];
					$_SESSION['text'] = $text[$var];
					$_SESSION['profil'] = $profil[$var];
					$_SESSION['ora'] = $ora[$var];
					$_SESSION['data'] = $data[$var];
					$data1 = $_SESSION['data'];
					$an = date('Y', strtotime($data1));
					$_SESSION['an'] = $an; //iau anul postarii
					$luna = date('m', strtotime($data1));
					$_SESSION['luna'] = $luna; //iau luna postarii
					$zi = date('d', strtotime($data1));
					$_SESSION['zi'] = $zi; //iau ziua postarii
					$data4 = $_SESSION['ora'];
					$orapostare = date('h', strtotime($data4));
					$_SESSION['orapostare'] = $orapostare; //iau ora postarii
					$minutepostare = date('i', strtotime($data4));
					$_SESSION['minutepostare'] = $minutepostare; //iau minutele postarii
					$secundepostare = date('s', strtotime($data4));
					$_SESSION['secundepostare'] = $secundepostare; //iau secundele postarii
					if($_SESSION['profil'] == 0){
						echo '<div class="chenarnewsfeed">';
							echo '<p class="niciunpost"> <i> hmmm... se pare ca nu ai postat nimic inca </i> </p>';
						echo '</div>';
					}
					else
					{	
						echo '<div id="divmare" class="divpostare">';
							echo '<div id="divdreapta" class="divpostareright">';
								echo '<a href="./new.php?comentariupost=1">';
								echo '<font style="color:#1e90ff;font-family:Bookman;" size="3">';
								echo $_SESSION['titlu'];
								echo '</font>';
								echo '</a>';
								if($_SESSION['text'] != '') //Daca exista text
								{
								echo '<a href="#demo' . $var . '"' . ' data-toggle="collapse" class="redditlink2"><img class="redditlink1" src="img\text+.png" height="25px" width="25px"></img></a>';
								echo '<p class="niciunpost3" style="margin-top:-32;margin-left:30;">' . "postat acum ";
								if($zicurenta == $_SESSION['zi'] && $lunacurenta == $_SESSION['luna'] && $ancurent == $_SESSION['an'])
								{
									$difore = $oracurenta - $orapostare;
									if ($difore == 1)
										echo $difore . ' ora';
										if ($difore > 1){
											echo $difore . ' ore';
										}
										else
											if ($difore <= 0)
											{
												$difminute = $minutecurente - $minutepostare;
												if ($difminute > 0)
													echo $difminute . ' minute';
												else
													if ($difminute <= 0)
													{
														$difsecunde = $secundecurente - $secundepostare;
														if ($difsecunde > 0)
															echo ' cateva secunde';
													}
											}
								}
								else
								{
									if($zicurenta >= $_SESSION['zi'] && $lunacurenta == $_SESSION['luna'])
									{
										$difzile = $zicurenta - $_SESSION['zi'];
										if($difzile == 1)
											echo $difzile . ' zi';
										else
											if($difzile > 0)
												echo $difzile . ' zile';
									}
									else{
										if($lunacurenta >= $_SESSION['luna'] && $ancurent == $_SESSION['an'])
										{
											$difluni = $lunacurenta - $_SESSION['luna'];
											if($difluni == 1)
												echo $difluni . ' luna';
											else
												if($difluni > 1)
													echo $difluni . ' luni';
										}
										else
											if($ancurent >= $_SESSION['an'])
											{
												$difani = $ancurent - $_SESSION['an'];
												if ($difani == 1)
													echo $difani . ' an';
												else
													if ($difani > 0)
														echo $difani . ' ani';
											}
									}
									
								}
								echo ' de ' . '<a href="#" style="color:blue;">' . $utilizator[$var] . '</a>' . '</p>';
								echo '<p class="niciunpost3" style="margin-top:-17;margin-left:30;">' . '<a id="susbutton" href="./index.php?like=0" . "class="comentariilinklike"> sus </a>' . '<span class="comentariilinkscore">(' . $up[$var] . ')<span>';
								echo ' <a href="./index.php?dislike=0' . '"class="comentariilinklike" style="padding-left:10;"> jos </a>' . '<span class="comentariilinkscore">(' . $down[$var] . ')<span>' . '<a href="./new.php?comentariupost=1" class="comentariilinklike" style="padding-left:10;"> comentarii </a>' . '<span class="comentariilinkscore">(' . $comentariu[$var] . ')<span>' . '<a href="#" class="comentariilink" style="padding-left:10;"> share </a>' . ' <span style="color:blue;">postat pe ' . $_SESSION['zi'];
								if($_SESSION['luna'] == 1)
									echo ' ianuarie ';
								else
								{
									if($_SESSION['luna'] == 2)
										echo ' februarie ';
									else
										if($_SESSION['luna'] == 3)
											echo ' martie ';
										else
											if($_SESSION['luna'] == 4)
												echo ' aprilie ';
											else
												if($_SESSION['luna'] == 5)
													echo ' mai ';
												else
													if($_SESSION['luna'] == 6)
														echo ' iunie ';
													else
														if($_SESSION['luna'] == 7)
															echo ' iulie ';
														else
															if($_SESSION['luna'] == 8)
																echo ' august ';
															else
																if($_SESSION['luna'] == 9)
																	echo ' septembrie ';
																else
																	if($_SESSION['luna'] == 10)
																		echo ' octombrie ';
																	else
																		if($_SESSION['luna'] == 11)
																			echo ' noiembrie ';
																		else
																			if($_SESSION['luna'] == 12)
																				echo ' decembrie ';
								}
								echo $_SESSION['an'] . '</span></p>';
								echo '<div class="divpostaretext collapse" id="demo';
								echo $var;
								echo '">';
									echo '<span id="demo';
									echo $var;
									echo '" style="color:white;">' . $_SESSION['text'] . "</span>";
								echo '</div>';
								}
								else //Daca nu exista text
								{
								echo '<p class="niciunpost3" style="margin-top:0;margin-left:0;">' . "postat acum ";
								if($zicurenta == $_SESSION['zi'] && $lunacurenta == $_SESSION['luna'] && $ancurent == $_SESSION['an'])
								{
									$difore = $oracurenta - $orapostare;
									if ($difore == 1)
											echo $difore . ' ora';
									else
										if($difore > 1)
											echo $difore . ' ore';
									else
										if ($difore <= 0)
										{
											$difminute = $minutecurente - $minutepostare;
											if ($difminute == 1)
												echo $difminute . ' minut';
											else
												if($difminute > 1)
													echo $difminute . ' minute';
											else
												if ($difminute <= 0)
												{
													$difsecunde = $secundecurente - $secundepostare;
													if ($difsecunde > 0)
														echo ' cateva secunde';
												}
										}
								}
								else
								{
									if($zicurenta >= $_SESSION['zi'] && $lunacurenta == $_SESSION['luna'])
									{
										$difzile = $zicurenta - $_SESSION['zi'];
										if($difzile == 1)
											echo $difzile . ' zi';
										else
											if($difzile > 1)
												echo $difzile . ' zile';
									}
									else{
										if($lunacurenta >= $_SESSION['luna'] && $ancurent == $_SESSION['an'])
										{
											$difluni = $lunacurenta - $_SESSION['luna'];
											if($difluni == 1)
												echo $difluni . ' luna';
											else
												if($difluni > 1)
													echo $difluni . ' luni';
										}
										else
											if($ancurent >= $_SESSION['an'])
											{
												$difani = $ancurent - $_SESSION['an'];
												if ($difani == 1)
													echo $difani . ' an';
												else
													if ($difani > 1)
														echo $difani . ' ani';
											}
									}
									
								}
								echo ' de ' . '<a href="#" style="color:blue;">' . $utilizator[$var] . '</a>' . '</p>';
								echo '<p class="niciunpost3" style="margin-top:-17;margin-left:0;">' . '<a id="susbutton" href="./index.php?like=0" . "class="comentariilinklike"> sus </a>' . '<span class="comentariilinkscore">(' . $up[$var] . ')<span>';
								echo ' <a href="./index.php?dislike=0' . '"class="comentariilinklike" style="padding-left:10;"> jos </a>' . '<span class="comentariilinkscore">(' . $down[$var] . ')<span>' . '<a href="./new.php?comentariupost=1" class="comentariilinklike" style="padding-left:10;"> comentarii </a>' . '<span class="comentariilinkscore">(' . $comentariu[$var] . ')<span>' . '<a href="#" class="comentariilink" style="padding-left:10;"> share </a>' . ' <span style="color:blue;">postat pe ' . $_SESSION['zi'];
								if($_SESSION['luna'] == 1)
									echo ' ianuarie ';
								else
								{
									if($_SESSION['luna'] == 2)
										echo ' februarie ';
									else
										if($_SESSION['luna'] == 3)
											echo ' martie ';
										else
											if($_SESSION['luna'] == 4)
												echo ' aprilie ';
											else
												if($_SESSION['luna'] == 5)
													echo ' mai ';
												else
													if($_SESSION['luna'] == 6)
														echo ' iunie ';
													else
														if($_SESSION['luna'] == 7)
															echo ' iulie ';
														else
															if($_SESSION['luna'] == 8)
																echo ' august ';
															else
																if($_SESSION['luna'] == 9)
																	echo ' septembrie ';
																else
																	if($_SESSION['luna'] == 10)
																		echo ' octombrie ';
																	else
																		if($_SESSION['luna'] == 11)
																			echo ' noiembrie ';
																		else
																			if($_SESSION['luna'] == 12)
																				echo ' decembrie ';
								}
								echo $_SESSION['an'] . '</span></p>';
								}
								echo '';
							echo '</div>';
						echo '</div>';
					}
					$var=$var-1;
					$ok=$ok+1;
				}
				echo '</div>';
				?>
			</div>
		</div>
		<!-- Login page -->
		<div id="id01" class="modal">
		<!-- Modal login content -->
		<form class="modal-content animate" action="index.php" method="POST">
			<span onclick="document.getElementById('id01').style.display='none'" class="close animate" title="Inchidere">&times;</span>
			<div class="imgcontainer">
				<img src="img\img_avatar2.png" height="100px" alt="Avatar" class="avatar" title="Avatar">
			</div>
			<div class="container1">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button type="submit" name="login">Login</button>
				<input type="checkbox" checked="checked"> Aminteste-ti de minte
			</div>
			<div class="container1" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				<span class="psw"><a href="#" class="copyright1">Ti-ai uitat parola?</a></span>
				<span class="psw"><a href="#" class="copyright1" onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'">Creeaza un cont nou!</a></span>
			</div>
		</form>
		</div>
		<!-- Login page #2 butonul de post -->
		<div id="id09" class="modal">
		<!-- Modal login content -->
		<form class="modal-content animate" action="submit.php" method="POST">
			<span onclick="document.getElementById('id09').style.display='none'" class="close animate" title="Inchidere">&times;</span>
			<div class="imgcontainer">
				<img src="img\img_avatar2.png" height="100px" alt="Avatar" class="avatar" title="Avatar">
			</div>
			<div class="container1">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button type="submit" name="loginpostnou">Login</button>
				<input type="checkbox" checked="checked"> Aminteste-ti de minte
			</div>
			<div class="container1" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id09').style.display='none'" class="cancelbtn">Cancel</button>
				<span class="psw"><a href="#" class="copyright1">Ti-ai uitat parola?</a></span>
				<span class="psw"><a href="#" class="copyright1" onclick="document.getElementById('id02').style.display='block';document.getElementById('id09').style.display='none'">Creeaza un cont nou!</a></span>
			</div>
		</form>
		</div>
		<!-- Signup page -->
		<div id="id02" class="modal">
		<!-- Modal signup content -->
		<form class="modal-content animate" action="index.php" method="POST">
			<span onclick="document.getElementById('id02').style.display='none'" class="close animate" title="Inchidere">&times;</span>
			<div class="imgcontainer">
				<img src="img\img_avatar2.png" height="100px" alt="Avatar" class="avatar" title="Avatar"><br>
				<input type="file" id="pic" name="pic" accept="image/*" hidden />
				<button class="button1" id="pozadeavatar"><a href="#" onclick="avatarul()" class="avatar">Incarca-ti avatarul</a></button>
			</div>
			<div class="container1">
				<label><b>Inscrieti-va pentru a obtine experienta dvs. personalizata <i>Roddit</i>!<b></label><br><br>
				<a class="avatar" href="#" onclick="document.getElementById('id03').style.display='block';document.getElementById('id02').style.display='none'"><button type="button" id="nextbtn">Creeaza un cont</button></a>
				<label><b>Ai deja un cont?<a href="#" class="copyright1" onclick="document.getElementById('id01').style.display='block';document.getElementById('id02').style.display='none'"> Logheaza-te </a>
			</div>
			<div class="container1" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
			</div>
		</form>
		</div>
		<!-- Signup page #2(after pressing next) -->
		<div id="id03" class="modal">
		<!-- Modal signup content -->
		<form class="modal-content animate" action="index.php" method="POST">
			<span onclick="document.getElementById('id03').style.display='none'" class="close animate" title="Inchidere">&times;</span>
			<div class="textsignuppage">
				<h3 class="textsignup">Alege-ti numele de utilizator</h3>
			</div>
			<div class="container2">
				<!-- Erorile daca esueaza validarea -->
				<p class="loginpage1">Numele dvs. de utilizator este modul in care va vor vedea ceilalti membri ai comunitatii. Acest nume va fi folosit petru a va credita pentru lucrurile pe care le distribuiti pe Roddit. Cum ar trebui sa va numim?</p>
				<label><b class="textsignup1">ALEGE NUMELE DE UTILIZATOR</b></label><br>
				<input name="username" type="text" placeholder="nume de utilizator" class="signupuname" required></input><br><br>
				<label><b class="textsignup1">SETEAZA PAROLA</b></label><br>
				<input id="password" name="password" type="password" placeholder="parola" class="signupuname" required></input><br><br>
				<label><b class="textsignup1">Adresa de email</b></label><br>
				<input id="email" name="email" type="text" placeholder="email" class="signupuname" required></input>
			</div>
			<div class="container1" style="background-color:#f1f1f1">
				<p style="color:gray;">Pasul 2 din 2</p>
				<button id="inapoi" type="button" onclick="document.getElementById('id02').style.display='block';document.getElementById('id03').style.display='none'" class="button2">Inapoi</button>
				<button name="register" type="submit" class="button3">Gata</button>
			</div>
		</form>
		</div>
	</body>
</html>
<script>
		// Get the modals
		var loginmodal = document.getElementById('id01');
		var signupmodal = document.getElementById('id02');
		var signupmodal2 = document.getElementById('id03');
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		if (event.target == loginmodal) {
			loginmodal.style.display = "none";
		}
		else
		{
			if (event.target == signupmodal)
				signupmodal.style.display = "none";
			else
				if (event.target == signupmodal2)
					signupmodal2.style.display = "none";
				else
					if (event.target == loginmodal2)
						loginmodal2.style.display = "none";
		}
	}
		document.getElementById('pozadeavatar').addEventListener('click', openDialog);
		function openDialog() {
		document.getElementById('pic').click();
		}
</script>