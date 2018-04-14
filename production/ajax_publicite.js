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

function ajouter_pub()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;
		//nom
		var idcol = document.getElementById("colloque").value;
		//adr
		var type = document.getElementById("typepub").value;
		// tarif
		var cout = document.getElementById("coutpub").value;

		//oopen

		requete = "colloque="+idcol+"&typepub="+type+"&coutpub="+cout;

		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/insert_publicite.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('ajouter_pub()',500);
	}
}

function ajaxResponseFunction() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById("resultat_pub").innerHTML=result;

		}else document.getElementById("resultat_pub").innerHTML="something went wrong";
	}else
	{
		setTimeout('ajaxResponseFunction()',500);
	}
}