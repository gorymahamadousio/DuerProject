<?php
// Fonctions a faire 
/* 
	- envoyer image
	- recuperer image
	✅- verification de la connexion
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

function utilisateur($nom, $prenom, $email)
{

	require 'connexion.php';
	$sql = "INSERT INTO utilisateur (nom, prenom, email) VALUES (?, ?, ?)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([$nom, $prenom, $email]);
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

	$sql = "INSERT INTO unite_de_travail (Id_Unite_de_travail, salle) VALUES (?, ?)";
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

function inserer_solution_de_la_situation( $complexite, $solution_onereuse, $id_risques)
{
	require 'connexion.php';

	$sql = "INSERT INTO solution_de_la_situation ( complexite_de_resolution, solution_onereuse, id_Risques) VALUES ( ?, ?, ?)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([ $complexite, $solution_onereuse, $id_risques]);
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

	$sql = "INSERT INTO situation_dangereuse (Id_Situation_dangereuse, precis) VALUES (?, ?)";
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

function inserer_probabilite( $probabilite)
{
	require 'connexion.php';

	$sql = "INSERT INTO probabilite (probabilite) VALUES ( ?)";
	$stmt= $bdd->prepare($sql);
	$stmt->execute([$probabilite]);
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

	$sql = "INSERT INTO personne_exposees (Id_personne_exposees, tous_les_personnels_EN, tous_les_ATTEE, tous_les_eleves) VALUES (?, ?, ?, ?)";
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

	$sql = "INSERT INTO localisation (Id_Localisation, emplacement_precis) VALUES (?, ?)";
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

	$sql = "INSERT INTO gravite (Id_Gravite, Blessure_graves_ou_deces, maladie_mortelle, penibilite_physique, peniibilite_mentale) VALUES (?, ?, ?, ?, ?)";
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
	
	$sql = "INSERT INTO famille_de_risque (Id_Famille_de_risque, famille) VALUES (?, ?)";
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
	return $count;
	
}

function inserer_comptes($id, $email, $name, $password)
{
	require 'connexion.php';

	$sql = "INSERT INTO comptes (Id_Comptes, email, name_user, mot_de_passe) VALUES (?, ?, ?, ?)";
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
	return $count;
}

function inserer_image()
{
	require 'connexion.php';  
    // Count total files
    $countfiles = count($_FILES['files']['name']);   
    // Prepared statement
    $sql = "INSERT INTO images (name,image) VALUES(?,?)";
    $stmt = $bdd->prepare($sql);
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
                $stmt->execute(array($filename,$target_file));
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

function verif_connexion($mail, $pass)
{
	require 'connexion.php';
    
    
    $sql = "SELECT * FROM comptes WHERE email='$mail' AND mot_de_passe='$pass'";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
	$count=0;

	if(!$data=$stmt->fetch(PDO::FETCH_ASSOC)) 
	{	
		$message_erreur="Impossible d'executer la requete: $sql  ";
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

// SELECT
/*
function select_incidents(){
	require 'connexion.php';
	$sql = "SELECT * FROM fournisseur";
	$stmt = $bdd->prepare($sql);
	$stmt->execute()
}
*/
function select_utilisateur(){
	require 'connexion.php';
	$utilisateur = array();

	$sql = "SELECT * FROM utilisateur";
	$stmt = $bdd->prepare($sql);
    $stmt->execute();
	$utilisateur = $stmt->fetchAll();
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
        $count = $stmt->rowCount();
		
    }
    return $utilisateur;

}

function select_localisation(){
	require 'connexion.php';
	$localisation = array();

	$sql = "SELECT * FROM localisation";
	$stmt = $bdd->prepare($sql);
    $stmt->execute();
	$localisation = $stmt->fetchAll();
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
        $count = $stmt->rowCount();
		
    }
    return $localisation;

}

function select_comptes(){
	require 'connexion.php';
	$comptes = array();

	$sql = "SELECT * FROM comptes";
	$stmt = $bdd->prepare($sql);
    $stmt->execute();
	$comptes = $stmt->fetchAll();
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
        $count = $stmt->rowCount();
		
    }
    return $comptes;

}

function select_unite_de_travail(){
	require 'connexion.php';
	$unite_de_travail = array();

	$sql = "SELECT * FROM unite_de_travail";
	$stmt = $bdd->prepare($sql);
    $stmt->execute();
	$unite_de_travail = $stmt->fetchAll();
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
        $count = $stmt->rowCount();
		
    }
    return $unite_de_travail;

}

function select_famille_de_risque(){
	require 'connexion.php';
    $famille_de_risque = array();

	$sql = "SELECT * FROM famille_de_risque";
	$stmt = $bdd->prepare($sql);
	$stmt->execute();
    $famille_de_risque = $stmt->fetchAll();

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
    return $famille_de_risque;
}

