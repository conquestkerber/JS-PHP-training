document.body.onload = function()
{
    var d1 = document.getElementById("d1");
    // dodela anonimne fje
    d1.onclick = function(){
        // u javascriptu postoji operator === koji proverava i podudaranje po tipu.
	// Uvek njega koristiti umesto ==
        this.style.backgroundColor = 
			this.style.backgroundColor === "blue" ?
			"red" : "blue";
    };
    
    var d2 = document.getElementById("d2");
    d2.onmouseover = function(){
        // this se odnosi na element koji generise dogadjaj, tj d2
        this.innerHTML = "Mis je preko div-a";
    };
    
    
    d2.onmouseout = function(){
        mouseOut(this);
    };
    
    var d3 = document.getElementById("d3");
    d3.onclick = function() {
        // this.dataset je skup svih data-* atributa nekog elementa
	// u data-* se smestaju svi proizvoljni atributi
	// npr. data-uloga ce biti u this.dataset.uloga
	// uvek prvo proveriti da li postoji taj atribut
        if(this.dataset.uloga && this.dataset.uloga === "vazno")
            this.className = "newPanel";
    };
    
    //console.log("") - koristite za otkrivanje problema
    //F12 u browser-u otvara consolu gde mozete videti logove
    console.log("test");
    
    var glavniDiv = document.getElementById("paneli");
    var btnlist = glavniDiv.getElementsByTagName("button");
    btnlist[0].onclick = function(){
        pressButton(glavniDiv);
    };
    
    var textpolje = document.querySelectorAll("#paneli input");
    textpolje[0].onkeyup = function(){
        
	console.log("Uneta vrednost je: " + this.value);
    }
    selekcijaElemenata();
}


