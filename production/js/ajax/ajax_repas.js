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

function ajouter_repas()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
                
		//requete
		var requete;
		//repas
		var Repas = document.getElementById("Repas1").value;
		//  nombre
		var coutg = document.getElementById("coutg_Repas").value;

		//oopen

		requete = "Repas1="+Repas+"&coutg="+coutg;
		
		
		ajax.open("POST","php/insert_repas.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_repas() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('ajouter_repas()',500);
	}
}
function ajaxResponseFunction_repas() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else document.getElementById("resultat_repas").innerHTML="something went wrong";
	}else
	{
		setTimeout('ajaxResponseFunction_repas()',500);
	}
}