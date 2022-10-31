
function HelpProvider()
{
    //pronalazi textbox elemente
    this.find = function(node)
    {
        // ukoliko element nije definisan prekini f-ju
        if (node == null) return;
        
        // ukoliko je definisan HelpText atribut, zapamti ovaj element
        if (node.attributes != null && node.attributes["helptext"] != null)
        {
            //debugger;
            // napravi vezu izmedju DOM-a i JS-a
            node.ref = this;
            node.style.textDecoration = "underline";
            // registruj event handler kad se predje misem preko elementa
            node.onmouseover = function() { node.ref.drawHelp(node); }
            
        }
        
        // prodji kroz sve potomke rekurzivno pozivajuci find f-ju
        for (var i = 0; i < node.childNodes.length; i++)
        {
            this.find(node.childNodes[i]);
        }
         
    }

    // prikazi prozor sa help tekstom
    this.drawHelp = function(node)
    {
        alert(node.attributes["helptext"].value);
    }
    
    this.start = function()
    {
        this.find(document.body);
    }
    
} 

