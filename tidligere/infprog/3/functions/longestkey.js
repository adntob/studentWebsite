
function longestKeyInObject(object){

								
					//**
			
					//* Sorteringsalgoritme
					
					//* Har tallet større lengde enn 0? Da er dette størst
					
					//* Har neste tall større enn dette, da har det størst....etc

		
	var max = 0;
	
	longestWord = "";		
		
		
	for (	key in object	){
		

		if (	key.length	>	max	){
			
			max = key.length;
			
			 longestWord	= key;
						
			}
					
					
		}

		return longestWord;
}