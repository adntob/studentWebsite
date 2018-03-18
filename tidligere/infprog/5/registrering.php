<?php
	
	/*
		Definer kode, navn og epost som variabler
	*/
	
	$kode = $_GET["kode"];
	$navn = $_GET["navn"];
	$epost = $_GET["epost"];
	
	$linje = $kode . "¤" . $navn . "¤" . $epost . "¤" . "\n";
	
	// Åpne fil, skriv inn, skriv inn takkebeskjed
	
	//if (stripos(".hiof.no",$_SERVER['remote_host]>=0) 
	$fil =fopen("paameldinger.dat", "a");
	fwrite($fil,$linje);
	fclose($fil);
	echo 'Takk for registreringen din!';
	

?>