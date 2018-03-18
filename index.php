<!DOCTYPE html>
	<html lang = "nb">
		<head>	
			<title>Hjem</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta charset="utf-8"/>
			
			<script src="scripts/myscript.js"></script>  <!--External javascript for mobile-menu-->
			<link rel="icon" type="image/png" sizes="32x32" href="bilder/favicon-32x32.png">
			
			
			<!-- Stylesheets-->
			<link rel="stylesheet" type= "text/css" media =	"all" href="stilark/stil.css"> 
			<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

			
			<meta name="author" content="Ådne Tobiesen" />
			<meta name ="keywords" content = "Responsivt web-design, arbeidskrav webutvikling, content management system, WAMP-server"/>
			<meta name	= "description" content="Studentnettsted for Ådne Tobiesen, student ved HiØ " />
		
		
		</head>
		
		
		<body>
			<!--Shout out to Marius Mikelsen for serving as an inspiration
				http://ask.hiof.no/~mariumi/
			
			-->
		
			<div id ="master-grid">
				<nav id ="breadcrumbs">
					<ul>
						<li>
							<a href="index.php">
								Hjem
							</a>
						</li>
					</ul>
				</nav>

				<header>
					<h1>aadNet</h1>
				</header>
				<main id = "mainContent">
							<!--Navigation menu-computer -->
							
				<nav id ="navigation-menu-computer">
					<ul>
						<?php
							include ('inc/nav.inc.php');
						?>
					</ul>
				</nav>
				
				<!-- Mobile-menu -->
				
				<nav id ="mobile-menu">
				
				<i id ="barButton" class="fa fa-bars fa-2x"  aria-hidden="true"></i>				
					<ul	id ="drop-down-list">
						<?php
							include ('inc/nav.inc.php');
						?>
					
					</ul>					
				</nav>
				
					<section id ="flexWrapperIndex">
						<article>
							<header >
								<h2>Pågående prosjekter</h2>
							</header>
							<!--
							<img class ="mySlides" width = "50%"" alt ="BrickPi arm" src = "img/arm.jpg" />
							<img class ="mySlides" width = "50%"" alt ="BrickPi arm" src = "img/app.jpg" />
							-->
							<ul>
								<li>
									Objektorientert programmering
									<ul>
										<li>Medieapp</li>
										<li>Robocode</li>
										
									</ul>
								</li>
								
								<li>
								Makerspace
									
								</li>
								
							</ul>
							
						
						</article>
						
						<article>
							<header>
								<h2>Pågående kurs</h2>
							</header>
							<p>
								<ul>
									<li>
										Objektorientert <!--(HTML5/CSS3 og div. webteknologier)  -->
									</li>
									<li>
										Innføring i datasikkerhet <!--(JavaScript og databaser)-->
									</li>
									<li>
										Databaser
									</li>
								</ul>
							</p>
						</article>
						<article>
							<header>
								<h2>Prosjekter</h2>
							</header>
							<p>
								<ul>
									<li>
										Eget mekk	
									</li>
									<li>
										Div. websider
									</li>
									<li>
										Grunnleggende IT
									</li>
								</ul>
							</p>
						</article>
					</section>
				</main>
				
				
				<!-- Main-section -->
				
				
				<!--Footer -->
				
				
				
				
				<?php 
					include_once('inc/footer.inc.php')
				?>
				
			</div>
			
		</body>

	</html>