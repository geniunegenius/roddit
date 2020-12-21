<?php include('server.php'); ?>
<?php include('server5.php'); ?>

<html>
	<title> roddit : <?php echo $_SESSION['username']; ?> </title>
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
						url:'get_user.php',
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
			background-color:white;
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
			margin-left:0px;
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
	<body bgcolor=white>
		<div class="container">
			<!--CHENARUL DE SUS-->
			<div class="top">
				<!--Poza roddit-->
				<a href="action_login.php"><img class="redditlink" src="img\reddit.png" height="40px" width="120px"></img></a>
				<!--Meniul-->
				<ul class="tabmenu">
					<li><a href="action_login.php" id="hot"><font size=4>trending</font></a></li>
					<li class="selected"><a class="selected1" href="new_login.php" id="new"><font size=4>noi</font></a></li>
				</ul>
				<!--Login si signup-->
				<div class="login">
					<p class="logpage"><a class="loginpagelink" href="profile.php"> <?php echo $_SESSION['username']; ?></a> <font size=1 style="color:black;">|</font> <a class="loginpagelink" href="setari.php">setari</a> <font size=1 style="color:black;">|</font> <a class="loginpagelink" href="action_login.php?logout='1'">delogheaza-te</a> </p>
				</div>
			</div>
			<!--Pagina principala-->
			<div class="mainleftside">
				<div style="padding:2 2 2 2;margin:11 10 10 10; width:942; height:62; background-color:#c3c3c3; border:1px solid orange; border-radius:5px;"> 
					<h4 style="padding:0; margin:0; text-align: left; display:inline; font-size:18;">In acest tab apar cele mai noi postari: cele mai noi 'pieces of art' pe care utilizatorii le posteaza. Roddit isi rezerva dreptul de a-si alege utilizatorii si continutul partajat de acestia in conformitate cu regulamentul si regulile de utilizare ale platformei.</h4><h3 style="display:inline; color:red;"> Utilizarea Roddit este un privilegiu, respectati-l.</h4>
				</div>
			</div>
			<div class="mainrightside">
				<a class="linkpostnou" href="submit.php">POSTEAZA CEVA NOU</a>
				<form method="POST" action="#" class="search" autocomplete="off">
					<input type="text" name="search" id="search" placeholder="Cauta..."></input>
				</form>
				<div id="rezultate"> </div><br>
				
			</div>
			<!--Pagina principala-->
			<div class="mainpage">
				<!--<p class="copyright">Use of this site constitutes acceptance of our <a href="" class="copyright1">User Agreement</a> and <a href="" class="copyright1">Privacy Policy</a>.&copy; 
				<script language="javascript" type="text/javascript">
					k today = new Date()
					k year = today.getFullYear()
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
				$userr = $_SESSION['username'];
				$sql = "SELECT * FROM followers WHERE idurmaritor = '$userr'";
				$result1 = mysqli_query($db3 , $sql);
				$contor = 1;
				$userf = array();
				while($r = mysqli_fetch_array($result1))
				{
					$userf[$contor] = $r['idurmarit'];
					$contor = $contor + 1;
				}
				$ids = join("','",$userf);
				$date2 = "SELECT * FROM posturi WHERE username IN ('$ids') ORDER BY data DESC";
				$result2 = mysqli_query($db2,$date2);
				$titlu = array($result2);
				$text = array($result2);
				$profil = array($result2);
				$ora = array($result2);
				$data = array($result2);
				$idul = array($result2);
				$up = array($result2);
				$down = array($result2);
				$commentariu = array($result2);
				$utilizator = array($result2);
				$k = 1;
				while($r1 = mysqli_fetch_array($result2))
				{
					
					$titlu[$k] = $r1['titlu'];
					$text[$k] = $r1['text'];
					$profil[$k] = $r1['profil'];
					$ora[$k] = $r1['ora'];
					$data[$k] = $r1['data'];
					$idul[$k] = $r1['id'];
					$up[$k] = $r1['likeuri'];
					$down[$k] = $r1['dislikeuri'];
					$comentariu[$k] = $r1['comentarii'];
					$utilizator[$k] = $r1['username'];
					$_SESSION['titlu'] = $titlu[$k];
					$_SESSION['text'] = $text[$k];
					$_SESSION['profil'] = $profil[$k];
					$_SESSION['ora'] = $ora[$k];
					$_SESSION['data'] = $data[$k];
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
								echo '<a href="./new_login.php?comentariupost=1&id=' . $idul[$k] . '&nrcom=' . $comentariu[$k] . '">';
								echo '<font style="color:#1e90ff;font-family:Bookman;" size="3">';
								echo $_SESSION['titlu'];
								echo '</font>';
								echo '</a>';
								if($_SESSION['text'] != '') //Daca exista text
								{
								echo '<a href="#demo' . $k . '"' . ' data-toggle="collapse" class="redditlink2">'.'<img class="redditlink1" src="img\text+.png" height="25px" width="25px"></img></a>';
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
								echo ' de ' . '<a href="new_login.php?usernamevizita='. $utilizator[$k].'" style="color:blue;">' . $utilizator[$k] . '</a>' . '</p>';
								echo '<p class="niciunpost3" style="margin-top:-17;margin-left:30;">' . '<a id="susbutton" href="./new_login.php?like=' . $up[$k] . '&dislikeuriposturi=' . $down[$k] . '&id=' . $idul[$k] . '&username1=' . $_SESSION['username'] . '" class="comentariilinklike"> sus </a>' . '<span class="comentariilinkscore">(' . $up[$k] . ')<span>';
								echo ' <a href="./new_login.php?dislike=' . $down[$k] . '&likeuriposturi=' . $up[$k] . '&id=' . $idul[$k] . '&username1=' . $_SESSION['username'] . '" class="comentariilinklike" style="padding-left:10;"> jos </a>' . '<span class="comentariilinkscore">(' . $down[$k] . ')<span>' . '<a href="./new_login.php?comentariupost=1&id=' . $idul[$k] . '&nrcom=' . $comentariu[$k] . '" class="comentariilinklike" style="padding-left:10;"> comentarii </a>' . '<span class="comentariilinkscore">(' . $comentariu[$k] . ')<span>' . '<a href="#" class="comentariilink" style="padding-left:10;"> share </a>' . ' <span style="color:blue;">postat pe ' . $_SESSION['zi'];
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
								echo $k;
								echo '">';
									echo '<span id="demo';
									echo $k;
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
								echo ' de ' . '<a href="new_login.php?usernamevizita='. $utilizator[$k].'" style="color:blue;">' . $utilizator[$k] . '</a>' . '</p>';
								echo '<p class="niciunpost3" style="margin-top:-17;margin-left:0;">' . '<a id="susbutton" href="./new_login.php?like=' . $up[$k] . '&dislikeuriposturi=' . $down[$k] . '&id=' . $idul[$k] . '&username1=' . $_SESSION['username'] . '" class="comentariilinklike"> sus </a>' . '<span class="comentariilinkscore">(' . $up[$k] . ')<span>';
								echo ' <a href="./new_login.php?dislike=' . $down[$k] . '&likeuriposturi=' . $up[$k] . '&id=' . $idul[$k] . '&username1=' . $_SESSION['username'] . '" class="comentariilinklike" style="padding-left:10;"> jos </a>' . '<span class="comentariilinkscore">(' . $down[$k] . ')<span>' . '<a href="./new_login.php?comentariupost=1&id=' . $idul[$k] . '&nrcom=' . $comentariu[$k] . '" class="comentariilinklike" style="padding-left:10;"> comentarii </a>' . '<span class="comentariilinkscore">(' . $comentariu[$k] . ')<span>' . '<a href="#" class="comentariilink" style="padding-left:10;"> share </a>' . ' <span style="color:blue;">postat pe ' . $_SESSION['zi'];
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
				$k=$k+1;
				}
				echo '</div>';
				
				?>
			</div>
	</body>
</html>