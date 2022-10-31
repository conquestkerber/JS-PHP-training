document.body.onload = function()
{
	sakrijUkupnuCenu();
	
	var ukus = document.getElementById("ukus");
	ukus.onchange=IzracunajUkupnuCenu;
	
	var velicina=document.getElementById("velicina");
	for(var i=0;i<velicina.length;i++)
		velicina[i].onchange=IzracunajUkupnuCenu;
	
	var svecice=document.getElementById("ukljuci_svecice");
	svecice[0].onchange=IzracunajUkupnuCenu;
	
	var dostava=document.getElementById("ukljuci_dostavu");
	svecice[0].onchange=IzracunajUkupnuCenu;
	
	var submit=document.getElementById("submit");
	submit.onchange=IzracunajUkupnuCenu;
}