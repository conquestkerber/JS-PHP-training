function validacija(){
	var lista = document.querySelectorAll("input");
	var isValue= true;

	list.forEach(function(it))
	{
		if(it.value == null || it.value == undefined || it.value == "")
		{
			alert("Polja moraju biti popunjena" + it.name);
			isValue=false;
		}
	}
	
	if(isValue)
		alert("Formular je popunjen");