CREATE DATABASE lab4zad3; 
 
USE lab4zad3; 
 
CREATE TABLE trka ( id INT NOT NULL AUTO_INCREMENT, naziv varchar(20) NOT NULL, ukupan_broj_krugova int(11) NOT NULL,   PRIMARY KEY(id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8; 
 
 
INSERT INTO trka (naziv,ukupan_broj_krugova) VALUES ('Moto GP',56); 

CREATE TABLE vozac ( id INT NOT NULL AUTO_INCREMENT, ime varchar(30) NOT NULL, prezime varchar(30) NOT NULL, tim varchar(30) NOT NULL, broj_predjenih_krugova varchar(10) NOT NULL, trka_id int(11) NOT NULL,    PRIMARY KEY(id),    FOREIGN KEY (trka_id) REFERENCES trka(id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8; 
 
INSERT INTO vozac (ime, prezime, tim, broj_predjenih_krugova, trka_id) VALUES ('Marc', 'Marquez', 'Honda', 35, 1), ('Valentino', 'Rossi', 'Yamaha', 36,1), ('Jorge', 'Lorenzo', 'Yamaha', 34,1); 
 