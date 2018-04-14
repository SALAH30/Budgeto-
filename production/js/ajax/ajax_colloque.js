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

function ajouter_colloque()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{

		//requete
		var requete;
		//nom
		var nom = document.getElementById("nom").value;
		//adr
		var date_D = document.getElementById("date_D").value;
		var date_F = document.getElementById("date_F").value;
		// tarif
		var lieu = document.getElementById("lieu").value;
		//capacite
		var Theme = document.getElementById("Theme").value;
		//typeSalle
		var droit = document.getElementById("droit").value;

		var nbparticipant = document.getElementById("nbparticipant").value;
		//alert('REs');

		//oopen

		requete = "nom="+nom+"&date_D="+date_D+"&date_F="+date_F+"&lieu="+lieu+"&Theme="+Theme+"&droit="+droit+"&nbparticipant="+nbparticipant;
		
		
		ajax.open("POST","php/insert_colloque.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_colloque() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('ajouter_colloque()',500);
	}
}
function ajaxResponseFunction_colloque() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			//alert(result);
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
			//document.getElementById('resultat').innerHTML = result;
		}else document.getElementById("resultat_col").innerHTML="something went wrong";
	}else
	{
		setTimeout('ajaxResponseFunction_colloque()',500);
	}
}