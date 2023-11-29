DROP DATABASE IF EXISTS marvel ;
CREATE DATABASE marvel ;

USE marvel ;

CREATE TABLE Compte (
  id int(11) NOT NULL AUTO_INCREMENT,
  nom varchar(100) NOT NULL,
  prenom varchar(100) NOT NULL,
  login varchar(30) NOT NULL,
  mdp varchar(100) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO Compte VALUES (1,'Lucina','Mathis','mathis.lucina@gmail.com','azerty93');
INSERT INTO Compte VALUES (2,'Fontaine','Jean','jean.fontaine@gmail.com','azerty94');
INSERT INTO Compte VALUES (3,'Koala','Lina','lina.koala@gmail.com','azerty95');
INSERT INTO Compte VALUES (4,'Tigre','Pierre','pierre.tigre@gmail.com','azerty91');
INSERT INTO Compte VALUES (5,'Loutre','Flora','flora.loutre@gmail.com','azerty92');
