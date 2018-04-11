$(document).ready(function(){
    
    var $prenom = $('#prenom'),
		$nom = $('#nom'),
        $mdp = $('#mdp'),
        $cmdp = $('#cmdp'),
        $email = $('#email'),
        $envoi = $('#singlebutton'),
		$reset = $('#reset'),
        $erreur = $('#erreur'),
        $champ = $('.form-control input-md');

		
	$champ.keyup(function(){
    if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5
        $(this).css({ // on rend le champ rouge
            borderColor : 'red',
	    color : 'red'
        });
     }
     else{
         $(this).css({ // si tout est bon, on le rend vert
	     borderColor : 'green',
	     color : 'green'
	 });
     }
	});	
		
	$cmdp.keyup(function(){
    if($(this).val() != $mdp.val()){ // si la confirmation est différente du mot de passe
        $(this).css({ // on rend le champ rouge
	    borderColor : 'red',
	    color : 'red'
        });
    }
    else{
	$(this).css({ // si tout est bon, on le rend vert
	    borderColor : 'green',
	    color : 'green'
	});
    }
	});
	

		function verifier(champ){
		if(champ.val() == ""){ // si le champ est vide
			$erreur.css({
				display : 'block',
				color : 'red',
			});	
			champ.css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
			});
		}
	}
	
	$envoi.click(function(e){
    e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

    // puis on lance la fonction de vérification sur tous les champs :
    verifier($prenom);
	verifier($nom);
    verifier($mdp);
    verifier($cmdp);
    verifier($email);
});









	$reset.click(function(){
    $champ.css({ // on remet le style des champs comme on l'avait défini dans le style CSS
        borderColor : '#ccc',
    	color : '#555'
    });
    $erreur.css('display', 'none'); // on prend soin de cacher le message d'erreur
});


		
		
});
