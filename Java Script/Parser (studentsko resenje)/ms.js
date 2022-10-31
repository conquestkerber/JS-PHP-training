function Parser()
{
	this.izmeni = function(obj)
	{	
		if ( obj.nodeName == "SPAN" )
		{
			if ( obj.parentNode.nodeName == "DIV" )
			{
				obj.className = obj.className + " nested ";
			}
			if ( obj.attributes != null && obj.attributes["isvalid"] != null )
			{
				if ( obj.attributes["isvalid"].value == "true" )
				{
					obj.className = obj.className + " validated ";	
				}
			}
		}
		for ( var i = 0; i < obj.childNodes.length; i++)
		{
			this.izmeni(obj.childNodes[i]);
		}
	}
}