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

function ajouter_inter()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;

    
	var nom_Int = document.getElementById("nom_Int").value;
		// tarif
	var prenom_Int = document.getElementById("prenom_Int").value;

	var cout = document.getElementById("cout_int").value;
	

		//oopen

		requete = "nom_Int="+nom_Int+"&prenom_Int="+prenom_Int+"&cout="+cout;

		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/insert_intervenant.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_inter() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('ajouter_inter()',500);
	}
}
function ajaxResponseFunction_inter() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else document.getElementById("resultat_inter").innerHTML="something went wrong";
	}else
	{
		setTimeout('ajaxResponseFunction_inter()',500);
	}
}