CREATE TABLE IF NOT EXISTS osiguranik (
  lbo varchar(15) NOT NULL,
  ime varchar(20) NOT NULL,
  prezime varchar(20) NOT NULL
);

INSERT INTO `osiguranik` (lbo, ime, prezime) VALUES
('12345', 'Marko', 'Markovic'),
('12346', 'Milan', 'Milanovic'),
('12347', 'Petar', 'Petrovic'),
('12349', 'Janko', 'Jankovic'),
('12348', 'Jovan', 'Jovanovic');
