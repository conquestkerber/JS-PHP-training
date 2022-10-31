CREATE TABLE IF NOT EXISTS osiguranik (
  lbo varchar(15) NOT NULL,
  ime varchar(20) NOT NULL,
  prezime varchar(20) NOT NULL, 
  pol varchar(1) NOT NULL, 
  datum_rodjenja varchar(11) NOT NULL
);





INSERT INTO osiguranik (lbo, ime, prezime, pol, datum_rodjenja) VALUES
('123456', 'Marko', 'Markovic', 'M', '10.10.1961.'),
('123457', 'Milan', 'Milanovic', 'M', '15.11.1971.'),
('123458', 'Petra', 'Petrovic', 'Z', '20.12.1981.'),
('123459', 'Janko', 'Jankovic', 'M', '25.10.1991.'),
('123450', 'Jovana', 'Jovanovic', 'Z', '30.11.2001.');
