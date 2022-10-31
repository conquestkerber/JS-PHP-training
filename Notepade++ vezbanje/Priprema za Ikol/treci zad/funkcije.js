var cenaTorte = [];
cenaTorte["Round8"]=200;
cenaTorte["Round12"]=300;
cenaTorte["Round16"]=400;
cenaTorte["Round30"]=800;

var cenaUkusa=[];
cenaUkusa["None"]=0;
cenaUkusa["Cokolada"]=0;
cenaUkusa["Karamela"]=0;
cenaUkusa["Lesnik"]=0;
cenaUkusa["Vocna"]=0;
cenaUkusa["Dobos"]=0;

function sakrijUkupnuCenu()
{
	var divobj=document.getElementById('UkupnaCena');
	divobj.style.display='none';
}

function povecajUkupunuCenu()
{
	var divobj=document.getElementById('Ukupna cena');
	divobj.style.display='none';
}

function izracunajCenuZaVelicinu()
{
	var cenaVelicine=0;
	var odabranaTorta=document.querySelectorAll('input[value][type="radio]:not([value=""])');
	for(var i=0;i<odabranaTorta.length;i++)
	{
		if(odabranaTorta[i].checked)
		{
			cenaVelicine=cenaTorte[odabranaTorta[i].value];
			break;
		}
	}
	return cenaVelicine;
}

function izracunajCenuZaUkus()
{
	var cenaUkusaDin=0;
	var odabraniUkus = documentElement.querySelectorAll('option:ckecked');
	cenaUkusaDin=cenaUkusa[odabraniUkus[0].ckecked];
	return cenaUkusaDin;
}


function cenaSvecice()
{
	var cenaSveciceDin=0;
	var ukljuciSvecice=document.querySelectorAll('ukljuci_svecice');
	if(ukljuciSvecice.ckecked==true)
	{
		cenaSveciceDin=50;
	}
	return cenaSveciceDin;
}

function cenaDostave()
{
	var cenaDostave=0;
	var ukljuciDostavu=document.querySelectorAll('ukljuciDostavu')
	if(ukljuciDostavu.ckecked==true)
	{
		cenaDostave=200;
	}
	return cenaDostave;
}

function IzracunajUkupnuCenu()
{
	var cenaTorte=izracunajCenuZaUkus() + izracunajCenuZaVelicinu()+cenaSvecice() + cenaDostave();
	var divbj=document.getElementById('UkupnaCen');
	divobj.style.display="block";
	divobj.innerHTML="Ukupna cena odabrane torte je :" + cenaTorte + "dinara";
}

function IzracujaUkupnuCenuSubmit()
{
	IzracunajUkupnuCenu();
	return false;
}