function select_personne_exposees(){
	require 'connexion.php';
    $personnes_exposees = array(); 
	$sql = "SELECT * FROM personne_exposees";
	$stmt = $bdd->prepare($sql);
	$stmt->execute();
    $personnes_exposees = $stmt->fetchAll();
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
    return $personnes_exposees;
}

function select_gravite(){
	require 'connexion.php';
    $gravite = array();
	$sql = "SELECT * FROM gravite";
	$stmt = $bdd->prepare($sql);
	$stmt->execute();
    $gravite = $stmt->fetchAll();
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
    return $gravite;
}

function select_probabilite(){
	require 'connexion.php';
    $probabilite = array();
	$sql = "SELECT * FROM probabilite";
	$stmt = $bdd->prepare($sql);
	$stmt->execute();
    $probabilite = $stmt->fetchAll();
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
    return $probabilite;
}

function select_solution_de_la_situation(){
	require 'connexion.php';
    $solution = array();
	$sql = "SELECT * FROM solution_de_la_situation";
	$stmt = $bdd->prepare($sql);
	$stmt->execute();
    $solution = $stmt->fetchAll();
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
    return $solution;
}

// ONE SELECT

function one_select_utilisateur($id){
	require 'connexion.php';
	$utilisateur = array();

	$sql = "SELECT * FROM utilisateur WHERE Id_Utilisateur = ?";
	$stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);
	$utilisateur = $stmt->fetch();
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
        $count = $stmt->rowCount();
		
    }
    return $utilisateur;

}

function one_select_localisation($id){
	require 'connexion.php';
	$localisation = array();

	$sql = "SELECT * FROM localisation WHERE Id_Localisation =?";
	$stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);
	$localisation = $stmt->fetch();
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
        $count = $stmt->rowCount();
		
    }
    return $localisation;

}

function one_select_comptes($id){
	require 'connexion.php';
	$comptes = array();

	$sql = "SELECT * FROM comptes WHERE Id_Comptes = ?";
	$stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);
	$comptes = $stmt->fetch();
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
        $count = $stmt->rowCount();
		
    }
    return $comptes;

}

function one_select_unite_de_travail($id){
	require 'connexion.php';
	$unite_de_travail = array();

	$sql = "SELECT * FROM unite_de_travail WHERE Id_Unite_de_travail = ?";
	$stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);
	$unite_de_travail = $stmt->fetch();
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
        $count = $stmt->rowCount();
		
    }
    return $unite_de_travail;

}

function one_select_famille_de_risque($id){
	require 'connexion.php';
    $famille_de_risque = array();
	$sql = "SELECT * FROM famille_de_risque WHERE Id_Famille_de_risque = ? ";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$id]);
    $famille_de_risque = $stmt->fetch();
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
    return $famille_de_risque;
}

function one_select_personne_exposees($id){
	require 'connexion.php';
    $personne_exposees = array();
	$sql = "SELECT * FROM personne_exposees WHERE Id_personne_exposees = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$id]);
    $personne_exposees = $stmt->fetch();
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
    return $personne_exposees;
}

function one_select_gravite($id){
	require 'connexion.php';
    $gravite = array();
	$sql = "SELECT * FROM gravite WHERE Id_Gravite = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$id]);
    $gravite = $stmt->fetch();
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
    return $gravite;
}

function one_select_probabilite($id){
	require 'connexion.php';
    $probabilite =array();
	$sql = "SELECT * FROM probabilite WHERE Id_Probabilite = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$id]);
    $probabilite = $stmt->fetch();
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
    return $probabilite;
}

function one_select_solution_de_la_situation($id){
	require 'connexion.php';
    $solution = array();
	$sql = "SELECT * FROM solution_de_la_situation WHERE Id_solution_de_la_situation = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$id]);
    $solution = $stmt->fetch();
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
    return $solution;
}
// MODIFIER
/*
function modifier_incidents(){
	require 'connexion.php';

	$sql = "UPDATE fournisseur SET no_four = ?, nom_four = ?, contact_four = ?, tel_four = ?, fax_four = ? WHERE no_four = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute()
}
*/

function modifier_utilisateur($nom,$prenom,$email,$id){
	require 'connexion.php';

	$sql = "UPDATE utilisateur SET nom = ?, prenom = ?, email=? WHERE Id_Unite_de_travail = ?";
	$stmt = $bdd->prepare($sql);
    $stmt->execute([$nom,$prenom,$email,$id]);
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
        $count = $stmt->rowCount();
		
    }
    return $count;

}

