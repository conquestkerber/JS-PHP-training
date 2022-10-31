document.body.onload = function()
{
	var d1=document.getElementById("id");
	d1.onclick=function();
	 this.style.backgroundColor=
	   this.style.backgroundColor=== "blue" ? "red" : "blue";
};

var d2=document.getElementById("d2");
d2.onmouseover=function()
{
	this.innerHTML="Mis je otisao :0";
}
d2.onmouseout = function()
{
	mouseOut(this);
}

var d3=document.getElementById("d3");
d3.onclick = function()
{
	if(this.dataset.uloga && this.dataset.uloga === "vazno")
		this.className="new Panel";
};
console.log("text");
var glavniDiv=document.getElementById("paneli");
var btnlista = glavniDiv.getElementById("button");
{
	console.log("Uneta vrednost je:" + this.value);
}
selekcijaElemenata();