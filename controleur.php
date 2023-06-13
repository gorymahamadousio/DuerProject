<?php
$mode=$_POST["mode"];

//Inclusion du modèle du design paterb MVC
include 'modele.php';
//Gestion du cas en fonction du modèle
/*
case 1:
	insertion du formulaire dans la base de donnees
		Elements obligatoire
			-nom
			-prenom
			-email
			-unite de travail
			-personnes exposer
			-gravite
			-probalite
			-resolution de la situation
			-photo du risque
case 2:
	verification de la connexion

case 3:
	recherche 

case 4:
	afficher le tableau

case 5:
	modification

case 6:
	suppresion
*/
switch ($mode) {

	case 1:
		

		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$salle=$_POST['salle'];
		$emplacementPrecis=$_POST['emplacement_precis'];
		$situationDangereuse=$_POST['precis'];
		$FamilleRisque=$_POST['famille'];
		$tousLesPersonnelsEN=$_POST['tous_les_personnels_en'];
		$tousLesAttee=$_POST['tous_les_ATTEE'];
		$tousLesEleves=$_POST['tous_les_eleves'];
		$blessureGraves=$_POST['blessures'];
		$maladiesMortelles=$_POST['maladies'];
		$penibilitePhysique=$_POST['penibilite_physique'];
		$penibiliteMentale=$_POST['penibilite_mentale'];
		$probabilite=$_POST['probabilite'];
		$complexiteDeResolution=$_POST['complexite_de_resolution'];
		$solutionOnereuse=$_POST['solution_onereuse'];

		if(    empty($nom) 
			|| empty($prenom) 
			|| empty($email)
			|| empty($salle) 
			|| empty($tousLesPersonnelsEN) 
			|| empty($tousLesAttee) 
			|| empty($tousLesEleves) 
			|| empty($blessureGraves) 
			|| empty($maladiesMortelles)
			|| empty($penibilitePhysique)
			|| empty($penibiliteMentale)
			|| empty($probabilite)
			|| empty($complexiteDeResolution)
			|| empty($solutionOnereuse)	
		)  // le signe || signifie OU
		{
			$message_erreur="ATTENTION : Des champs n'ont pas été rempli correctement, veuillez vérifier";
			// redirection vers la page vue erreur
			header("Location: vue_erreur.php?erreur=$message_erreur");
			exit(); // interruption après redirection
		}
		else // $nom et $prenom sont corrects  
		{
			utilisateur($nom, $prenom, $email);
			inserer_unite_de_travail(NULL, $salle);
			inserer_solution_de_la_situation($complexiteDeResolution, $solutionOnereuse, NULL);
			inserer_situation_dangereuse(NULL, $situationDangereuse);
			inserer_probabilite($probabilite);
			inserer_personne_exposees(NULL, $tousLesPersonnelsEN, $tousLesAttee, $tousLesEleves);
			inserer_localisation(NULL, $emplacementPrecis);
			inserer_gravite(NULL, $blessureGraves, $maladiesMortelles, $penibilitePhysique, $penibiliteMentale);
			inserer_famille_de_risque(NULL, $FamilleRisque);
			$nb_lignes=1;
			// on a inséré 1 ligne
			if($nb_lignes > 0) 
			{
				header("Location:vue_confirmation.php?nb=$nb_lignes"); // page de confirmation
				exit(); // interruption de la fonction après redirection
			}
			else // il y a eu une erreur
			{
				$message_erreur="Erreur lors de l'insertion des données";
				// redirection vers la page vue erreur
				header("Location: vue_erreur.php?erreur=$message_erreur");
			}		
		} // fin si empty nom
        break;
	
	case 2: //verification de la connexion

		$mail = $_POST['mail'];
		$password = $_POST['password'];

		if(isset($_POST['mail']) && isset($_POST['password']) )
		{
			$nb_lignes=verif_connexion($mail, $password);
		}

		if($nb_lignes > 0) 
			{
				header("Location:vue_confirmation.php?nb=$nb_lignes"); // page de confirmation
				exit(); // interruption de la fonction après redirection
			}
			else // il y a eu une erreur
			{
				$message_erreur="Erreur lors de l'insertion des données";
				// redirection vers la page vue erreur
				header("Location: vue_erreur.php?erreur=$message_erreur");
			}		
		break;

	case 3: //afficher le tableau

		break;

	case 4: //recherche

		break;

	case 5: //suppression dans le tableau

		break;

	case 5: //modification dans le tableau

		break;





}
?>