function modifier_localisation($emplacement,$id){
	require 'connexion.php';
	$sql = "UPDATE localisation SET  emplacement_precis = ? WHERE Id_Localisation = ?";
	$stmt = $bdd->prepare($sql);
    $stmt->execute([$emplacement,$id]);
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
        $count = $stmt->rowCount();
		
    }
    return $count;

}

function modifier_comptes($mail,$name,$password,$id){
	require 'connexion.php';

    $sql = "UPDATE comptes SET email = ?, name_user = ?, mot_de_passe=? WHERE Id_Comptes = ?";
	$stmt = $bdd->prepare($sql);
    $stmt->execute([$mail,$name,$password,$id]);
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
        $count = $stmt->rowCount();
		
    }
    return $count;

}
function modifier_unite_de_travail($salle, $id){
	require 'connexion.php';
	$sql = "UPDATE unite_de_travail SET salle = ? WHERE Id_Unite_de_travail = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$salle,$id]);
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
    return $count;

}

function modifier_famille_de_risque($famille, $id){
	require 'connexion.php';
	$sql = "UPDATE famille_de_risque SET famille = ? WHERE Id_Famille_de_risque = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$famille, $id]);
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
    return $count;
}

function modifier_personne_exposees($personnels, $atte, $eleves, $id){
	require 'connexion.php';
	$sql = "UPDATE personne_exposees SET tous_les_personnels_EN = ?, tous_les_ATTEE = ?, tous_les_eleves = ? WHERE Id_personne_exposees = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$personnels, $atte, $eleves, $id]);
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
    return $count;
}

function modifier_gravite($blessures, $maladie, $penibilite_physique, $penibilite_mentale, $id){
	require 'connexion.php';
	$sql = "UPDATE gravite SET Blessure_graves_ou_deces = ?, maladie_mortelle = ?, penibilite_physique = ?, peniibilite_mentale = ? WHERE Id_Gravite = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$blessures, $maladie, $penibilite_physique, $penibilite_mentale, $id]);
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
    return $count;
}

function modifier_probabilite($probabilite, $id){
	require 'connexion.php';
	$sql = "UPDATE probabilite SET probabilite = ? WHERE Id_Probabilite = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$probabilite, $id]);
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
    return $count;
}

function modifier_solution_de_la_situation($complexite, $solution_onereuse, $id){
	require 'connexion.php';
	$sql = "UPDATE solution_de_la_situation SET complexite_de_resolution = ?, solution_onereuse = ? WHERE Id_solution_de_la_situation = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$complexite, $solution_onereuse, $id]);
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
    return $count;

}

// SUPPRIMER

/*
function supprimer_incidents(){
	require 'connexion.php';

	$sql = "UPDATE fournisseur SET no_four = ?, nom_four = ?, contact_four = ?, tel_four = ?, fax_four = ? WHERE no_four = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute()
}
*/

function supprimer_utilisateur($id){
	require 'connexion.php';

	$sql = "DELETE FROM utilisateur  WHERE Id_Unite_de_travail = ?";
	$stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);
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
        $count = $stmt->rowCount();
		
    }
    return $count;

}

function supprimer_localisation($id){
	require 'connexion.php';

	$sql = "DELETE FROM localisation  WHERE Id_Localisation = ?";
	$stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);
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
        $count = $stmt->rowCount();
		
    }
    return $count;

}

function supprimer_comptes($id){
	require 'connexion.php';
    $sql = "DELETE FROM comptes WHERE Id_Comptes = ?";
	$stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);
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
        $count = $stmt->rowCount();
		
    }
    return $count;

}
function supprimer_unite_de_travail($id){
	require 'connexion.php';
	$sql = "DELETE FROM unite_de_travail WHERE Id_Unite_de_travail = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$id]);
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
    return $count;

}

function supprimer_famille_de_risque($id){
	require 'connexion.php';
	$sql = "DELETE FROM fournisseur WHERE Id_Famille_de_risque = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$id]);
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
    return $count;
}

function supprimer_personne_exposees($id){
	require 'connexion.php';
	$sql = "DELETE FROM personne_exposees WHERE Id_personne_exposees = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$id]);

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
    return $count;
}

function supprimer_gravite($id){
	require 'connexion.php';
	$sql = "DELETE FROM gravite WHERE Id_Gravite = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$id]);
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
    return $count;
}

function supprimer_probabilite($id){
	require 'connexion.php';
	$sql = "DELETE FROM probabilite WHERE Id_Probabilite = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$id]);
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
    return $count;
}

function supprimer_solution_de_la_situation($id){
	require 'connexion.php';
	$sql = "DELETE FROM solution_de_la_situation WHERE Id_solution_de_la_situation = ?";
	$stmt = $bdd->prepare($sql);
	$stmt->execute([$id]);
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
    return $count;

}



 

















