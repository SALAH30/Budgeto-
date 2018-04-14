var ajax = creationObjectAjax();

function creationObjectAjax(){
	var ajaxObject;

	if(window.ActiveXObject){

		try{
			ajaxObject = new ActiveXObject("Microsoft.XMLHTTP");

		}catch(e){
			ajaxObject = false;
		}
	}else{
		try {
			ajaxObject = new XMLHttpRequest();
		}catch(e){
			ajaxObject = false;
		}
	}
	if(!ajaxObject) alert("Can't creat that object hoss!");
	else return ajaxObject;
}

function ajouter()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{



		
		//oopen

		requete1 = "nom="+nom+"&adr="+adr+"&tarif="+tarif+"&nbplace="+capacite+"&type="+typeSalle;
		requete2 = "Repas="+repas+"nb"+nombre+"coutg"+cout;
		
		alert("requete: "+requete1);
		
		
		ajax.open("POST","../insert_salle.php",true);}
	
		ajax.open("POST","../insert_repas.php",true);
			

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete1);
		
		ajax.send(requete2);
		
		
		
	}else{
		setTimeout('ajouter()',500);
	}
}

function ajaxResponseFunction() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {
			alert("response : "+ ajax.responseText);

		}else alert('Smth wrong went!');
	}else
	{
		setTimeout('ajaxResponseFunction()',500);
	}
}