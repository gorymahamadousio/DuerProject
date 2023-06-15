<?php
$mode=$_POST["mode"];

include 'modele.php';

switch ($mode) {

	case 1:
		$id=$_POST['Id_Unite_de_travail'];
		$salle=$_POST['salle'];

		if(empty($salle) )
		{
			$message_erreur="ATTENTION : Des champs n'ont pas été rempli correctement, veuillez vérifier";
			// redirection vers la page vue erreur
			header("Location: vue_erreur.php?erreur=$message_erreur");
			exit(); // interruption après redirection
		}
		else // sinon effectuer les mise à jour
		{
			$nb_lignes=modifier_unite_de_travail($salle, $id);
			// on a modifier 1 ligne
			if($nb_lignes > 0) 
			{
				header("Location:vue_confirmation.php?nb=$nb_lignes"); // page de confirmation
				exit(); // interruption de la fonction après redirection
			}
			else // il y a eu une erreur
			{
				$message_erreur="Erreur lors de la mise à jour des données du formulaire.";
				// redirection vers la page vue erreur
				header("Location: vue_erreur.php?erreur=$message_erreur");
			}	
		}    
        break;
	
	case 2: 
		$id=$_POST['Id_solution_de_la_situation'];
		$complexite=$_POST['complexite_de_resolution'];
		$solution_onereuse=$_POST['solution_onereuse'];
		
		if(empty($complexite) && empty($solution_onereuse) )
		{
			$message_erreur="ATTENTION : Des champs n'ont pas été rempli correctement, veuillez vérifier";
			// redirection vers la page vue erreur
			header("Location: vue_erreur.php?erreur=$message_erreur");
			exit(); // interruption après redirection
		}
		else // sinon effectuer les mise à jour
		{
			$nb_lignes=modifier_solution_de_la_situation($complexite, $solution_onereuse, $id);
			// on a modifier 1 ligne
			if($nb_lignes > 0) 
			{
				header("Location:vue_confirmation.php?nb=$nb_lignes"); // page de confirmation
				exit(); // interruption de la fonction après redirection
			}
			else // il y a eu une erreur
			{
				$message_erreur="Erreur lors de la mise à jour des données du formulaire.";
				// redirection vers la page vue erreur
				header("Location: vue_erreur.php?erreur=$message_erreur");
			}	
		}    
		
		break;

	case 3:
		$id=$_POST['Id_Probabilite'];
		$probabilite=$_POST['probabilite'];
	
		if(empty($probabilite))
		{
			$message_erreur="ATTENTION : Des champs n'ont pas été rempli correctement, veuillez vérifier";
			// redirection vers la page vue erreur
			header("Location: vue_erreur.php?erreur=$message_erreur");
			exit(); // interruption après redirection
		}
		else // sinon effectuer les mise à jour
		{
			$nb_lignes=modifier_probabilite($probabilite, $id);
			// on a modifier 1 ligne
			if($nb_lignes > 0) 
			{
				header("Location:vue_confirmation.php?nb=$nb_lignes"); // page de confirmation
				exit(); // interruption de la fonction après redirection
			}
			else // il y a eu une erreur
			{
				$message_erreur="Erreur lors de la mise à jour des données du formulaire.";
				// redirection vers la page vue erreur
				header("Location: vue_erreur.php?erreur=$message_erreur");
			}	
		}    
		break;

	case 4:
		$id=$_POST['Id_personne_exposees'];
		$personnels=$_POST['tous_les_personnels_EN'];
		$atte=$_POST['tous_les_ATTEE'];
		$eleves=$_POST['tous_les_eleves'];
		
		
		if(empty($personnels) && empty($atte) && empty($eleves))
		{
			$message_erreur="ATTENTION : Des champs n'ont pas été rempli correctement, veuillez vérifier";
			// redirection vers la page vue erreur
			header("Location: vue_erreur.php?erreur=$message_erreur");
			exit(); // interruption après redirection
		}
		else // sinon effectuer les mise à jour
		{
			$nb_lignes=modifier_personne_exposees($personnels, $atte, $eleves, $id);
			// on a modifier 1 ligne
			if($nb_lignes > 0) 
			{
				header("Location:vue_confirmation.php?nb=$nb_lignes"); // page de confirmation
				exit(); // interruption de la fonction après redirection
			}
			else // il y a eu une erreur
			{
				$message_erreur="Erreur lors de la mise à jour des données du formulaire.";
				// redirection vers la page vue erreur
				header("Location: vue_erreur.php?erreur=$message_erreur");
			}	
		}  
		break;

	case 5:
		$id=$_POST['Id_Gravite'];
		$blessures=$_POST['Blessure_graves_ou_deces'];
		$maladie=$_POST['maladie_mortelle'];
		$penibilite_physique=$_POST['penibilite_physique'];
		$penibilite_mentale=$_POST['peniibilite_mentale'];
		
		if(empty($blessures) && empty($maladie)  && empty($penibilite_physique) && empty($penibilite_mentale) )
		{
			$message_erreur="ATTENTION : Des champs n'ont pas été rempli correctement, veuillez vérifier";
			// redirection vers la page vue erreur
			header("Location: vue_erreur.php?erreur=$message_erreur");
			exit(); // interruption après redirection
		}
		else // sinon effectuer les mise à jour
		{
			$nb_lignes=modifier_gravite($blessures, $maladie, $penibilite_physique, $penibilite_mentale, $id);
			// on a modifier 1 ligne
			if($nb_lignes > 0) 
			{
				header("Location:vue_confirmation.php?nb=$nb_lignes"); // page de confirmation
				exit(); // interruption de la fonction après redirection
			}
			else // il y a eu une erreur
			{
				$message_erreur="Erreur lors de la mise à jour des données du formulaire.";
				// redirection vers la page vue erreur
				header("Location: vue_erreur.php?erreur=$message_erreur");
			}	
		}    
		break;

	case 6:
		$id=$_POST['Id_Famille_de_risque'];
		$famille=$_POST['famille'];
		
		if(empty($famille) )
		{
			$message_erreur="ATTENTION : Des champs n'ont pas été rempli correctement, veuillez vérifier";
			// redirection vers la page vue erreur
			header("Location: vue_erreur.php?erreur=$message_erreur");
			exit(); // interruption après redirection
		}
		else // sinon effectuer les mise à jour
		{
			$nb_lignes=modifier_famille_de_risque($famille, $id);
			// on a modifier 1 ligne
			if($nb_lignes > 0) 
			{
				header("Location:vue_confirmation.php?nb=$nb_lignes"); // page de confirmation
				exit(); // interruption de la fonction après redirection
			}
			else // il y a eu une erreur
			{
				$message_erreur="Erreur lors de la mise à jour des données du formulaire.";
				// redirection vers la page vue erreur
				header("Location: vue_erreur.php?erreur=$message_erreur");
			}	
		}   
		break;





}
?>
