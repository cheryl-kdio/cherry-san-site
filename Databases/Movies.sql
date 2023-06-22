USE Movies
create table Movies_db
(
    nom VARCHAR(30),
    prenom_realisateur VARCHAR(30),
    nom_realisateur VARCHAR(30),
    annee INTEGER,
    genre text,
    pays VARCHAR(30),
    categorie set("Anime","Film","Série")    
    );