DROP TABLE IF EXISTS identite ;
 CREATE TABLE identite (ID_identite INT  AUTO_INCREMENT NOT NULL,
  prenom VARCHAR(100),
  nom VARCHAR(100), PRIMARY KEY (ID_identite) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS categorie ;
 CREATE TABLE categorie (ID_categorie INT  AUTO_INCREMENT NOT NULL,
  nom_categorie VARCHAR(100),
  PRIMARY KEY (ID_categorie) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS article ;
 CREATE TABLE article (ID_article INT  AUTO_INCREMENT NOT NULL,
  contenu TEXT,
  titre VARCHAR(150),
  ID_identite INT NOT NULL, PRIMARY KEY (ID_article) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS article_categorie ;
 CREATE TABLE article_categorie (ID_article_categorie INT  AUTO_INCREMENT NOT NULL,
  ID_categorie INT NOT NULL,
  ID_article INT, PRIMARY KEY (ID_article_categorie) ) ENGINE=InnoDB;