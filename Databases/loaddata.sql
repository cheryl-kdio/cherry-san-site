/* chargement du fichier films.txt dans la table FilmSimple */
USE Movies;

LOAD DATA LOCAL INFILE '/var/www/html/exemples/cherry-san-site/Databases/Movies_db.csv'
INTO TABLE Movies_db
FIELDS TERMINATED BY ';';