function mouseOut (element)
{
	if(!element) return;
	element.innerHTML = "Mis je otisao";
}

function pressButton(parentElement){
	if(!parentElement) throw Error("Nije naveden element");
	var list = parentElement.querySelectorAll("div")
	list.forEach(function(item){
		item.class="left";
	})
}

function SelekcijaElemenata(){
	var elementi = document.querySelectorAll("#paneli .panel");
	console.log("Broj elemenata je:" + elementi.length);
	
	var el = document.querySelectorAll(".panel [data-uloga = 'vazno'] ");
	console.log("Panel sa atributom vazno ima id:" + el.id);
	
    el = document.querySelector("#paneli .panel");
	console.log("Koji je ovo element?" + el.id);
	
	elementi = document.querySelectorAll("#paneli div:not(.panel)");
	elementi.forEach(function(e)){
		console.log("Elemee
		
	
}