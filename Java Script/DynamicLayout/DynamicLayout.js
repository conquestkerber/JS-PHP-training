
// enumeracija - umesto da koristimo 0 i 1, bolji nacin je da se koristi 
// javascript enumeracija (nije nuzno, ali pozeljno)

var NavigationAlignment = {
	Left  :0,
	Right :1
}


function DynamicLayout(isDrawTitle, pozicija){
	// postavljanjem atributa na ovaj nacin (odmah) simuliramo konstruktor
	 
	this.drawTitle = isDrawTitle;	
	this.alignNavigation = pozicija;

	
	// sve stringove koji se javljaju u klasi (ID-evi elemenata i CSS klase) 
	// izdvajamo u promenjive - opet nije nuzno, ali je pozeljno! ;)
	
	var ID_NASLOV		= "naslov";
	var ID_SADRZAJ		= "sadrzaj";
	var ID_NAVIGACIJA	= "navigacija";
	var CSS_NASLOV		= "naslov";
	var CSS_SADRZAJ		= "sadrzaj";
	var CSS_NAVIGACIJA	= "navigacija";
	
		
	this.AlignNavigation = function(align){
		this.alignNavigation = align;
		var el = document.getElementById(ID_NAVIGACIJA);
		
		if (align == NavigationAlignment.Right) // Desno
			el.style.cssFloat = "right";
		else // Levo
			el.style.cssFloat = "left";
	};
	
	// postavlja tekst u naslovu
	this.SetTitle = function(n){
		if (this.drawTitle == true){
			var el = document.getElementById(ID_NASLOV);
			el.innerHTML = n;
		}
	};
	
	// menja visinu naslova
	this.SetTitleHeight = function(Visina){
		var el = document.getElementById(ID_NASLOV);
		el.style.height = Visina;
	};
	
	// iscrtava kontrolu
	this.Render = function(){
	
		// Pravim glavni DIV koji ce predstavljati body
		var el = document.createElement("div");	
	
		// Sada njemu ubacim dete DIV koji predstavlja naslov
		if (this.drawTitle == true){  // Ako uopste treba crtati naslov.
			var el2 = document.createElement("div");
			el2.id = ID_NASLOV;
			el2.className = CSS_NASLOV;
			el.appendChild(el2);
		}
		
		// Pravim DIV centar koji ce sadrzati navigaciju i sadrzaj
		var el3 = document.createElement("div");
		el3.id = ID_NAVIGACIJA;
		el3.className = CSS_NAVIGACIJA;		
		
		if (this.alignNavigation == 1) //Desno
			el3.style.cssFloat = "right";
		else
			el3.style.cssFloat = "left";
		
		
		el.appendChild(el3);		
		
		// Sada pravim  sadrzaj;
		
		var el4 = document.createElement("DIV");
		el4.id = ID_SADRZAJ;
		el4.className = CSS_SADRZAJ;
		el.appendChild(el4);
		
		
		//Sada html koji se nalazi u okviru upisujem u dokument.
		//document.write(el.innerHTML);
		//ili
		document.body.innerHTML = el.innerHTML;
	};
}