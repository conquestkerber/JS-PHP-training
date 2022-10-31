
// Enumeracija za sve moguce operacije
Operation = {
  None : 0,
  Plus : 1,
  Minus : 2,
  Multiply : 3,
  Divide : 4, 
  Equal : 5, 
  Reset : 6
}

function Kalkulator(parentId)
{
  this.parent = null;
  // referenca na HTML element koji prikazuje trenutni broj
  this._display = null;
  //trenutni rezultat u memoriji
  this.result = 0;
  // trenutna operacija
  this._operation = Operation.None;
  // signalizira kad treba da se resetuje displej i da se cifre dodaju novom broju
  // npr. kad se pretisne neka operacija, sledeca cifra ide za novi broj
  this._resetDisplay = false;
  
  this._constructor = function()
  {
    this.parent = document.getElementById(parentId);
  }
  
  // dodaje dugme za navedeni broj
  this._addNumericButton = function (nb)
  {
    var el = document.createElement("input");
    el.type = "button";
    el.value = nb;
    el.className = "Btn";
    el._ref = this;
    el.onclick = function()
    {
      this._ref.addNumber(nb);
    }
    return el;
  }
  
  // dodaje dugme za navedenu operaciju
  this._addOperationButton =  function (op)
  {
    var el = document.createElement("input");
    el.type = "button";
    el.value = this._getOperationSign(op);
    el.className = "Btn";
    el._ref = this;
    el.onclick = function()
    {
      this._ref.execOperation(op);
    }
    return el;
  }
  
  // vraca znak operacije na osnovu navedene enumeracije
  // (moze i preko obicnog switch-a ili if-a)
  this._getOperationSign = function(op)
  {
    // vektor znakova
    var a = ["", "+", "-", "*", "/", "=", "C"];
    return a[op];
  }
  
  // dodaje navedeni broj
  this.addNumber = function(nb)
  {
    if (this._resetDisplay) this._display.value = 0;
    // dodaj cifru
    this._display.value = parseFloat(this._display.value)*10 + nb;
    this._resetDisplay = false;
  }
  
  // izvrsava navedenu operaciju
  this.execOperation = function(op)
  {
    if (op == Operation.Reset)
    {
      this._operation = Operation.None;
      this.result = 0;
      this._display.value = 0;
      return;
    }
    //ukoliko je pretisnuta neka operacija, izvrsiti je, upamtiti rezultat i 
    //prikazati ga na displeju
    // A op B, gde je A - trenutni rezultat, B - broj prikazan na displeju
    var B = parseFloat(this._display.value);
    if (this._operation != Operation.None)
    {
      // izvrsi prethodno upamcenu operaciju ( "20 / 5 * " - izvrsava / a ne * )
      switch(this._operation)
      {
        case Operation.Plus:
          this.result += B;
        break;
        case Operation.Minus:
          this.result -= B;
        break;
        case Operation.Multiply:
          this.result *= B;
        break;
        case Operation.Divide:
          this.result /= B;
        break;
        default:
        break;
      }
      this._display.value = this.result;
    }
    else // ukoliko se prvi put navodi operacija
    {
      this.result = B;
    }
    this._operation = op;   
    if (op == Operation.Equal)
    {
      this._operation = Operation.None;
    } 
    this._resetDisplay = true;
  }
  
  this.Render = function()
  {
    var tbl = document.createElement("table");
    tbl.style.cssText = "width:100px; height:100px; background-color:orange; margin:5px; border:1px solid black;";
    var tbody = document.createElement("tbody");
    tbl.appendChild(tbody);
    
    var row = document.createElement("tr");
    tbody.appendChild(row);
    
    var cell = document.createElement("td");
    cell.colSpan = 4;
    row.appendChild(cell);
    
    var el = document.createElement("input");
    el.type = "text";
    el.value = 0;
    el.style.cssText = "width:100px;";
    cell.appendChild(el);
    this._display = el;
    
    row = document.createElement("tr");
    tbody.appendChild(row);
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addNumericButton(1) );
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addNumericButton(2) );
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addNumericButton(3) );
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addOperationButton(Operation.Divide) );

    row = document.createElement("tr");
    tbody.appendChild(row);
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addNumericButton(4) );
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addNumericButton(5) );
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addNumericButton(6) );
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addOperationButton(Operation.Multiply) );
    
    row = document.createElement("tr");
    tbody.appendChild(row);
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addNumericButton(7) );
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addNumericButton(8) );
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addNumericButton(9) );
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addOperationButton(Operation.Minus) );
    
    row = document.createElement("tr");
    tbody.appendChild(row);
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addOperationButton(Operation.Reset) ); 
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addNumericButton(0) );
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addOperationButton(Operation.Plus) );    
    
    cell = document.createElement("td");
    row.appendChild(cell);
    cell.appendChild( this._addOperationButton(Operation.Equal) );    
   
    // dodaj glavnu tabelu roditeljskom elementu
    this.parent.appendChild(tbl);
    
  }
  
  this._constructor();
}
