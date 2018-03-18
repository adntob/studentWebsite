
function summert(textStr) {
	
				//**
				
				//* Lag en 0 variabel
				
				//
	
	var sum =0; 
	
	var spltArray = textStr.split(",");
	
	for (var i = 0; i<spltArray.length; i++)
	{
		
		var value =	parseInt(spltArray[i]);
		
		sum += value;
	}
	
	
	return sum;
	

}