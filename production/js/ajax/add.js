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

function add_int()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
	var requete;


	var Int =document.getElementById('Int').value;
    var idCol = document.getElementById('idCol').value;
	var type_trans =document.getElementById('type_trans').value;
    var classe_trans=document.getElementById('classe_trans').value;
    var cout_trans=document.getElementById('cout_trans').value;
    var lieua_trans=document.getElementById('lieua_trans').value;
    var lieud_trans=document.getElementById('lieud_trans').value;
                  
    var nom_heb=document.getElementById('nom_heb').value;
    var adr_heb=document.getElementById('adr_heb').value;
    var dure_heb=document.getElementById('dure_heb').value;
    var cout_heb=document.getElementById('cout_heb').value;
	var renum_Int=document.getElementById('renum_Int').value;
	var heb_Int=document.getElementById('heb_Int').value;
	var trans_Int=document.getElementById('trans_Int').value;

	var date_Di=document.getElementById('date_Di').value;
	var date_Fi=document.getElementById('date_Fi').value;
	var date_ar=document.getElementById('date_Di').value;

	var prix_reel = document.getElementById('prix').value;
	
	var datedepart = document.getElementById('date_Dip').value;
	var datearrive = document.getElementById('date_Fip').value;

	
	

		//oopen

requete = "Int="+Int+"&idCol="+idCol+"&type_trans="+type_trans+"&classe_trans="+classe_trans+
		"&cout_trans="+cout_trans+"&lieua_trans="+lieua_trans+"&lieud_trans="+lieud_trans+
		"&nom_heb="+nom_heb+"&adr_heb="+adr_heb+"&dure_heb="+dure_heb+"&cout_heb="+cout_heb+
		"&renum_Int="+renum_Int+"&heb_Int="+heb_Int+"&trans_Int="+trans_Int+"&date_ar="+date_ar+"&date_Di="+date_Di+"&date_Fi="
		+date_Fi+"&datedp="+datedepart+"&datear="+datearrive;

		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/add_int.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_int() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('add_int()',500);
	}
}
function ajaxResponseFunction_int() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else alert("something went wrong" );
	}else
	{
		setTimeout('ajaxResponseFunction_int()',500);
	}
}

function add_pers()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		var requete;


	var Pers =document.getElementById('Pers').value;
    var idCol = document.getElementById('idCol').value
    var nombre_personnel = document.getElementById('nombre_personnel').value
    var renum_personnel = document.getElementById('renum_personnel').value
	var prix_reel = document.getElementById('prix').value;
	var date = document.getElementById('date').value;
	//oopen

requete = "Pers="+Pers+"&idCol="+idCol+"&nombre_personnel="+nombre_personnel+"&renum_personnel="+renum_personnel+"&date="+date+"&prix_reel="+prix_reel;

		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/insert_travailler.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_pers() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('add_pers()',500);
	}
}	

function ajaxResponseFunction_pers() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else alert("something went wrong" );
	}else
	{
		setTimeout('ajaxResponseFunction_pers()',500);
	}
}




function add_salle()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;

	var prix_reel = document.getElementById('prixsl').value;
	var salle =document.getElementById('salle').value;
    var idCol = document.getElementById('idCol').value
	var dateS = document.getElementById('dateS').value
	var duree = document.getElementById('duree').value

		//oopen

		requete = "salle="+salle+"&idCol="+idCol+"&dateS="+dateS+"&duree="+duree+"&prix_reel="+prix_reel;

		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/add_salle.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_salle() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('add_salle()',500);
	}
}
function ajaxResponseFunction_salle() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else alert("something went wrong" );

	}else
	{
		setTimeout('ajaxResponseFunction_salle()',500);
	}
}

