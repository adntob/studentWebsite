	window.onload = run;

	var xmlhttp;
	var dataPkt;
	var arrayObjects = [];
	var i;

	function run() {
		
		xmlhttp	= new XMLHttpRequest();
		var filnavn = "presentasjoner.dat" + "?id=" + Math.random();
		xmlhttp.open("GET", filnavn, true);
		xmlhttp.onreadystatechange = lastet
		xmlhttp.send();
		
		document.getElementById("btnRegister").onclick = lagre;
		
		
	}
	
	
	// Last inn de aktuelle dataene.
	
	function lastet() {
		
		if (xmlhttp.readyState ===	4 &&	xmlhttp.status ===	200){
			var linjer = xmlhttp.responseText.split("\n");
			
			
			for (i =0; i<linjer.length; i++){
				
				dataPkt = linjer[i].split("¤");	
				
				arrayObjects[i] = {kode: dataPkt[0], bedrift: dataPkt[1], 
				tidsPkt: dataPkt[2], plasser: dataPkt[3]		}
			}
		}
		
		if (xmlhttp.status === 400){
			alert ('noe må ha gått galt med tilkoplingen din!');
		}	
		
		skrivUtBedrifterPaaSiden();
		
	}
	
	//Oppgave A)
	
	function skrivUtBedrifterPaaSiden() {
		
		var list = document.getElementById("companyList")
		
		for (i =0; i<arrayObjects.length; i++){
			if ( new Date() < new Date(arrayObjects[i].tidsPkt) )
			{
			
				var newDiv = document.createElement("DIV");
				newDiv.className = "presentationDiv";
				var newHeader = document.createElement("H4");
				newDiv.appendChild(newHeader);
				newHeader.innerHTML = arrayObjects[i].kode + "-" + arrayObjects[i].bedrift;
				var newParagraph = document.createElement("P");
				newParagraph.innerHTML = "Tid/dato: " + arrayObjects[i].tidsPkt + "</br>"
				+ "Antall Plasser: " + arrayObjects[i].plasser;
				newDiv.appendChild(newParagraph);
				document.getElementById("articlePresentations").appendChild(newDiv);			
				var newOption = document.createElement("option");
				newOption.value = arrayObjects[i].kode;
				newOption.innerHTML = arrayObjects[i].bedrift;
				list.appendChild(newOption);
				
				
			}
		}
	}
	
	
	//Oppgave B)
	
/*	1). Lag PHP-script som det går ann å skrive til (gjort)
	
	2). Se om du kan lage et JavaScript som kan kommunisere med dette. (gjort)
	
	3). Lag en liste over bedrifter og selve GUI-et (gjort);
	
	*/

	function lagre() {
		
		var navn = document.getElementById("txtName").value;
		var kode = document.getElementById("companyList").value;
		var epost = document.getElementById("txtEmail").value;
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = kommuniser;
		
		xmlhttp.open("GET", "registrering.php?kode="+kode+"&navn=" + navn + "&epost="+epost, true);
		
		//registrering.php?kode=5&navn=Hans Hansen&epost=Hans_hansen@aol.com
		
		
		xmlhttp.send();
	}
	
	function kommuniser() {
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200){
			document.getElementById("printRegister").innerHTML = "Takk for registrering!";
		}
		
		
		
	}
	
	//Oppgave c)
	
	