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

function ajouter_equipement()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete



		var requete;
	

		var nom = document.getElementById("nom_equipement").value;
		
		var achat = document.getElementById("achat_equipement").value;
		

		requete = "nom="+nom+"&achat="+achat;	
		
		ajax.open("POST","php/insert_equipement.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_Equi() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('ajouter_equipement()',500);
	}

}
function ajaxResponseFunction_Equi() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {
			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else document.getElementById("resultat_Equi").innerHTML="something went wrong";
	}else
	{
		setTimeout('ajaxResponseFunction_Equi()',500);
	}
}