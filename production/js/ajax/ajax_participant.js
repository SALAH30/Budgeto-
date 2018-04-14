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

function ajouter_participant()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;
		//nom


		var status = document.getElementById("status_participant").value;
		//adr
		var palce = document.getElementById("placepar_participant").value;
		// remise
		var remise = document.getElementById("remise_participant").value;
		

		//oopen

		requete = "status_participant="+status+"&placepar_participant="+palce+"&remise_participant="+remise;

		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/insert_participant.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_part() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('ajouter_participant()',500);
	}
}
function ajaxResponseFunction_part() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById("resultat_par").innerHTML=result;

		}else document.getElementById("resultat_par").innerHTML="something went wrong";
	}else
	{
		setTimeout('ajaxResponseFunction_part()',500);
	}
}