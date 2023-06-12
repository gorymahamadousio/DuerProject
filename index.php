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
        <link rel="stylesheet" href="style2.css">
    </head>
    <body style="background-image:url('../images/fond3.jpg');background-size:cover;background-repeat: no-repeat;min-height:100vh;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <a class="navbar-brand" href="#">
                       
                    </a>
                </div>
                <div class="col-7">
                    
                </div>
                <div class="icone">
                   <i class="bi bi-person-circle"> Se connecter</i>   
                </div>  
            </div>
            <div class="row justify-content-center">
                <div class="col-7 text-dark fst-italic justify-content-center align-intems-center border border-dark p-2 mb-2 border-opacity-75 border-4 d-flex">
                    <h1>D.U.E.R.P</h1>
                
                </div>
            </div>
            <div class="row bg-sombre text-white fw-bolder justify-content-center align-intems-center">
                <div class="row p-3 mb-2 text-white fw-bolder placeholder-glow">      
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                      <a class="btn btn-dark" href="../acceuil.html" role="button">Acceuil</a>
                      <a class="btn btn-dark" href="#" role="button">A propos</a>
                      <a class="btn btn-dark" href="#" role="button">Incidents</a> 
                    </div>
                  </div>
              </div>
            </div></br>
            <div class="base-form">
              <h3>Formulaire D.U.E.R lycées voillaume</h3><br>
                <form class="formulaire" method="POST" action="controleur.php">
                <input type="hidden" name="mode" value="1">    
                <div class="form-row marge">
                      <div class="row justify-content-center">
                        <div class="form-group col-md-4 ">
                          <label for="inputEmail4">Nom:</label>
                          <input type="text" class="form-control" id="inputEmail4" name="nom" placeholder="Entrer votre nom">
                      </div></br>
                      <div class="form-group col-md-4">
                          <label for="inputEmail4">Prénom:</label>
                          <input type="text" class="form-control" id="inputEmail4" name="prenom" placeholder="Entrer votre Prénom">
                      </div></br>
                      </div></br>
                      <div class="row justify-content-center">
                        <div class="form-group col-md-4">
                          <label for="inputEmail4">Email:</label>
                          <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Entrer votre Email">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputState">Unité de travail (salle):</label>
                          <select id="inputState" name="salle" class="form-control">
                            <option selected>Choisir...</option>
                            <option value="Accueil/Loge">Accueil/Loge</option>
                            <option value="A 100 OVE ang">A 100 OVE ang</option>
                            <option value="A 101 OVE ang">A 101 OVE ang</option>
                            <option value="A 102 OVE ang">A 102 OVE ang</option>
                            <option value="A 104 OVE hist geo">A 104 OVE hist geo</option>
                            <option value="A 106 OV hist geo">A 106 OV hist geo</option>
                            <option value="A 107 OV">A 107 OV</option>
                            <option value="A 109 OVE ang">A 109 OVE ang</option>
                            <option value="A 110 OVE ang">A 110 OVE ang</option>
                            <option value="A 111 OVE esp">A 111 OVE esp</option>
                            <option value="A 112 OVE ang">A 112 OVE ang</option>
                            <option value="A 113 OVE ang">A 113 OVE ang</option>
                            <option value="A 114 VE hist géo ( ang )">A 114 VE hist géo ( ang )</option>
                            <option value="A 115 OVE ang">A 115 OVE ang</option>
                            <option value="A 116 OVE all">A 116 OVE all</option>
                            <option value="A 117 all">A 117 all</option>
                            <option value="A 200">A 200</option>
                            <option value="A 201">A 201</option>
                            <option value="A 202">A 202</option>
                            <option value="A 203 TVE">A 203 TVE</option>
                            <option value="A 204">A 204</option>
                            <option value="A 205">A 205</option>
                            <option value="A 206">A 206</option>
                            <option value="A 207 TVE">A 207 TVE</option>
                            <option value="A 208">A 208</option>
                            <option value="A 209">A 209</option>
                            <option value="A 210 TVE">A 210 TVE</option>
                            <option value="A 211">A 211</option>
                            <option value="A 212">A 212</option>
                            <option value="A 213">A 213</option>
                            <option value="A 214 ang">A 214 ang</option>
                            <option value="A217 LABO MATHS">A217 LABO MATHS</option>
                            <option value="Aire de stockage extérieur">Aire de stockage extérieur</option>
                            <option value="CDI LGT bât A">CDI LGT bât A</option>
                            <option value="CDI LP Bât A">CDI LP Bât A</option>
                            <option value="Chaufferie">Chaufferie</option>
                            <option value="Circulations extérieures">Circulations extérieures</option>
                            <option value="Circulations intérieures">Circulations intérieures</option>
                            <option value="Compresseur">Compresseur</option>
                            <option value="Cour de récréation">Cour de récréation</option>
                            <option value="Cuisine / Plonge">Cuisine / Plonge</option>
                            <option value="Déplacements, missions">Déplacements, missions</option>
                            <option value="Espace de communication">Espace de communication</option>
                            <option value="Espace de restauration">Espace de restauration</option>
                            <option value="Espaces couverts (préau, garage à vélo)">Espaces couverts (préau, garage à vélo)</option>
                            <option value="Espaces livraisons">Espaces livraisons</option>
                            <option value="Foyer élèves">Foyer élèves</option>
                            <option value="Garage ou Parking">Garage ou Parking</option>
                            <option value="Grenier">Grenier</option>
                            <option value="GYMNASES">GYMNASES</option>
                            <option value="Hall 1">Hall 1</option>
                            <option value="Hall 2">Hall 2</option>
                            <option value="Hall 3">Hall 3</option>
                            <option value="Hall 4">Hall 4</option>
                            <option value="Internat">Internat</option>
                            <option value="Laboratoire de chimie">Laboratoire de chimie</option>
                            <option value="Laboratoire de physique - physique appliquée">Laboratoire de physique - physique appliquée</option>
                            <option value="Laboratoire de sciences de la vie et de la Terre - biologie">Laboratoire de sciences de la vie et de la Terre - biologie</option>
                            <option value="Lingerie ANCIEN B">Lingerie ANCIEN B</option>
                            <option value="Local chaufferie">Local chaufferie</option>
                            <option value="Local réseau">Local réseau</option>
                            <option value="Local TGBT">Local TGBT</option>
                            <option value="Local tranfo.">Local tranfo.</option>
                            <option value="Local tranfo. 2">Local tranfo. 2</option>
                            <option value="Locaux administratifs">Locaux administratifs</option>
                            <option value="Locaux d'entretien">Locaux d'entretien</option>
                            <option value="Locaux et équipements des techniciens et ouvriers de services">Locaux et équipements des techniciens et ouvriers de services</option>
                            <option value="Locaux médicaux et infirmiers">Locaux médicaux et infirmiers</option>
                            <option value="Locaux vie scolaire">Locaux vie scolaire</option>
                            <option value="Logements de fonction">Logements de fonction</option>
                            <option value="Préau">Préau</option>
                            <option value="Restauration élève">Restauration élève</option>
                            <option value="Restauration invité">Restauration invité</option>
                            <option value="Restauration prof">Restauration prof</option>
                            <option value="SALLE A215">SALLE A215</option>
                            <option value="Salle de reprographie">Salle de reprographie</option>
                            <option value="Salle des professeurs">Salle des professeurs</option>
                            <option value="SALLE DEVOIR A">SALLE DEVOIR A</option>
                            <option value="SALLE E">SALLE E</option>
                            <option value="Salle professeurs CRSA">Salle professeurs CRSA</option>
                            <option value="Salle professeurs STI2D">Salle professeurs STI2D</option>
                            <option value="Salle professeurs TSE">Salle professeurs TSE</option>
                            <option value="SAlle TP">SAlle TP</option>
                            <option value="SAlle Troisième">SAlle Troisième</option>
                            <option value="Salle(s) de préparation et de stockage(s) des produits chimiques">Salle(s) de préparation et de stockage(s) des produits chimiques</option>
                            <option value="Option 219">Option 219</option>
                            <option value="sanitaire Bâtiment A">sanitaire Bâtiment A</option>
                            <option value="santaire Bâtiment B">santaire Bâtiment B</option>
                            <option value="sanitaire Bâtiment C">sanitaire Bâtiment C</option>
                            <option value="sanitaire Bâtiment D">sanitaire Bâtiment D</option>
                            <option value="C1-006 Atelier MEI">C1-006 Atelier MEI</option>
                            <option value="C1-014 Bureau professeurs MEI">C1-014 Bureau professeurs MEI</option>
                            <option value="C1-013 Salle de ressources MEI">C1-013 Salle de ressources MEI</option>
                            <option value="C1-012 Salle banale - 12 élèves MEI">C1-012 Salle banale - 12 élèves MEI</option>
                            <option value="C1-011 Salle banale - 24 élèves MEI">C1-011 Salle banale - 24 élèves MEI</option>
                            <option value="C1-009 Salle info - 12 MEI">C1-009 Salle info - 12 MEI</option>
                            <option value="C1-007 Réserve atelier MEI">C1-007 Réserve atelier MEI</option>
                            <option value="C1-120 salle TP 2nd SN">C1-120 salle TP 2nd SN</option>
                            <option value="C1-121 Réserve SN">C1-121 Réserve SN</option>
                            <option value="C1-122 Serveur pédago SN">C1-122 Serveur pédago SN</option>
                            <option value="C1-119 salle TP 2nd SN">C1-119 salle TP 2nd SN</option>
                            <option value="C1-121 Réserve SN">C1-121 Réserve SN</option>
                            <option value="C1-117 Salle TP réseaux SN">C1-117 Salle TP réseaux SN</option>
                            <option value="C1-118 Réserve SN">C1-118 Réserve SN</option>
                            <option value="C1-116 Local serveur SN">C1-116 Local serveur SN</option>
                            <option value="C1-114 Salle TP réseaux SN">C1-114 Salle TP réseaux SN</option>
                            <option value="C1-116 Local serveur SN">C1-116 Local serveur SN</option>
                            <option value="C1-115 Réserve SN">C1-115 Réserve SN</option>
                            <option value="C1-112 Salle TP réseaux SN">C1-112 Salle TP réseaux SN</option>
                            <option value="C1-113 Réserve SN">C1-113 Réserve SN</option>
                            <option value="C1-111 Local serveur SN">C1-111 Local serveur SN</option>
                            <option value="C1-109 Salle TP réseaux SN">C1-109 Salle TP réseaux SN</option>
                            <option value="C1-110 Réserve SN">C1-110 Réserve SN</option>
                            <option value="B-011 Dépôt loge">B-011 Dépôt loge</option>
                            <option value="B-106 Salle de conception et experimentation de CPI">B-106 Salle de conception et experimentation de CPI</option>
                            <option value="B-105 Salle de documentation et rangement">B-105 Salle de documentation et rangement</option>
                            <option value="B-104 Labo de conception analyseCPI">B-104 Labo de conception analyseCPI</option>
                            <option value="B-103 Salle de préparation et rangement">B-103 Salle de préparation et rangement</option>
                            <option value="B-102 Salle de soutenance CPI">B-102 Salle de soutenance CPI</option>
                            <option value="B-101 Bureau PROF.COORDINATION">B-101 Bureau PROF.COORDINATION</option>
                            <option value="C1-002 Salle banalisée">C1-002 Salle banalisée</option>
                            <option value="C1-003 salle des profs LP">C1-003 salle des profs LP</option>
                            <option value="C1-017 Vestiaires filles MEI">C1-017 Vestiaires filles MEI</option>
                            <option value="C1-016 Vestiaires élèves MEI">C1-016 Vestiaires élèves MEI</option>
                            <option value="C1-015 Vestiaires élèves MEI">C1-015 Vestiaires élèves MEI</option>
                            <option value="C1-104 Salle de coordination prof SN">C1-104 Salle de coordination prof SN</option>
                            <option value="C1-107 Arts plastiques">C1-107 Arts plastiques</option>
                            <option value="C1-108 Dépôt arts appliquées">C1-108 Dépôt arts appliquées</option>
                            <option value="C1-213 Bureau professeurs coordination STI2D">C1-213 Bureau professeurs coordination STI2D</option>
                            <option value="C1-210 Laboratoire SIN">C1-210 Laboratoire SIN</option>
                            <option value="C1-211 Rangement">C1-211 Rangement</option>
                            <option value="C1-210 Laboratoire SIN">C1-210 Laboratoire SIN</option>
                            <option value="C1-208 Laboratoire EE">C1-208 Laboratoire EE</option>
                            <option value="C1-209 Rangement">C1-209 Rangement</option>
                            <option value="C1-206 Laboratoire ITEC">C1-206 Laboratoire ITEC</option>
                            <option value="C1-207 Rangement">C1-207 Rangement</option>
                            <option value="C1-205 Salle prototypage rapide partagée CRSA">C1-205 Salle prototypage rapide partagée CRSA</option>
                            <option value="C1-204 Laboratoire tronc commun STI2D/ rangement">C1-204 Laboratoire tronc commun STI2D/ rangement</option>
                            <option value="C1-201 Laboratoire tronc commun STI2D">C1-201 Laboratoire tronc commun STI2D</option>
                            <option value="C1-202 Rangement">C1-202 Rangement</option>
                            <option value="C1-201 Laboratoire tronc commun STI2D">C1-201 Laboratoire tronc commun STI2D</option>
                            <option value="C2-002 Foyer des élèves">C2-002 Foyer des élèves</option>
                            <option value="C2-003 Salle radio">C2-003 Salle radio</option>
                            <option value="C2-017 Salle de réunion">C2-017 Salle de réunion</option>
                            <option value="C2-009 Bureau Proviseur adjoint LP">C2-009 Bureau Proviseur adjoint LP</option>
                            <option value="C2-010 Laboratoire de construction">C2-010 Laboratoire de construction</option>
                            <option value="C2-008 Laboratoire de construction">C2-008 Laboratoire de construction</option>
                            <option value="C2-105 Salle banalisée">C2-105 Salle banalisée</option>
                            <option value="C2-104 Salle banalisée">C2-104 Salle banalisée</option>
                            <option value="C2-103 Salle banalisée">C2-103 Salle banalisée</option>
                            <option value="C2-102 Salle banalisée">C2-102 Salle banalisée</option>
                            <option value="C2-101 Salle banalisée">C2-101 Salle banalisée</option>
                            <option value="C2-107 Stock.Adim informatique">C2-107 Stock.Adim informatique</option>
                            <option value="C2-106 Bureau coordin.informatiques">C2-106 Bureau coordin.informatiques</option>
                            <option value="C2-114 Espace magasin proto.">C2-114 Espace magasin proto.</option>
                            <option value="C2-112 Salle de cours électrotechnique">C2-112 Salle de cours électrotechnique</option>
                            <option value="C2-111 Salle essais système">C2-111 Salle essais système</option>
                            <option value="C2-206 BUREAU professeurs BTS ELEC">C2-206 BUREAU professeurs BTS ELEC</option>
                            <option value="C2-205 Salle de cours EE CIT">C2-205 Salle de cours EE CIT</option>
                            <option value="C2-204 Salle de cours EE SI">C2-204 Salle de cours EE SI</option>
                            <option value="C2-204 Salle de cours EE SI">C2-204 Salle de cours EE SI</option>
                            <option value="C2-203 Zone TP / TPE">C2-203 Zone TP / TPE</option>
                            <option value="C2-202 Rangement">C2-202 Rangement</option>
                            <option value="C2-201 Salle de cours CIT">C2-201 Salle de cours CIT</option>
                            <option value="C3-004 Salle attente infirmerie">C3-004 Salle attente infirmerie</option>
                            <option value="C3-005 Bureau assistante sociale LP">C3-005 Bureau assistante sociale LP</option>
                            <option value="C3-006 Bureau assistante sociale LT">C3-006 Bureau assistante sociale LT</option>
                            <option value="C3-007 Stockage">C3-007 Stockage</option>
                            <option value="C3-008 Bureau infirmerie">C3-008 Bureau infirmerie</option>
                            <option value="C3-009 Salle de soins">C3-009 Salle de soins</option>
                            <option value="C3-010 Salle de repos">C3-010 Salle de repos</option>
                            <option value="C3-012 coordination des professeurs CRSA">C3-012 coordination des professeurs CRSA</option>
                            <option value="C3-020 Vestiaires élèves CRSA">C3-020 Vestiaires élèves CRSA</option>
                            <option value="C3-014 Rangement CRSA">C3-014 Rangement CRSA</option>
                            <option value="C3-102 Salle banalisée CRSA">C3-102 Salle banalisée CRSA</option>
                            <option value="C3-101 Salle banalisée">C3-101 Salle banalisée</option>
                            <option value="C3-111 Atelier MELEC TERTIAIRE">C3-111 Atelier MELEC TERTIAIRE</option>
                            <option value="C3-110 Atelier MELEC Habitat">C3-110 Atelier MELEC Habitat</option>
                            <option value="C3-112 Atelier MELEC INDUS">C3-112 Atelier MELEC INDUS</option>
                            <option value="C3-104 Vestiaire fille MELEC /SN">C3-104 Vestiaire fille MELEC /SN</option>
                            <option value="C3-113 Vestiaire Garçon MELEC/SN">C3-113 Vestiaire Garçon MELEC/SN</option>
                            <option value="B-019 Poste de livraison EDF">B-019 Poste de livraison EDF</option>
                            <option value="B-018 Chaufferie">B-018 Chaufferie</option>
                            <option value="B-012 Local vélo">B-012 Local vélo</option>
                            <option value="B-001 Entrée sas">B-001 Entrée sas</option>
                            <option value="B-002 Accés hall">B-002 Accés hall</option>
                            <option value="B-017 Local SR">B-017 Local SR</option>
                            <option value="B-016 TGBT">B-016 TGBT</option>
                            <option value="B-015 Local eau">B-015 Local eau</option>
                            <option value="B-014 Local compresseur">B-014 Local compresseur</option>
                            <option value="B-013 CTA">B-013 CTA</option>
                            <option value="B-009 Accés loge">B-009 Accés loge</option>
                            <option value="B-003 Bureau CPE">B-003 Bureau CPE</option>
                            <option value="B-004 Bureau CNAM">B-004 Bureau CNAM</option>
                            <option value="B-005 Secrétariat CNAM">B-005 Secrétariat CNAM</option>
                            <option value="B-008 Local ménage central">B-008 Local ménage central</option>
                            <option value="B-007 Accès blocs sanitaires">B-007 Accès blocs sanitaires</option>
                            <option value="B-006 Accès blocs sanitaires">B-006 Accès blocs sanitaires</option>
                            <option value="B-106 Salle de conception et experimentation de PI">B-106 Salle de conception et experimentation de PI</option>
                            <option value="B-105 Salle de documentation et rangement">B-105 Salle de documentation et rangement</option>
                            <option value="B-104 Labo de conception analyse PI">B-104 Labo de conception analyse PI</option>
                            <option value="B-103 Salle de préparation et rangement">B-103 Salle de préparation et rangement</option>
                            <option value="B-102 Salle de soutenance accueil des ETPS">B-102 Salle de soutenance accueil des ETPS</option>
                            <option value="B-101 Bureau PROF.COORDINATION">B-101 Bureau PROF.COORDINATION</option>
                            <option value="C1-101 Sanitaires principaux H.">C1-101 Sanitaires principaux H.</option>
                            <option value="C1-101 Cabine privatisable profs">C1-101 Cabine privatisable profs</option>
                            <option value="C1-010 Local poubelle répartie">C1-010 Local poubelle répartie</option>
                            <option value="C1-007 Réseve atelier MEI">C1-007 Réseve atelier MEI</option>
                            <option value="C1-001 Bureau MLDS">C1-001 Bureau MLDS</option>
                            <option value="C1-002 Salle banalisée">C1-002 Salle banalisée</option>
                            <option value="C1-004 Bureau CPE LP">C1-004 Bureau CPE LP</option>
                            <option value="C1-005 Permanence">C1-005 Permanence</option>
                            <option value="Escalier sous-sol">Escalier sous-sol</option>
                            <option value="C1-010 Sas local poubelles">C1-010 Sas local poubelles</option>
                            <option value="C1-010 Local poubelles">C1-010 Local poubelles</option>
                            <option value="C1-009 Salle banale - 12 élèves EI">C1-009 Salle banale - 12 élèves EI</option>
                            <option value="ESC2 -BC Escalier 2">ESC2 -BC Escalier 2</option>
                            <option value="C1-102 Sanitaire">C1-102 Sanitaire</option>
                            <option value="C1-102 Cabine privatisable profs">C1-102 Cabine privatisable profs</option>
                            <option value="C1-124 Local ménage réparti">C1-124 Local ménage réparti</option>
                            <option value="C1-123 Local SR">C1-123 Local SR</option>
                            <option value="C1-120 Salle seconde">C1-120 Salle seconde</option>
                            <option value="C1-121 Réserve">C1-121 Réserve</option>
                            <option value="C1-122 Serveur pédago">C1-122 Serveur pédago</option>
                            <option value="C1-119 Salle seconde">C1-119 Salle seconde</option>
                            <option value="C1-121 Réserve">C1-121 Réserve</option>
                            <option value="C1-117 Salle systhème">C1-117 Salle systhème</option>
                            <option value="C1-118 Réserve">C1-118 Réserve</option>
                            <option value="C1-116 Local serveur">C1-116 Local serveur</option>
                            <option value="C1-114 Salle réseaux ETPS">C1-114 Salle réseaux ETPS</option>
                            <option value="C1-116 Local serveur">C1-116 Local serveur</option>
                            <option value="C1-115 Réserve">C1-115 Réserve</option>
                            <option value="C1-112 Salle systhème">C1-112 Salle systhème</option>
                            <option value="C1-113 Réserve">C1-113 Réserve</option>
                            <option value="C1-111 Local serveur">C1-111 Local serveur</option>
                            <option value="C1-109 Salle réseaux ETPS">C1-109 Salle réseaux ETPS</option>
                            <option value="C1-110 Réserve">C1-110 Réserve</option>
                            <option value="C1-106 Salle de cours techno.">C1-106 Salle de cours techno.</option>
                            <option value="C1-105 Salle de cours techno.">C1-105 Salle de cours techno.</option>
                            <option value="C1-103 Salle de réunion">C1-103 Salle de réunion</option>
                            <option value="ASC1-C1 Ascenseur 1">ASC1-C1 Ascenseur 1</option>
                            <option value="C1-208 Accés toiture">C1-208 Accés toiture</option>
                            <option value="C1-214 Rangement">C1-214 Rangement</option>
                            <option value="C1-212 Salle de cours tronc commun">C1-212 Salle de cours tronc commun</option>
                            <option value="C1-212 Salle de cours tronc commun">C1-212 Salle de cours tronc commun</option>
                            <option value="C1-201 Laboratoire tronc commun STI2D">C1-201 Laboratoire tronc commun STI2D</option>
                            <option value="ASC-2 C Ascenseur 2 C2">ASC-2 C Ascenseur 2 C2</option>
                            <option value="Passage couvert 1">Passage couvert 1</option>
                            <option value="ESC 2 -BC Escalier 2">ESC 2 -BC Escalier 2</option>
                            <option value="C2-012 Local poubelle">C2-012 Local poubelle</option>
                            <option value="C2-011 Magasin général">C2-011 Magasin général</option>
                            <option value="C2-001 Bureau CPE LT">C2-001 Bureau CPE LT</option>
                            <option value="C2-004 Dépôt foyer">C2-004 Dépôt foyer</option>
                            <option value="C2-005 réserve pole numérique LP ( TIC+tablettes)">C2-005 réserve pole numérique LP ( TIC+tablettes)</option>
                            <option value="C2-006 Local rangement">C2-006 Local rangement</option>
                            <option value="C2-018 Reprographie">C2-018 Reprographie</option>
                            <option value="C2-015 Assistant ctx LP/LGT">C2-015 Assistant ctx LP/LGT</option>
                            <option value="C2-014 Chef des travaux LGT">C2-014 Chef des travaux LGT</option>
                            <option value="C2-016 Chef des travaux LP">C2-016 Chef des travaux LP</option>
                            <option value="C2-012 Sas local poubelles">C2-012 Sas local poubelles</option>
                            <option value="C2-012 Local poubelles">C2-012 Local poubelles</option>
                            <option value="C2-011 Magasin général">C2-011 Magasin général</option>
                            <option value="C2-007 Archives vivantes">C2-007 Archives vivantes</option>
                            <option value="C2-115 Stockage">C2-115 Stockage</option>
                            <option value="C2-113 Salle de coordination prof / ressources">C2-113 Salle de coordination prof / ressources</option>
                            <option value="C2-110 Labo modelisation essai sous système">C2-110 Labo modelisation essai sous système</option>
                            <option value="C2-109 Vestiaire">C2-109 Vestiaire</option>
                            <option value="C2-108 Local répartiteur principal">C2-108 Local répartiteur principal</option>
                            <option value="C2-105 Salle banale">C2-105 Salle banale</option>
                            <option value="C2-104 Salle banale">C2-104 Salle banale</option>
                            <option value="C2-103 Salle banale">C2-103 Salle banale</option>
                            <option value="C2-102 Salle banale">C2-102 Salle banale</option>
                            <option value="C2-101 Salle banale">C2-101 Salle banale</option>
                            <option value="ESC 1 -BC Escalier 1">ESC 1 -BC Escalier 1</option>
                            <option value="C2-207 Sanitaire">C2-207 Sanitaire</option>
                            <option value="C2-208 Local ménage réparti">C2-208 Local ménage réparti</option>
                            <option value="C2-209 Sanitaire">C2-209 Sanitaire</option>
                            <option value="ESC3- BC Escalier 3">ESC3- BC Escalier 3</option>
                            <option value="C3-017 Atelier de réalisation C3-017">C3-017 Atelier de réalisation C3-017</option>
                            <option value="C3-016 Local poubelle réparti">C3-016 Local poubelle réparti</option>
                            <option value="ESC E- BC Escalier E">ESC E- BC Escalier E</option>
                            <option value="C3-001 Accès blocs sanitaires">C3-001 Accès blocs sanitaires</option>
                            <option value="C3-002 Accès blocs sanitaires">C3-002 Accès blocs sanitaires</option>
                            <option value="C3-003 Local ménage réparti">C3-003 Local ménage réparti</option>
                            <option value="C3-019 Laboratoire conception et similation numérique CRSA">C3-019 Laboratoire conception et similation numérique CRSA</option>
                            <option value="C3-019 Laboratoire conception et similation numérique CRSA">C3-019 Laboratoire conception et similation numérique CRSA</option>
                            <option value="C3-018 Stockage atelier de réalisation">C3-018 Stockage atelier de réalisation</option>
                            <option value="C3-017 Atelier de réalisation">C3-017 Atelier de réalisation</option>
                            <option value="C3-017 Atelier de réalisation">C3-017 Atelier de réalisation</option>
                            <option value="C3-016 Sas local poubelles">C3-016 Sas local poubelles</option>
                            <option value="C3-016 Local poubelles">C3-016 Local poubelles</option>
                            <option value="C3-015 Salle de cours CRSA">C3-015 Salle de cours CRSA</option>
                            <option value="C3-013Laboratoire TP">C3-013Laboratoire TP</option>
                            <option value="BAT- BC Escalier 3">BAT- BC Escalier 3</option>
                            <option value="C3-109 Salle technolgie BTS ELEC/B MELEC">C3-109 Salle technolgie BTS ELEC/B MELEC</option>
                            <option value="C3-108 Salle TP sciences appliquées ELEC/SEN">C3-108 Salle TP sciences appliquées ELEC/SEN</option>
                            <option value="C3-107 Réserve">C3-107 Réserve</option>
                            <option value="C3-106 Local SR">C3-106 Local SR</option>
                            <option value="C3-105 Local ménage réparti.">C3-105 Local ménage réparti.</option>
                            <option value="C3-103 salle info">C3-103 salle info</option>
                            <option value="C3-103bis salle info">C3-103bis salle info</option>
                            <option value="C3-102 Salle banale">C3-102 Salle banale</option>
                            <option value="C3-101 Salle banalisée">C3-101 Salle banalisée</option>
                            <option value="A 304 COURS SCIENCES">A 304 COURS SCIENCES</option>
                            <option value="A 302 TP SCIENCES">A 302 TP SCIENCES</option>
                            <option value="A 305 TP SCIENCES">A 305 TP SCIENCES</option>
                            <option value="A 307 TP SCIENCES">A 307 TP SCIENCES</option>
                            <option value="A 309 TP SCIENCES">A 309 TP SCIENCES</option>
                            <option value="A 310 TP SCIENCES">A 310 TP SCIENCES</option>
                            <option value="A 311 TP SCIENCES">A 311 TP SCIENCES</option>
                            <option value="A 313 TP SCIENCES">A 313 TP SCIENCES</option>
                            <option value="A 314 TP SCIENCES">A 314 TP SCIENCES</option>
                            <option value="A 316 TP SCIENCES">A 316 TP SCIENCES</option>
                            <option value="D001">D001</option>
                            <option value="D002">D002</option>
                            <option value="D003">D003</option>
                            <option value="D004">D004</option>
                            <option value="D005">D005</option>
                            <option value="D006">D006</option>
                            <option value="D007">D007</option>
                            <option value="D008">D008</option>
                            <option value="D009">D009</option>
                            <option value="D010">D010</option>
                            <option value="D011">D011</option>
                            <option value="D013">D013</option>
                            <option value="D014">D014</option>
                            <option value="D015">D015</option>
                            <option value="D016">D016</option>
                            <option value="D017">D017</option>
                            <option value="D018">D018</option>
                            <option value="D019">D019</option>
                            <option value="D020">D020</option>
                            <option value="D101">D101</option>
                            <option value="D103">D103</option>
                            <option value="D104">D104</option>
                            <option value="D105">D105</option>
                            <option value="D106">D106</option>
                            <option value="D107">D107</option>
                            <option value="D108">D108</option>
                            <option value="D109">D109</option>
                            <option value="D110">D110</option>
                            <option value="D111">D111</option>
                            <option value="D112">D112</option>
                            <option value="D113">D113</option>
                            <option value="D114">D114</option>
                            <option value="D201">D201</option>
                            <option value="D202">D202</option>
                            <option value="D203">D203</option>
                            <option value="D204">D204</option>
                            <option value="D205">D205</option>
                            <option value="D206">D206</option>
                            <option value="D207">D207</option>
                            <option value="D208">D208</option>
                            <option value="D209">D209</option>
                            <option value="D210">D210</option>
                            <option value="D211">D211</option>
                            <option value="D212">D212</option>
                            <option value="D213">D213</option>
                            <option value="D214">D214</option>
                            <option value="D215">D215</option>
                            <option value="D216">D216</option>
                            <option value="D216">D216</option>
                            <option value="D302">D302</option>
                            <option value="D303">D303</option>
                            <option value="D304">D304</option>
                            <option value="D305">D305</option>
                            <option value="D306">D306</option>
                            <option value="D307">D307</option>
                            <option value="D308">D308</option>
                            <option value="D309">D309</option>
                            <option value="D310">D310</option>
                            <option value="D311">D311</option>
                            <option value="D312">D312</option>
                            <option value="D313">D313</option>
                            <option value="D314">D314</option>
                            <option value="D315">D315</option>
                            <option value="D401">D401</option>
                            <option value="D402">D402</option>
                            <option value="D403">D403</option>
                            <option value="D404">D404</option>
                            <option value="D405">D405</option>
                            <option value="D406">D406</option>
                            <option value="D407">D407</option>
                            <option value="D408">D408</option>
                            <option value="D409">D409</option>
                            <option value="D409">D409</option>
                            <option value="D410">D410</option>
                            <option value="D411">D411</option>
                            <option value="D412">D412</option>
                            <option value="D413">D413</option>
                            <option value="D414">D414</option>
                            <option value="D415">D415</option>
                            <option value="D416">D416</option>
                            <option value="D417">D417</option>
                            <option value="D418">D418</option>
                          </select>
                        </div>
                      </div></br>
                      <div class="row justify-content-center">
                        <div class="form-group col-md-4">
                          <label for="inputAddress">Localisation:</label>
                          <input type="text" class="form-control" id="inputAddress" name="emplacement_precis" placeholder="Précision spaciale dans la pièce">
                        </div></br>
                        <div class="form-group col-md-4">
                            <label for="inputAddress">Situation dangereuse:</label>
                            <input type="text" class="form-control" id="inputAddress" name="precis" placeholder="Donner une Précision (ex:Interrupteur côté porte...)">
                          </div>
                        </div><br>
                        <div class="row justify-content-center">
                          <div class="form-group col-md-4">
                            <label for="inputState">Famille de risque:</label>
                            <select id="inputState" name="famille" class="form-control">
                              <option selected>Choisir...</option>
                              <option value="Aération / Assainissement (R-A-A)">Aération / Assainissement (R-A-A)</option>
                              <option value="Ambiance thermique (R-A-Th)">Ambiance thermique (R-A-Th)</option>
                              <option value="Autre risque (R-Autre)">Autre risque (R-Autre)</option>
                              <option value="Biologique (R-Bio)">Biologique (R-Bio)</option>
                              <option value="Chimique (R-Chim)">Chimique (R-Chim)</option>
                              <option value="Chute de hauteur (R-CH)">Chute de hauteur (R-CH)</option>
                              <option value="Chute de plain-pied (R-CPP)">Chute de plain-pied (R-CPP)</option>
                              <option value="Chute d'objets (R-CO)">Chute d'objets (R-CO)</option>
                              <option value="Circulations / Déplacements (R-CD)">Circulations / Déplacements (R-CD)</option>
                              <option value="Effondrements (R-Eff)">Effondrements (R-Eff)</option>
                              <option value="Electrique (R-Elec)">Electrique (R-Elec)</option>
                              <option value="Equipements sous pression (R-ESP)">Equipements sous pression (R-ESP)</option>
                              <option value="Ergonomie (R-Ergo)">Ergonomie (R-Ergo)</option>
                              <option value="Hygiène (R-Hyg)">Hygiène (R-Hyg)</option>
                              <option value="Incendie/Explosion (R-IE)">Incendie/Explosion (R-IE)</option>
                              <option value="Machines et outils de travail (R-MO)">Machines et outils de travail (R-MO)</option>
                              <option value="Manutention manuelle (R-Mma)">Manutention manuelle (R-Mma)</option>
                              <option value="Manutention mécanique (R-Mmé)">Manutention mécanique (R-Mmé)</option>
                              <option value="Poussières / Fumées (R-PF)">Poussières / Fumées (R-PF)</option>
                              <option value="Produits/Emissions de déchets (R-PE)">Produits/Emissions de déchets (R-PE)</option>
                              <option value="Protection individuelle (R-PI)">Protection individuelle (R-PI)</option>
                              <option value="Rayonnement ionisants(R-RI)">Rayonnement ionisants(R-RI)</option>
                              <option value="Risque Amiante (R-A)">Risque Amiante (R-A)</option>
                              <option value="Risque lié à la coactivité (R-Coa)">Risque lié à la coactivité (R-Coa)</option>
                              <option value="Risque lié à la sûreté de l'établissement (R-Sûreté)">Risque lié à la sûreté de l'établissement (R-Sûreté)</option>
                              <option value="Risque lié à l'éclairage (R-Ecl)">Risque lié à l'éclairage (R-Ecl)</option>
                              <option value="Risque lié au bruit (R-Bruit)">Risque lié au bruit (R-Bruit)</option>
                              <option value="Risque lié au travail isolé (R-TI)">Risque lié au travail isolé (R-TI)</option>
                              <option value="Risque lié au travail sur écran (R-TE)">Risque lié au travail sur écran (R-TE)</option>
                              <option value="Risque lié aux vibrations (R-Vib)">Risque lié aux vibrations (R-Vib)</option>
                              <option value="Risque liquides cryogéniques et gaz (R-Gaz)">Risque liquides cryogéniques et gaz (R-Gaz)</option>
                              <option value="Risque majeur (R-Maj)">Risque majeur (R-Maj)</option>
                              <option value="Risque poussière de bois (R-PB)">Risque poussière de bois (R-PB)</option>
                              <option value="Risque psychosocial (R-RPS)">Risque psychosocial (R-RPS)</option>
                              <option value="Risque routier (R-Rou)">Risque routier (R-Rou)</option>
                              <option value="Risque liés au COVID-19">Risque liés au COVID-19</option>
                            </select>
                          </div>
                      </div><br><br>
                      <div class="row justify-content-center">
                        <div class="form-group col-md-6">
                          <h3>Personne exposées</h3>
                          <table>
                            <thead>
                              <tr>
                                <th>Catégorie</th>
                                <th>0</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Tous les personnels EN</td>
                                <td><input type="radio" name="personnels_en" value="0"></td>
                                <td><input type="radio" name="personnels_en" value="1"></td>
                                <td><input type="radio" name="personnels_en" value="2"></td>
                                <td><input type="radio" name="personnels_en" value="3"></td>
                                <td><input type="radio" name="personnels_en" value="4"></td>
                              </tr>
                              <tr>
                                <td>Tous les ATTEE</td>
                                <td><input type="radio" name="atte" value="0"></td>
                                <td><input type="radio" name="atte" value="1"></td>
                                <td><input type="radio" name="atte" value="2"></td>
                                <td><input type="radio" name="atte" value="3"></td>
                                <td><input type="radio" name="atte" value="4"></td>
                              </tr>
                              <tr>
                                <td>Tous les élèves</td>
                                <td><input type="radio" name="eleves" value="0"></td>
                                <td><input type="radio" name="eleves" value="1"></td>
                                <td><input type="radio" name="eleves" value="2"></td>
                                <td><input type="radio" name="eleves" value="3"></td>
                                <td><input type="radio" name="eleves" value="4"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div><br><br>
                      <div class="row justify-content-center">
                        <div class="form-group col-md-6">
                          <h3>Gravité</h3>
                          <table>
                            <thead>
                                <tr>
                                <th>Catégorie</th>
                                <th>0</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Blessures Graves</td>
                                <td><input type="radio" name="Blessure_graves_ou_deces" value="0"></td>
                                <td><input type="radio" name="Blessure_graves_ou_deces" value="1"></td>
                                <td><input type="radio" name="Blessure_graves_ou_deces" value="2"></td>
                                <td><input type="radio" name="Blessure_graves_ou_deces" value="3"></td>
                                <td><input type="radio" name="Blessure_graves_ou_deces" value="4"></td>
                                </tr>
                                <tr>
                                <td>Maladies Mortelles</td>
                                <td><input type="radio" name="maladie_mortelle" value="0"></td>
                                <td><input type="radio" name="maladie_mortelle" value="1"></td>
                                <td><input type="radio" name="maladie_mortelle" value="2"></td>
                                <td><input type="radio" name="maladie_mortelle" value="3"></td>
                                <td><input type="radio" name="maladie_mortelle" value="4"></td>
                                </tr>
                                <tr>
                                <td>Pénibilité Physique</td>
                                <td><input type="radio" name="penibilite_physique" value="0"></td>
                                <td><input type="radio" name="penibilite_physique" value="1"></td>
                                <td><input type="radio" name="penibilite_physique" value="2"></td>
                                <td><input type="radio" name="penibilite_physique" value="3"></td>
                                <td><input type="radio" name="penibilite_physique" value="4"></td>
                                </tr>
                                <tr>
                                <td>Pénibilité Mentale</td>
                                <td><input type="radio" name="penibilite_mentale" value="0"></td>
                                <td><input type="radio" name="penibilite_mentale" value="1"></td>
                                <td><input type="radio" name="penibilite_mentale" value="2"></td>
                                <td><input type="radio" name="penibilite_mentale" value="3"></td>
                                <td><input type="radio" name="penibilite_mentale" value="4"></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                      </div><br><br>
                      <div class="row justify-content-center">
                        <div class="form-group col-md-6">
                          <h3>Probabilité</h3>
                          <table>
                            <thead>
                              <tr>
                                <th>Catégorie</th>
                                <th>0</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Probabilité</td>
                                <td><input type="radio" name="probabilite" value="0"></td>
                                <td><input type="radio" name="probabilite" value="1"></td>
                                <td><input type="radio" name="probabilite" value="2"></td>
                                <td><input type="radio" name="probabilite" value="3"></td>
                                <td><input type="radio" name="probabilite" value="4"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div><br><br>
                      <div class="row justify-content-center">
                        <div class="form-group col-md-6">
                          <h3>Résolution de la situation</h3>
                          <table>
                            <thead>
                              <tr>
                                <th>Catégorie</th>
                                <th>0</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Complexité de Résolution</td>
                                <td><input type="radio" name="complexite_de_resolution" value="0"></td>
                                <td><input type="radio" name="complexite_de_resolution" value="1"></td>
                                <td><input type="radio" name="complexite_de_resolution" value="2"></td>
                                <td><input type="radio" name="complexite_de_resolution" value="3"></td>
                                <td><input type="radio" name="complexite_de_resolution" value="4"></td>
                              </tr>
                              <tr>
                                <td>Solution Onéreuse</td>
                                <td><input type="radio" name="solution_onereuse" value="0"></td>
                                <td><input type="radio" name="solution_onereuse" value="1"></td>
                                <td><input type="radio" name="solution_onereuse" value="2"></td>
                                <td><input type="radio" name="solution_onereuse" value="3"></td>
                                <td><input type="radio" name="solution_onereuse" value="4"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div><br><br>
                        <div class="row justify-content-center">
                          <div class="mb-5 img">
                            <input class="form-control form-control-sm" type="file">
                          </div>
                        </div>
                    <button  class="col-3" type="submit" name="submit" class="btn btn-dark">Envoyer</button>
                  </form>
            </div>
           




        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
        OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>

<!--Produit par Mahamamadou gory-->