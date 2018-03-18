<?php

header("Content-type: text/xml");
header("Content-Disposition:attachment; filename = cache.xml");

//lastUpdate lastUpdate="2017-11-09T08:47:29Z"

			

$naa = date('Y-m-d-H');


$fil = fopen("http://flydata.avinor.no/XmlFeed.asp?airport=SVG" , "r"); //Data ifra Sola-lufthavn


// http://flydata.avinor.no/XmlFeed.asp?TimeFrom=1&TimeTo=7&airport=OSL&direction=D&lastUpdate=2017-11-08T15:03:00Z


while ($linje = fgets($fil) ){
	echo $linje;
}
fclose($fil);

?>