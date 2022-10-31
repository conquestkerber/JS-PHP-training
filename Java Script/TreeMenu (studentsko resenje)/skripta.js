function MenuItem(x, y)
{
	this.naziv;
	this.link;
	this.potomci;

	this.Konstruktor = function()
	{
		this.naziv = x;
		this.link = y;
		this.potomci = new Array();
	}
	
	this.DodajPodstavku = function(x)
	{
		this.potomci.push(x);
	}
	
	this.Konstruktor();
}

function TreeMenu()
{
	this.stavke;
	this.kontejner;
	
	this.Konstruktor = function()
	{
		this.stavke = new Array();
	}
	
	this.PostaviKontejner = function(x)
	{
		this.kontejner = document.getElementById(x);
	}
	
	this.DodajStavku = function(x)
	{
		this.stavke.push(x);
	}
	
	this.Nacrtaj = function()
	{
		for (var i = 0; i < this.stavke.length; i++)
			this.Nacrtaj1(this.stavke[i], 0);
	}
	
	this.Nacrtaj1 = function(x, y)	//IP drugi naziv f-je bi bio pozeljan
	{
		if (x.potomci.length == 0)
		{
			var link = document.createElement("a");
			link.innerHTML = x.naziv;
			link.href = x.link;
			link.style.position = "relative";
			link.style.left = y
			
			this.kontejner.appendChild(link);
			this.kontejner.appendChild(document.createElement("br"));
			return;
		}
		
		var link = document.createElement("a");
		link.innerHTML = x.naziv;
		link.href = x.link;
		link.style.position = "relative";
		link.style.left = y
			
		this.kontejner.appendChild(link);
		this.kontejner.appendChild(document.createElement("br"));
		
		for (var i = 0; i < x.potomci.length; i++)
			this.Nacrtaj1(x.potomci[i], y+40);
	}
	
	this.Konstruktor();
}