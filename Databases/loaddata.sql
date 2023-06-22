/* chargement du fichier films.txt dans la table FilmSimple */
USE Movies;

LOAD DATA LOCAL INFILE '/home/cherry-san/repositories/cherry-san-site/Databases/Movies_db.csv'
INTO TABLE Movies_db
FIELDS TERMINATED BY ';';