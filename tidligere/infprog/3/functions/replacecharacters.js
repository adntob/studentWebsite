
function replaceCharacters(array){
	
	var regCharacters = /\s*/g;
	
	for (i	=	0;	i	<	array.length;	i++){
		
		if (array[i] = regCharacters )	{
			
			array.splice(i);
		}
	} 
	
	return array
	
}