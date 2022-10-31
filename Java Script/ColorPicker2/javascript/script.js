function MyColor(r, g, b) {
	this.red;
	this.green;
	this.blue;
	
	this.__construct = function() {
		this.red = r;
		this.green = g;
		this.blue = b;
	}
	
	this.__construct();
}

function ColorPicker(element) {
	this.favorites = new Array();
	this.element;
	this.elementName;
	
	this.red = 0;
	this.green = 255;
	this.blue = 0;
	
	this.__construct = function() {
		this.elementName = element;
		this.element = document.getElementById(element);
	}
	
	this.__construct();
	
	this.UpdatePreview = function() {
		this.red = document.getElementById(this.elementName + '_red').value;
		this.green = document.getElementById(this.elementName + '_green').value;
		this.blue = document.getElementById(this.elementName + '_blue').value;
		
		
		document.getElementById(this.elementName + '_preview').style.backgroundColor = 'rgb(' + this.red + ', ' + this.green + ', ' + this.blue + ')';
	}
	
	this.Add = function() {
		this.UpdatePreview(); // Just in case...
		
		this.favorites.push(new MyColor(this.red, this.green, this.blue));
		
		this.Draw();
	}
	
	this.Close = function() {
		this.element.style.display = 'none';
	}
	
	this.UpdateFav = function(id) {
		var fav = this.favorites[id];
		
		this.red = fav.red;
		this.green = fav.green;
		this.blue = fav.blue;
		
		this.Draw();
	}
		
	this.Draw = function() {
		this.element.innerHTML = '';
		
		var div1 = document.createElement('div');
		div1.className = "favorites";
		this.element.appendChild(div1);
		
		for (i = 0; i < 8; i++) {
			var el = '<div id="' + this.elementName + '_fav_' + i + '" class="favPreview" onclick="document.getElementById(\'' + this.elementName + '\').ref.UpdateFav(\'' + i + '\')"></div>';
			
			div1.innerHTML = div1.innerHTML + el;
		}
		
		for (i = 0; i < this.favorites.length; i++) {
			var r = this.favorites[i].red;
			var g = this.favorites[i].green;
			var b = this.favorites[i].blue;
			
			document.getElementById(this.elementName + '_fav_' + i).style.backgroundColor = 'rgb(' + r + ', ' + g + ', ' + b + ')';
		}
		
		var div2 = document.createElement('div');
		div2.className = "controls";
		this.element.appendChild(div2);
		
		this.element.ref = this;
		
		var html = 'Red <br /><input type="text" id="' + this.elementName + '_red" onblur="document.getElementById(\'' + this.elementName + '\').ref.UpdatePreview()" value="' + this.red + '" /><br /><br /> ' + 
			'Green <br /><input type="text" id="' + this.elementName + '_green" onblur="document.getElementById(\'' + this.elementName + '\').ref.UpdatePreview()" value="' + this.green + '" /><br /><br /> ' + 
			'Blue <br /><input type="text" id="' + this.elementName + '_blue" onblur="document.getElementById(\'' + this.elementName + '\').ref.UpdatePreview()" value="' + this.blue + '" /><br /><br /> ' +
			'<div class="color_preview" id="' + this.elementName + '_preview" style="background-color: rgb(' + this.red + ', ' + this.green + ', ' + this.blue + ')"></div><br />' + 
			'<input type="button" id="' + this.elementName + '_add" value="Favorites" onclick="document.getElementById(\'' + this.elementName + '\').ref.Add()" />' + 
			'<input type="button" id="' + this.elementName + '_ok" value="OK" onclick="document.getElementById(\'' + this.elementName + '\').ref.Close()" />';
		
		div2.innerHTML = html;
	}
}