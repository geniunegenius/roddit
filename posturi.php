<?php include('server.php'); ?>
<?php include('server6.php'); ?>
<html>
	<title> roddit : <?php echo $_SESSION['username']; ?> </title>
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="icon" type="png" href="img\wtm.png"><!--link the watermark-->
		<link rel="stylesheet" type="text/css" href="css\modal.css"><!--link the css file-->
	</head>
	<style>
		#urmaritori{
			font-family:Arial;
			display:inline-block;
			margin:10 0 0 15;
			padding:2 8 0 7;
			height:auto;
			width:auto;
			text-align:center;
			background-color:#d3d3d3;
			border:1px solid #d3d3d3;
			border-radius:5px;
			color:gray;
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
		padding:0;
		background-color:white;
		border-style:solid;
		border-width:1px;
		border-color:white;
		border-radius:5px;
	}
	.chenarnewsfeed{
		margin-left:80;
		margin-top:0;
		height:auto;
		min-height:100%;
		width:735;
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
		padding:6px 118px 3px 118px;
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
		.divpostareright{
			float:left;
			height:auto;
			min-height:40;
			width:99%;
			margin:2 0 2 2;
			padding:0;
			border:1px solid white;
			border-radius:5px;
			background-color:white;
			
		}
		.divpostareleft{
			float:left;
			height:auto;
			min-height:40;
			width:30;
			margin:0;
			padding:0;
			background-color:white;
		}
		.divpostaretext{
			width:680;
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
		.comentariilinkscore{
			display:inline-block;
			color:gray;
			padding-right:10;
		}
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
	</style>
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
			<!--Pagina principala dreapta-->
			<div class="mainpage">
				<ul class="tabmenu1">
					<li class="selected2"> <a href="profile.php"> <font size=3 style="font-family:Bookman;"> Prezentare Generala </font> </a> </li>
					<li class="selected2"> <a class="selected3" href="#"> <font size=3 style="font-family:Bookman;"> Posturi </font> </a> </li>
					<li class="selected2"> <a href="comentarii.php"> <font size=3 style="font-family:Bookman;"> Comentarii </font> </a> </li>
				</ul>
				<?php
				if($k>0){
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
				while($var){
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
								echo '<a href="./posturi.php?likepost=0&dislikepost=0&comentariupost=1&id=' . $idul[$var] . '&nrcom=' . $comentariu[$var] . '">';
								echo '<font style="color:#1e90ff;font-family:Bookman;" size="3">';
								echo $_SESSION['titlu'];
								echo '</font>';
								echo '</a>';
								if($_SESSION['text'] != '') //Daca exista text
								{
								echo '<a href="#demo' . $var . '" data-toggle="collapse" class="redditlink2"><img class="redditlink1" src="img\text+.png" height="25px" width="25px"></img></a>';
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
								echo ' de ' . '<a href="#" style="color:blue;">' . $_SESSION['username'] . '</a>' . '</p>';
								echo '<p class="niciunpost3" style="margin-top:-17;margin-left:30;">' . '<a id="susbutton" href="./posturi.php?like=' . $up[$var] . '&dislikeuriposturi=' . $down[$var] . '&id=' . $idul[$var] . '&username1=' . $_SESSION['username'] . '" class="comentariilinklike"> sus </a>' . '<span class="comentariilinkscore"><a href="./posturi.php?likepost=1&dislikepost=0&comentariupost=0&id='. $idul[$var] .'" class="comentariilinklike1" style="color:gray;">(' . $up[$var] . ')</a><span>';
								echo ' <a href="./posturi.php?dislike=' . $down[$var] . '&likeuriposturi=' . $up[$var] . '&id=' . $idul[$var] . '&username1=' . $_SESSION['username'] . '" class="comentariilinklike" style="padding-left:10;"> jos </a>' . '<span class="comentariilinkscore"><a href="./posturi.php?likepost=0&dislikepost=1&comentariupost=0&id='. $idul[$var] .'"  class="comentariilinklike1" style="color:gray;">(' . $down[$var] . ')</a><span>' . '<a href="./posturi.php?likepost=0&dislikepost=0&comentariupost=1&id=' . $idul[$var] . '&nrcom=' . $comentariu[$var] . '" class="comentariilinklike" style="padding-left:10;"> comentarii </a>' . '<span class="comentariilinkscore">(' . $comentariu[$var] . ')<span>' . '<a href="#" class="comentariilink" style="padding-left:10;"> share </a>' . ' <span style="color:blue;">postat pe ' . $_SESSION['zi'];
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
								echo ' de ' . '<a href="#" style="color:blue;">' . $_SESSION['username'] . '</a>' . '</p>';
								echo '<p class="niciunpost3" style="margin-top:-17;margin-left:0;">' . '<a id="susbutton" href="./posturi.php?like=' . $up[$var] . '&dislikeuriposturi=' . $down[$var] . '&id=' . $idul[$var] . '&username1=' . $_SESSION['username'] . '" class="comentariilinklike"> sus </a>' . '<span class="comentariilinkscore"><a href="./posturi.php?likepost=1&dislikepost=0&comentariupost=0&id='. $idul[$var] .'" class="comentariilinklike1" style="color:gray;">(' . $up[$var] . ')</a><span>';
								echo ' <a href="./posturi.php?dislike=' . $down[$var] . '&likeuriposturi=' . $up[$var] . '&id=' . $idul[$var] . '&username1=' . $_SESSION['username'] . '" class="comentariilinklike" style="padding-left:10;"> jos </a>' . '<span class="comentariilinkscore"><a href="./posturi.php?likepost=0&dislikepost=1&comentariupost=0&id=' . $idul[$var] . '" class="comentariilinklike1" style="color:gray;">(' . $down[$var] . ')</a><span>' . '<a href="./posturi.php?likepost=0&dislikepost=0&comentariupost=1&id=' . '&nrcom=' . $comentariu[$var] . '" class="comentariilinklike" style="padding-left:10;"> comentarii </a>' . '<span class="comentariilinkscore">(' . $comentariu[$var] . ')<span>' . '<a href="#" class="comentariilink" style="padding-left:10;"> share </a>' . ' <span style="color:blue;">postat pe ' . $_SESSION['zi'];
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
				}
				echo '</div>';}
				else{
							echo '<p class="niciunpost"> <i> hmmm... se pare ca nu ai postat nimic inca </i> </p>';}
				?>
			</div>
			<div class="profilerightside">
				<div class="chenaruldindreapta" style="height:auto;">
					<!--<img src="img\avatardefault.png" height="85px" alt="Avatar" class="avatar" style="width:25%; border-radius:15%; background-color:#cee3f8; margin-left:15px; margin-top:30px;" title="Avatar"><br>-->
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
							//echo '<br>';
							echo '<div id="urmaritori">';
							echo '<span style="margin:0; padding:0; ">Urmăritori ' . $r['urmaritori'] . '</span>';
							echo '</div>';
							echo '<div id="urmaritori">';
							echo '<span style="margin:0; padding:0; ">Urmăriri ' . $r['urmariri'] . '</span>';
							echo '</div>';
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
					<a class="linkpostnou" href="submit.php" title="Posteaza ceva nou">POST NOU</a>
					<p style="padding:5px 0px 0px 15px; display:inline-block;"><a class="linkprofil" style="color:gray;" href="setari.php">Setari</a></p>
					<p style="padding:5px 20px 0px 0px; float:right;"><a class="linkprofil" style="color:gray;" href="">Ajutor</a></p>
				</div>
				
			</div>
		</div>
	</body>
</html>