function add_equi()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;

	var prix_reel = document.getElementById('prixeq').value;
	var date = document.getElementById('dateeq').value;
    var equi = document.getElementById('equi').value;
    var idCol = document.getElementById('idCol').value;
	var livraison_equipement = document.getElementById('livraison_equipement').value;
	var exemplaire_equipement = document.getElementById('exemplaire_equipement').value;
	requete = "equi="+equi+"&idCol="+idCol+"&livraison_equipement="+livraison_equipement+"&exemplaire_equipement="+exemplaire_equipement+"&date="+date+"&prix_reel="+prix_reel;
		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/add_equi.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_equi() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('add_equi()',500);
	}
}
function ajaxResponseFunction_equi() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {
			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else alert("something went wrong" );
	}else
	{
		setTimeout('ajaxResponseFunction_equi()',500);
	}
}



function add_repas()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;



	var prix_reel = document.getElementById('prixrp').value;
	var date = document.getElementById('daterp').value;
	var repas =document.getElementById('repas').value;
    var idCol = document.getElementById('idCol').value
 	var nb_Repas = document.getElementById('nb_Repas').value

	requete = "repas="+repas+"&idCol="+idCol+"&nb_Repas="+nb_Repas+"&date="+date+"&prix_reel="+prix_reel;


		//oopen
		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/add_repas.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_repas() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('add_repas()',500);
	}
}
function ajaxResponseFunction_repas() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else alert("something went wrong" );
	}else
	{
		setTimeout('ajaxResponseFunction_repas()',500);
	}
}



function add_pub()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;


	var pub =document.getElementById('pub').value;
    var idCol = document.getElementById('idCol').value;
    var coutpub = document.getElementById('coutpub').value;
	
		//oopen

		requete = "pub="+pub+"&idCol="+idCol+"&coutpub="+coutpub;
		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/add_pub.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_pub() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('add_pub()',500);
	}
}

function ajaxResponseFunction_pub() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else alert("something went wrong" );
	}else
	{
		setTimeout('ajaxResponseFunction_pub()',500);
	}
}


function add_goo()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;


	var goo =document.getElementById('goo').value;
    var idCol = document.getElementById('idCol').value
    var exempg = document.getElementById('exempg').value
	var prix_reel = document.getElementById('prixgd').value;
	var date = document.getElementById('dategd').value;
	

		//oopen
requete = "goo="+goo+"&idCol="+idCol+"&exempg="+exempg+"&date="+date+"&prix_reel="+prix_reel;
		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/add_goo.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_goo() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('add_goo()',500);
	}
}

function ajaxResponseFunction_goo() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else alert("something went wrong" );
	}else
	{
		setTimeout('ajaxResponseFunction_goo()',500);
	}
}


function add_ressource()
{
	if( ajax.readyState == 4 || ajax.readyState == 0 )
	{
		//requete
		var requete;

	var catres = document.getElementById('catres').value;
	var prix_reel = document.getElementById('prix').value;
	var date = document.getElementById('date').value;
	var nomres = document.getElementById('nomres').value;
    var idCol = document.getElementById('idCol').value
    var nbRessource = document.getElementById('nombre').value

	

		//oopen
requete = "nomres="+nomres+"&idCol="+idCol+"&nbRessource="+nbRessource+"&date="+date+"&prix_reel="+prix_reel+"&catres="+catres;
		
		//alert("requete: "+requete);
		
		
		ajax.open("POST","php/add_ressource.php",true);

		// fonction de onready change
		ajax.onreadystatechange = ajaxResponseFunction_ressource() ;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

		//send
		
		ajax.send(requete);
		
	}else{
		setTimeout('add_ressource()',500);
	}
}

function ajaxResponseFunction_ressource() {
	if (ajax.readyState == 4){
		if (ajax.status == 200) {

			var result = ajax.responseText;
			document.getElementById('resultat').innerHTML = result;
			$('#myModal').modal('show');
		}else alert("something went wrong" );
	}else
	{
		setTimeout('ajaxResponseFunction_ressource()',500);
	}
}

