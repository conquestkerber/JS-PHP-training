function MenuItem(n, a, c)
{
	var naziv;
	var adr;
	var cssClass;
	this.Create = function()	// parametri konstruktora su gore - MenuItem(n, a, c)
	{
		this.naziv = n;
		this.adr = a;
		this.cssClass = c;
	}
	this.Create(); 	// konstruktor - da bi metoda klase bila konstruktor, mora se odmah pozvati! 
	
	this.Draw = function(parentID)
	{
		//Pronalazenje roditeljskog objekta
		var obj = document.getElementById(parentID);

		//Kreiranje "a" elementa, odnosno stavke menija
		var obj1 = document.createElement("a");
		obj1.className = this.cssClass;
		obj1.href = this.adr;
		obj1.innerHTML = this.naziv;
		//Dodavanje stavke u roditeljski
		obj.appendChild(obj1);

		//Ubacivanje novog reda	nakon stavke kako bi svaka stavka menija bila u
		//svom redu	
		var obj1 = document.createElement("br");
		obj.appendChild(obj1);
	}
}

function DynamicMenu()
{
	this.items = new Array();
	this.kontejner;
	
	this.Create = function(parentID)
	{
		this.kontejner = parentID;
	}
	
	this.AddItem = function(n,a,c)
	{
		//Dodavanje nove stavke menija
		this.items[this.items.length] = new MenuItem(n,a,c);
	}
	this.Draw = function()
	{
		//Iscrtavanje stavki menija u kontejner
		for(i = 0; i < this.items.length; i++)
		{
			this.items[i].Draw(this.kontejner);
		}	
	}
}