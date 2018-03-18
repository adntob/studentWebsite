<!DOCTYPE html>
	<html lang = "nb">
		<head>	
			<title>Kurs</title>
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
			<div id ="master-grid">
				<nav id ="breadcrumbs">
					<ul>
						<li>
							<a href="index.php">
								Hjem
							</a>
						</li>
						<li>		
								Kurs
							
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
								<h2>Innføring i programmering>
							</header>
							
							<h3>Kursbeskrivelse (Uofisiell):</h3>
							<p>
								Programmering i JavaScript, generell problemløsning. Grunnleggende php, Ajax og databasehåndtering 
							</p>
							<h3> Kursbeskrivelse (Ofisiell) </h3>
							<p>
							 <a href ="https://www.hiof.no/studieinformasjon/studieplaner/?&displayitem=8991&module=studieinfo&type=emne">
								HIØ
							 </a>
							</p>
							
							<h3>Obligatoriske innleveringer</h3>
							<ul>
								<li>
									<a href ="tidligere\infprog\1\index.html">
										Oblig1
									</a>	
								</li>
								<li>
									<a href ="tidligere\infprog\2">
										Oblig2
									</a>	
								</li>
								<li>
									<a href ="tidligere\infprog\3">
										Oblig3
									</a>	
								</li>
								<li>
									<a href ="tidligere\infprog\4\hovedfil.html">
										Oblig4
									</a>
								</li>
								<li>
									<a href ="tidligere\infprog\5\obligatorisk5aogb.html">
										Oblig5
									</a>	
								</li>
								
							</ul>
							
						
						</article>
						
						<article>
							<header >
								<h2>Webutvikling>
							</header>
								<h3> Kursbeskrivelse (Uofisiell) </h3>
							<p>
								Hovedsakelig HTML og CSS.
								HTML5, CSS3 (Bl.a Grid og flexbox), SASS, microdata, semantic web, CMS (Word-press og litt generelt)- og databaser, retningslinjer for web-teknologi (tilgjengelighet og universell utforming), søkemotoroptimalisering/Search Engine Optimalization. Fremtiden innen web-teknologi (Semantic web, cloud-computing).
								
							</p>
							<h3> Kursbeskrivelse (Ofisiell) </h3>
							<p>
								<a href ="https://www.hiof.no/studieinformasjon/studieplaner/?&displayitem=8992&module=studieinfo&type=emne">
								HIØ
								</a>
							</p>
							<h3>Obligatoriske innleveringer</h3>
							<ul>
								<li>
									<a href ="tidligere\web\1\index.html">
										Oblig1
									</a>
								</li>
								<li>
									<a href ="tidligere\web\2\index.html">
										Oblig2
									</a>	
								</li>
								<li>
									<a href ="tidligere\web\3\index.html">
										Oblig3
									</a>	
								</li>
								<li>
									<a href ="tidligere\web\4\index.html">
										Oblig4
									</a>	
								</li>
								<li>
									<a href ="tidligere\web\5\index.html">
										Oblig5
									</a>	
								</li>
							</ul>
							
						
						</article>
						
						<article>
							<header >
								<h2>Objektorientert programmering>
							</header>
							<p>
								Kursbeskrivelse:
							</p>
							
							<h3>Obligatoriske innleveringer</h3>
							Apputvikling (Oblig1-oblig5)
							<a href ="https://github.com/adntob/Oblig5">
								Resultat
							</a>
							
						
						</article>
						<article>
							<header >
								<h2>Datasikkerhet>
							</header>
							<p>
								Kursbeskrivelse:
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