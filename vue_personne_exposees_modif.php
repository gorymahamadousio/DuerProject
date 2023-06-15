<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- 
        Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        
        <link href="images/profile.jpg" rel="icon">
        <title>Page d'acceuil</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color: white;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-7 text-dark fst-italic justify-content-center align-intems-center border border-dark p-2 mb-2 border-opacity-75 border-4 d-flex">
                    <h1>D.U.E.R.P</h1>
                
                </div>
            </div>
            <div class="row bg-sombre text-white fw-bolder justify-content-center align-intems-center">
                <div class="row p-3 mb-2 text-white fw-bolder placeholder-glow">      
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                      <a class="btn btn-dark" href="vue_acceuil.php" role="button">Acceuil</a>
                      <a class="btn btn-dark" href="#" role="button">A propos</a>
                      <a class="btn btn-dark" href="#" role="button">Incidents</a> 
                      <a class="btn btn-dark" href="vue_unite_de_travail.php" role="button">Unité de travail (salle)</a>
                      <a class="btn btn-dark" href="vue_famille_de_risque.php" role="button">Famille de risque</a> 
                      <a class="btn btn-dark" href="vue_personne_exposees.php" role="button">Personne exposées</a>
                      <a class="btn btn-dark" href="vue_gravite.php" role="button">Gravité</a> 
                      <a class="btn btn-dark" href="vue_probabilite.php" role="button">Probabilité</a>
                      <a class="btn btn-dark" href="vue_resolution_de_la_situation.php" role="button">Résolution de la situation</a> 
                    </div>
                  </div>
              </div>
            </div>
            <?php
                include 'modele.php';
                $action=$_GET["action"];
                $personne = array(); 
                $personne = one_select_personne_exposees($action); 
            ?>
            <form action="controleur_modif.php" method="post">
                <input type="hidden" name="mode" value="4">    

                <label for="Id_personne_exposees">Num</label>
                <input type='text' name="Id_personne_exposees" id="Id_personne_exposees" value="<?=$personne['Id_personne_exposees']?>"  readonly="readonly">
                <label for="tous_les_personnels_EN">tous les personnels EN</label>
                <input type="text" name="tous_les_personnels_EN" id="tous_les_personnels_EN" value="<?=$personne['tous_les_personnels_EN']?>">
                <label for="tous_les_ATTEE">tous les ATTEE</label>
                <input type="text" name="tous_les_ATTEE" id="tous_les_ATTEE" value="<?=$personne['tous_les_ATTEE']?>">
                <label for="tous_les_eleves">tous les eleves</label>
                <input type="text" name="tous_les_eleves" id="tous_les_eleves" value="<?=$personne['tous_les_eleves']?>">	
                
                <input type="submit" value="Modifier" name="submit">
            </form>

    </body>
</html>
