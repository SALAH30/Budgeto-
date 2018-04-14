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

function ajouter_ressource()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;
		//nom
		var categor = document.getElementById("categorR").value;
	
		

		//oopen

		requete = "categor_personnel="+categor;

		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/insert_ressource.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_ressourece() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('ajouter_ressource()',500);
	}
}

function ajaxResponseFunction_ressourece() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');

		}else {
			document.getElementById('resultat').innerHTML = 'Something went wrong';
			$('#myModal').modal('show');
		}
	}else
	{
		setTimeout('ajaxResponseFunction_ressourece()',500);
	}
}