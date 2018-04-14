

var ajaxpub = creationObjectAjax();

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

function ajouter_publicite()
{
	if( ajaxpub.readyState == 4 || ajaxpub.readyState == 0 )
	{
		//requete
		var requete;
		
		var type = document.getElementById("type").value;


		//oopen

		requete = "type="+type;

		
		//alert("requete: "+requete);
		
		
		ajaxpub.open("POST","php/insert_pub.php",true);

		// fonction de onready change
		ajaxpub.onreadystatechange = ajaxResponseFunction_pub() ;
		ajaxpub.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajaxpub.send(requete);
		
	}else{
		setTimeout('ajouter_publicite()',500);
	}
}

function ajaxResponseFunction_pub() {
	if (ajaxpub.readyState == 4){
		if (ajaxpub.status == 200) {

			var result = ajaxpub.responseText;
			document.getElementById("resultat_publ").innerHTML=result;

		}else document.getElementById("resultat_publ").innerHTML="something went wrong";
	}else
	{
		setTimeout('ajaxResponseFunction_pub()',500);
	}
}