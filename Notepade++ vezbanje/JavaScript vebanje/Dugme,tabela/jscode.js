function validateTextBox() {
	
	var box1 = document.getElementById("name");
	var box2 = document.getElementById("address");
	var box3 = document.getElementById("phone");
	var box4 = document.getElementById("email");
	
	
	if(box1.value=="" || box2.value=="" || box3.value=="" || box4.value=="")
	{
		alert("Polja moraju biti popunjena");
		box1.focus();
		box.style.border = "solid 3px red";
		return false;
	}
	
}