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

function ajouter_goodies()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
    
		//requete
		var requete;
		//nom
		var nom = document.getElementById("nomg").value;
		// tarif
		var cout = document.getElementById("coutg").value;
	

		//oopen

		requete = "nomg="+nom+"&coutg="+cout;
		
		
		ajax.open("POST","php/insert_goodies.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_goo() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('ajouter_goodies()',500);
	}
}

function ajaxResponseFunction_goo() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

		var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else document.getElementById("resultat_goo").innerHTML="something went wrong";
	}else
	{
		setTimeout('ajaxResponseFunction_goo()',500);
	}
}