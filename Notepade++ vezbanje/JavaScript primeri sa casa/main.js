document.body.onload = function()
{
  var d1 = document.getElementById("d1");
  d1.onclick = function();
    this.style.backgroundColor =
      this.style.backgroundColor ==="blue"? "red" : "blue";
 };

var d2=document.getElementById("d2");
d2.onmoouseover=function()
{
   this.innerHTML="Mis je otisao";
}

d2.onmouseout=functio()
{
    mouseOut(this);
}

var d3=document.getElementById("d3");
d3.onclick=function()
{
  if(this.dataset.uloga && this.dataset.uloga ==="vazno")
    this.className="new Panel";
};

console.log("test");

var glavniDiv=document.getElementById("paneli");
var btnlista = glavniDiv.getElementsByTagName("button");
btnlista[0].onclick=function()
{
  console.log("Uneta vrednost je: "+this.value);
}
 selekcijaElemenata();
}