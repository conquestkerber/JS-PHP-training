CREATE TABLE IF NOT EXISTS radnik (
  jmbg varchar(13) NOT NULL,
  ime varchar(20) NOT NULL,
  prezime varchar(20) NOT NULL
);

INSERT INTO radnik (jmbg, ime, prezime) VALUES
('1234567890123', 'Marko', 'Markovic'),
('2234567890123', 'Milan', 'Milanovic'),
('3234567890123', 'Petar', 'Petrovic'),
('4234567890123', 'Janko', 'Jankovic'),
('5234567890123', 'Jovan', 'Jovanovic');

