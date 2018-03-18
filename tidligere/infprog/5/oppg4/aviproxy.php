<?php

header("Content-type: text/xml");
//header("Content-Disposition:attachment; filename = cache.xml");

//lastUpdate lastUpdate="2017-11-09T08:47:29Z"


			
			//NB! Jeg fikk ikke til å cache dataen hjemme, det skal uansett gå ann å laste dataene ifra Avinor på alle andre internett.
		
			

//$naa = date('Y-m-d-H');

//. "&lastUpdate=" . $naa
$fil = fopen("http://flydata.avinor.no/XmlFeed.asp?airport=BGO" , "r"); //Data ifra Sola-lufthavn


// http://flydata.avinor.no/XmlFeed.asp?TimeFrom=1&TimeTo=7&airport=OSL&direction=D&lastUpdate=2017-11-08T15:03:00Z


while ($linje = fgets($fil) ){
	echo $linje;
}
fclose($fil);

?>