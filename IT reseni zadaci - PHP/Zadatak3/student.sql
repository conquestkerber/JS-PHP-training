CREATE TABLE IF NOT EXISTS student (
  indeks varchar(6) NOT NULL,
  ime varchar(20) NOT NULL,
  prezime varchar(30) NOT NULL
);

INSERT INTO student (indeks, ime, prezime) VALUES
('11111', 'Marko', 'Markovic'),
('22222', 'Milan', 'Milanovic'),
('33333', 'Petar', 'Petrovic'),
('44444', 'Janko', 'Jankovic'),
('55555', 'Jovan', 'Jovanovic');