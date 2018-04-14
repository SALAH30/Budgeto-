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

function ajouter_categorie()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;
		//nom
		var categor = document.getElementById("categor_personnel").value;
	
		var cout = document.getElementById("achat_cat").value;

		

		//oopen

		requete = "categor_personnel="+categor+"&cout="+cout;		
		
		ajax.open("POST","php/insert_categorie.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_cat() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('ajouter_categorie()',500);
	}
}
function ajaxResponseFunction_cat() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else document.getElementById("resultat_cat").innerHTML="something went wrong";
	}else
	{
		setTimeout('ajaxResponseFunction_cat()',500);
	}
}