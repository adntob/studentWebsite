
			window.onload = main;
			
			function main() {
				
				document.getElementById("barButton").onclick = menuActivate;
				document.getElementById("barButton").onmouseover = colourChange;
				document.getElementById("barButton").onmouseout = colorRevert;
				}
				
				//
				
				function menuActivate () {
					
					var barEvent = document.getElementById("drop-down-list");
					
					if (barEvent.style.display === "block"){
						barEvent.style.display = "none";}
					
					else {
						
						barEvent.style.display = "block";}
					
					changeIcon();
				}
				
				function colourChange() {
					document.getElementById("barButton").style.color= "black";		
				}
				
				function colorRevert() {
					document.getElementById("barButton").style.color = "white";
				}
				
				function changeIcon(){

					var barClass = document.getElementById("barButton");
				
					if(barClass.className === "fa fa-bars fa-2x") 
						{barClass.className= "fa fa-window-close fa-2x"}
					
					else {
						barClass.className = "fa fa-bars fa-2x"
					}
				
				
				}
				