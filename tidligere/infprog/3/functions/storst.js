	function storst(textString){				//Tar inn en array, og finner det største tallet
				
					var max = 0;
					
					
					var spltTextString = textString.split(",");
					
						for (var i=0; i<textString.length;i++){
							
							var value = parseInt(spltTextString[i]);
							
							if(	value	>	max	){
								
								 max =  value;
								 
								 
						}
							
					}
					
					return max; 
								
					
				}