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
        <title>Unite de travail</title>
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
            
            <form action="controleur_supp.php" method="POST">
            <input type="hidden" name="mode" value="1">

                <table border=1 width="80%" align="center">
                    <tr>
                        <td align="center" colspan="4"><b>Les informations du unite des travails </b></td>
                    </tr>
                    <tr  style='border-bottom:1pt solid black; ,border-radius: 1em;'>
                        <th></th>    
                        <th width="47%">salle</th>
                        <th width="47%">Numéro</th>
                        <th width="5%" >Modifier</th>

                    </tr>  
                    <?php
                        include 'modele.php';
                        $unite_de_travail = array(); 
                        $unite_de_travail = select_unite_de_travail(); 
                        $nb = count($unite_de_travail); 

                        if($nb > 0) 
                        {
                            $i=0;						
                            while ($i<$nb)
                            {
                                $unite=$unite_de_travail[$i];  
                                $num=$unite['Id_Unite_de_travail'];			
                                $salle=$unite['salle'];
                                echo "<tr><td><input type='checkbox' name='unite[]' value='$num'></td>";
                                echo "<td>$num</td>";
                                echo "<td>$salle</td>";
                                echo "<td><a href='vue_unite_de_travail_modif.php?action=$num'><input type='button' value='Modifier'></a></td>";
                                echo "</tr>";
                                $i=$i+1;
                            }
                        }	
              
                    ?>
                </table>
                <table border=0>
                    <tr>
                        <td align="right" colspan="2" >
                            <input type="submit" value="Ajouter" name="ajouter">

                            <input type="submit" value="Supprimer" name="supprimer">
                        </td>
                    </tr>
                </table>
                <ul>
                    <li><a href='vue_accueil.php'>retour accueil</a></li>
                </ul>
                </fieldset>
            </form>
    </body>
</html>
