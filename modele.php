<?php
// Fonctions a faire 
/* 
	- envoyer image
	- recuperer image
	- verification de la connexion
	- faire une fonction recherche

	// envoie les informations de l'incident dans la base de donnee (Formulaire)
	   ✅- unite_de_travail 
	   ✅- solution_de_la_situation 
	   ✅- situation_dangereuse 
	   ✅- risques 
	   ✅- probabilite
	   ✅- personne_exposees
	   ✅- localisation
	   ✅- gravite
	   ✅- famille_de_risque
	   ✅- comptes

	// recuperation des des informations de l'incident dans la base de donnee (Tableau)
	   - afficher la table risque

*/

function utilisateur($id, $nom, $prenom, $email){

	require 'connexion.php';
    echo "passage 1";
	$sql = "INSERT INTO utilisateur (nom, prenom, email) VALUES ($nom, $prenom, $email)";
	echo "passage 2";
	$stmt= $bdd->prepare($sql);
	echo "passage 3";
	$stmt->execute([$nom, $prenom, $email]);
	echo "passage 4";
	$count = 0;

	if($stmt == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $sql " ;
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$count = $stmt->rowCount(); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $count ;
	
}
function inserer_unite_de_travail($id, $salle)
{
	require 'connexion.php';

	$sql = "INSERT INTO unite_de_travail (Id_Unite_de_travail, salle) VALUES ($id, $salle)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([$id, $salle]);
	$count = 0;

	if($stmt == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $sql " ;
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$count = $stmt->rowCount(); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $count ;
	
}

function inserer_solution_de_la_situation($id, $complexite, $solution_onereuse, $id_risques)
{
	require 'connexion.php';

	$sql = "INSERT INTO solution_de_la_situation (Id_solution_de_la_situation, complexite_de_resolution, solution_onereuse, id_Risques) VALUES ($id, $complexite, $solution_onereuse, $id_risques)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([$id, $complexite, $solution_onereuse, $id_risques]);
	$count = 0;

	if($stmt == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $sql " ;
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$count = $stmt->rowCount(); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $count ;
	
}

function inserer_situation_dangereuse($id, $precis)
{
	require 'connexion.php';

	$sql = "INSERT INTO situation_dangereuse (Id_Situation_dangereuse, precis) VALUES ($id, $precis)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([$id, $precis]);
	$count = 0;
	

	if($stmt == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $sql ";
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$count = $stmt->rowCount(); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $count;
}

function inserer_probabilite($id, $probabilite)
{
	require 'connexion.php';

	$sql = "INSERT INTO localisation (Id_Probabilite, probabilite) VALUES ($id, $probabilite)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([$id, $probabilite]);
	$count = 0;

	if($stmt == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $sql " ;
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$count = $stmt->rowCount(); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $count ;
	

}

function inserer_personne_exposees($id, $personnels, $atte, $eleves)
{
	require 'connexion.php';

	$sql = "INSERT INTO localisation (Id_personne_exposees, tous_les_personnels_EN, tous_les_ATTEE, tous_les_eleves) VALUES ($id, $personnels, $atte, $eleves)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([$id, $personnels, $atte, $eleves]);
	$count = 0;

	if($stmt == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $sql " ;
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$count = $stmt->rowCount(); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $count ;
	

}

function inserer_localisation($id, $emplacement)
{
	require 'connexion.php';

	$sql = "INSERT INTO localisation (Id_Localisation, emplacement_precis) VALUES ($id, $emplacement)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([$id, $emplacement]);
	$count = 0;

	if($stmt == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $sql " ;
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$count = $stmt->rowCount(); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $count ;

	

}

function inserer_gravite($id, $blessures, $maladie, $penibilite_physique, $penibilite_mentale)
{
	require 'connexion.php';

	$sql = "INSERT INTO gravite (Id_Gravite, Blessure_graves_ou_deces, maladie_mortelle, penibilite_physique, peniibilite_mentale) VALUES ($id, $blessures, $maladie, $penibilite_physique, $penibilite_mentale)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([$id, $blessures, $maladie, $penibilite_physique, $penibilite_mentale]);
	$count = 0;
	
	if($stmt == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $sql " ;
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$count = $stmt->rowCount(); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $count ;

}

function inserer_famille_de_risque($id, $famille)
{
	require 'connexion.php';
	
	$sql = "INSERT INTO famille_de_risque (Id_Comptes, email, name_user, mot_de_passe) VALUES ($id, $famille)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([$id, $famille]);
	$count = 0;

	if($stmt == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $sql " ;
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$count = $stmt->rowCount(); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $count ;
	
}

function inserer_comptes($id, $email, $name, $password)
{
	require 'connexion.php';

	$sql = "INSERT INTO comptes (Id_Comptes, email, name_user, mot_de_passe) VALUES ($id, $email, $name, $password)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([$id, $email, $name, $password]);
	$count = 0;

	if($stmt == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $sql " ;
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$count = $stmt->rowCount(); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $count ;
}

function inserer_image()
{
	require 'connexion.php';  
    // Count total files
    $countfiles = count($_FILES['files']['name']);   
    // Prepared statement
    $query = "INSERT INTO images (name,image) VALUES(?,?)";
    $stmt = $conn->prepare($query);
    // Loop all files
    for($i = 0; $i < $countfiles; $i++) {
        // File name
        $filename = $_FILES['files']['name'][$i];
        // Location
        $target_file = './uploads/'.$filename;
        // file extension
        $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);
        // Valid image extension
        $valid_extension = array("png","jpeg","jpg");
        if(in_array($file_extension, $valid_extension)) {
            	// Upload file
            if(move_uploaded_file(
                $_FILES['files']['tmp_name'][$i],
                $target_file)
            ) {
                // Execute query
                $stmt->execute(
                	array($filename,$target_file));
            }
        }
    }
}

function obtenir_risque()
{
	require 'connexion.php';

	$req = $bdd->query('SELECT * FROM risques');
	$risques = $req->fetchAll();
}

function obtenir_image()
{
	require 'connexion.php';

	$req = $bdd->query('SELECT * FROM risques');
	$risques = $req->fetchAll();
}

function verif_connexion()
{
	require 'connexion.php';
}

function recherche()
{
	require 'connexion.php';
}





























/*

 // fonction qui renvoie un tableau de tous les etudinats
 function obtenir_liste_des_etudiants() 
 {
	require 'connexion.php'; // pour connexion au SGBD
	
	$les_etudiants = array(); // création du tableau
	$requete="select * from etudiants";
	$resultat_sql = mysqli_query($lien_base, "$requete");
	if($resultat_sql == false) // si impossible d'exécuter la requête SELECT
	{	
		die("Impossible d'executer la requete: $requete " . mysqli_error($lien_base));
	}
	else // SELECT réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes du SELECT
		$i=1; // compteur
		while($i<=$nb_lignes)
		{
			// ajout des résultats du select
			$les_etudiants[] = mysqli_fetch_array($resultat_sql); 
			$i=$i+1; // incrémentation
		}
	}
	return $les_etudiants;// le tableau sera vide en cas d'erreur
}// fin fonction()

/*

// page contenant les différentes fonctions d'accès à la base
//_______________________________________________________________
function insert_etudiant($numero, $prenom, $nom, $dateEntree, $classe, $moyenne) // insere un nouveau etudiant  dans la table etudiants
{
	// fichier externe car la connexion est utilisée dans différentes pages
	include 'connexion.php'; 
	
	// initialisation de la variable à zéro
	$nb_lignes = 0; 
	
	// Requete d'insertion MYSQL. 
	$requete= "INSERT INTO etudiants (numero, prenom, nom, dateEntree, classe, moyenne) VALUES ('$numero','$prenom','$nom','$dateEntree','$classe','$moyenne');";
	
	// tentative d'execution de la requete INSERT dans la base
	$reponse_serveur = mysqli_query($lien_base, "$requete");
	
	// si false : impossible d'exécuter la requête INSERT
	if($reponse_serveur == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $requete " . mysqli_error($lien_base);
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $nb_lignes ; // renvoie le nb de lignes insérées : normalement 1
} // fin fonction insert_etudiant
//_______________________________________________________________

function delete_etudiant($numero) // insere un nouveau etudiant  dans la table etudiants
{
	// fichier externe car la connexion est utilisée dans différentes pages
	include 'connexion.php'; 
	
	// initialisation de la variable à zéro
	$nb_lignes = 0; 
	
	// Requete d'insertion MYSQL. 
	$requete= "DELETE FROM `etudiants` WHERE `numero`= $numero";
	
	// tentative d'execution de la requete INSERT dans la base
	$reponse_serveur = mysqli_query($lien_base, "$requete");
	
	// si false : impossible d'exécuter la requête INSERT
	if($reponse_serveur == false) 
	{	
		$message_erreur="Impossible d'executer la requete: $requete " . mysqli_error($lien_base);
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}
	return $nb_lignes ; // renvoie le nb de lignes insérées : normalement 1
} // fin fonction insert_etudiant
*/
?>