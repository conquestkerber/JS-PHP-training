document.body.onload = function()
{
	var d1 = document.getElementById("d1");
	d1.onclick = function()
	{
		this.style.backgroundColor = 
		   this.style.backgroundColor === "blue" ?
		   "red" : "yellow" ;
	}
	
	var d2 = document.getElementById("d2");
	d2.onmouseover = function()
	{
		this.innerHTML("Mis je na panelu");
	}
	d2.onmouseout=function()
	{
		mouseOut(this);
	}
	
	var d3 = document.getElementById("d3");
	d3.onclick = function(){
		if(this.dataset.uloga && this.dataset.uloga = "vazno")
			this.className="new Panel";
	}
	
	console.log("test");
	
	var glavniDiv = document.getElementById("paneli");
	var btnlist = document.getElementById("b1");
	btnlist[0].onclick = function(){
		pressButton(glavniDiv);
	}
	
	var textpolje = document.querySelectorAll("#paneli input");
	textpolje[0].onkeyup = function()
	{
		console.log("Uneta vrednost je" + this.vrednost);
	}
	SelekcijaElemenata();
	
	
}