<?php

   $host = 'localhost'; // Hôte de la base de données
   $dbname = 'duer'; // Nom de la base de données
   $username = 'root'; // Nom d'utilisateur pour se connecter
   $password = ''; // Mot de passe de l'utilisateur pour se connecter

   try {
      $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
      // Configuration des options de PDO pour afficher les erreurs en mode exception
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
      echo 'Erreur de connexion : '. $e->getMessage();
      exit;
   }

?>