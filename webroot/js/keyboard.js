/*
* Ecoute du clavier
*/

function ListeningKeyboard(){
	try{
		document.addEventListener('keydown',function(e){TestClavier(e);}, false);
				
	} catch(err){alert('Erreur fonction ListeningKeyboard(): '+err);}
};

/*
* Traitement
*/

function TestClavier(e){
	try{
		var valeur = 0;
		
			switch(e.keyCode){			
			
			case 72:
				ouvrePopup('/php/popup.php', 298, 450);					
			break;
			
			case 97:
				alert('Vous attribuez la note de 1');					
				valeur = 1;
				save(1);
			break;
			
			case 98:
				alert('Vous attribuez la note de 2');
				valeur = 2;
				save(2);
			break;
			
			case 99:
				alert('Vous attribuez la note de 3');
				valeur = 3;
				save(3);
			break;
			
			case 100:
				alert('Vous attribuez la note de 4');	
				valeur = 4;
				save(4);
			break;
			
			case 101:
				alert('Vous attribuez la note de 5');
				valeur = 5;
				save(5);
				
			break;
			
			default:
				alert('Merci de choisir une note entre 1 et 5. Code appuyé: '+e.keyCode);
			};		
	}catch(err){alert('Erreur fonction TestClavier(e): '+err);}	
};

/*
* Sauvegarder
*/

function save(note) {

	var user_id = parseInt($.cookie('userId'));
	var video_id =parseInt($.cookie('videoNumber'));

	
	$.ajax({
		type: "POST",
		url: "/notes/saveNote/",
		data:{
			note: note,
			user_id: user_id,
			video_id: video_id
		}, 
		success: function(){
			video_id = video_id + 1;
			$.cookie('videoNumber', video_id);
			window.location.href = "/users/watch";
		}
	});

};

function var_dump(obj) {
   if(typeof obj == "object") {
      alert("Type: "+typeof(obj)+((obj.constructor) ? "\nConstructor: "+obj.constructor : "")+"\nValue: " + obj);
   } else {
      alert("Type: "+typeof(obj)+"\nValue: "+obj);
   }
};
