function validacija(){
    
    var list = document.querySelectorAll("input");
    var isValid = true;
    
    list.forEach(function(item){
        if(item.value == null || item.value == undefined || item.value == "")
        {
            alert("Niste uneli vrednost u polje: " + item.name);           
            isValid = false;
        }
    })
    
    if(isValid)
        alert("Formular je popunjen");
}
