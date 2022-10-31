

document.body.onload = function()
{
	sakrijUkupnuCenu();
	
	var ukus= document.getElementById("ukus");
	ukus.onchange=IzracunajUkupnuCenu;

	var velicina= document.getElementsByName("odabrana_torta");
	for(var i=0;i<velicina.length;i++)
		velicina[i].onchange=IzracunajUkupnuCenu;

	var svecice= document.getElementsByName("ukljuci_svecice");
	svecice[0].onclick=IzracunajUkupnuCenu;
 
	var dostava= document.getElementsByName("ukljuci_dostavu");
	dostava[0].onclick=IzracunajUkupnuCenu;
 
	var submit= document.getElementById("submit");
	submit.onclick=IzracunajUkupnuCenuSubmit;
}


