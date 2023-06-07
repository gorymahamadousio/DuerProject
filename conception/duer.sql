
CREATE TABLE Unite_de_travail(
   Id_Unite_de_travail INT,
   salle VARCHAR(50),
   PRIMARY KEY(Id_Unite_de_travail)
);

CREATE TABLE Localisation(
   Id_Localisation INT,
   emplacement_precis VARCHAR(50),
   PRIMARY KEY(Id_Localisation)
);


CREATE TABLE Situation_dangereuse(
   Id_Situation_dangereuse INT,
   precis VARCHAR(50),
   PRIMARY KEY(Id_Situation_dangereuse)
);

CREATE TABLE Famille_de_risque(
   Id_Famille_de_risque INT,
   famille VARCHAR(50),
   PRIMARY KEY(Id_Famille_de_risque)
);

CREATE TABLE Personne_exposees(
   Id_personne_exposees INT,
   tous_les_personnels_EN INT,
   tous_les_ATTEE INT,
   tous_les_eleves INT,
   PRIMARY KEY(Id_personne_exposees)
);

CREATE TABLE Gravite(
   Id_Gravite INT,
   Blessure_graves_ou_deces INT,
   maladie_mortelle INT,
   penibilite_physique INT,
   peniibilite_mentale INT,
   PRIMARY KEY(Id_Gravite)
);

CREATE TABLE Probabilite(
   Id_Probabilite INT,
   probabilite INT,
   PRIMARY KEY(Id_Probabilite)
);

CREATE TABLE Photos(
   Id_Photos INT,
   photos VARCHAR(50),
   PRIMARY KEY(Id_Photos)
);

CREATE TABLE Comptes(
   Id_Comptes INT,
   email VARCHAR(50),
   name_user VARCHAR(50),
   mot_de_passe VARCHAR(50),
   PRIMARY KEY(Id_Comptes)
);

CREATE TABLE Utilisateur(
   Id_Utilisateur INT,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   email VARCHAR(50),
   PRIMARY KEY(Id_Utilisateur)
);

CREATE TABLE Risques(
   Id_Risques INT,
   etat VARCHAR(50),
   date_creation VARCHAR(50),
   date_derniere_modification VARCHAR(50),
   Id_Photos INT NOT NULL,
   Id_Utilisateur INT NOT NULL,
   Id_Situation_dangereuse INT NOT NULL,
   Id_Probabilite INT NOT NULL,
   Id_Famille_de_risque INT NOT NULL,
   Id_Localisation INT NOT NULL,
   Id_Unite_de_travail INT NOT NULL,
   PRIMARY KEY(Id_Risques),
   FOREIGN KEY(Id_Photos) REFERENCES Photos(Id_Photos),
   FOREIGN KEY(Id_Utilisateur) REFERENCES Utilisateur(Id_Utilisateur),
   FOREIGN KEY(Id_Situation_dangereuse) REFERENCES Situation_dangereuse(Id_Situation_dangereuse),
   FOREIGN KEY(Id_Probabilite) REFERENCES Probabilite(Id_Probabilite),
   FOREIGN KEY(Id_Famille_de_risque) REFERENCES Famille_de_risque(Id_Famille_de_risque),
   FOREIGN KEY(Id_Localisation) REFERENCES Localisation(Id_Localisation),
   FOREIGN KEY(Id_Unite_de_travail) REFERENCES Unite_de_travail(Id_Unite_de_travail)
);

CREATE TABLE solution_de_la_situation(
   Id_solution_de_la_situation INT,
   complexite_de_resolution INT,
   solution_onereuse INT,
   Id_Risques INT NOT NULL,
   PRIMARY KEY(Id_solution_de_la_situation),
   FOREIGN KEY(Id_Risques) REFERENCES Risques(Id_Risques)
);

CREATE TABLE Asso_3(
   Id_Gravite INT,
   Id_Risques INT,
   PRIMARY KEY(Id_Gravite, Id_Risques),
   FOREIGN KEY(Id_Gravite) REFERENCES Gravite(Id_Gravite),
   FOREIGN KEY(Id_Risques) REFERENCES Risques(Id_Risques)
);

CREATE TABLE Asso_11(
   Id_personne_exposees INT,
   Id_Risques INT,
   PRIMARY KEY(Id_personne_exposees, Id_Risques),
   FOREIGN KEY(Id_personne_exposees) REFERENCES Personne_exposes(Id_personne_exposees),
   FOREIGN KEY(Id_Risques) REFERENCES Risques(Id_Risques)
);
