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

function Modifer_colloque()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//alert('offf');
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

		var id = document.getElementById("idCol").value;

		var nbparticipant = document.getElementById("nbparticipant").value;
		


		//oopen

		requete = "nom="+nom+"&date_D="+date_D+"&date_F="+date_F+"&lieu="+lieu+"&Theme="+Theme+"&droit="+droit+"&nbparticipant="+nbparticipant+"&id="+id;
		
		//alert(requete);
		
		ajax.open("POST","php/update_colloque.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_colloqueM() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('Modifer_colloque()',500);
	}
}
function ajaxResponseFunction_colloqueM() {
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
		setTimeout('ajaxResponseFunction_colloqueM()',500);
	}
}