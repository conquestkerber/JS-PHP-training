function mouseOut(element){
    // prvo provera parametara
    if (!element) return;
    element.innerHTML="Mis je otisao ;)";
}

function pressButton(parentElement){
    // izuzeci u JS - throw, catch; Ovde je samo bacen izuzetak
    // koristiti Error objekat radi ocuvanja calls stack-a
    if(!parentElement) throw Error("Nije naveden element");
    var list = parentElement.querySelectorAll("div");
    
    // for(var i=0; i<list.length; i++)
    // {
    //      list[i].className="left"
    // }
    //probajte i sa for i sa forEach petljom da obidjete niz
    list.forEach(function(item){
       item.className = "left";
    });
}

function selekcijaElemenata()
{
    //obratiti paznju na logove 
    var elementi = document.querySelectorAll("#paneli .panel");
    console.log("Broj elemenata:" + elementi.length);
    
    var el = document.querySelector(".panel[data-uloga='vazno']");
    console.log("Panel sa atributom vazno ima id = " + el.id);
    
    el=document.querySelector("#paneli .panel");
    console.log("koji je ovo element? "+ el.id);
    
    elementi = document.querySelectorAll("#paneli div:not(.panel)");
    
    elementi.forEach(function(e){
        console.log("Elementi iz #paneli cija klasa nije panel " + e.id);
    })
}
