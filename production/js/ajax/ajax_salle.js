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

function ajouter_salle()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;
		//nom
		var nom = document.getElementById("nom_salle").value;
		//adr
		var adr = document.getElementById("adr_salle").value;
		// tarif
		var tarif = document.getElementById("tarif_salle").value;
		//capacite
		var capacite = document.getElementById("place_salle").value;
		//typeSalle
		var typeSalle = document.getElementById("type_salle").value;

		var surface = document.getElementById("surface_salle").value;
		

		//oopen

		requete = "nom="+nom+"&adr="+adr+"&tarif="+tarif+"&nbplace="+capacite+"&type="+typeSalle+"&surface="+surface;

		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/insert_salle.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_salle() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('ajouter_salle()',500);
	}
}
function ajaxResponseFunction_salle() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {
			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');

		}else document.getElementById("resultat_salle").innerHTML="something went wrong";
	}else
	{
		setTimeout('ajaxResponseFunction_salle()',500);
	}
}