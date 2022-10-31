CREATE TABLE IF NOT EXISTS student (
  indeks varchar(6) NOT NULL,
  ime varchar(20) NOT NULL,
  prezime varchar(20) NOT NULL, 
  godina int(1) NOT NULL
);





INSERT INTO student (indeks, ime, prezime, godina) VALUES
('12345', 'Marko', 'Markovic', 1),
('12346', 'Milan', 'Milanovic', 2),
('12347', 'Petar', 'Petrovic', 3),
('12348', 'Janko', 'Jankovic', 3),
('12349', 'Jovana', 'Jovanovic', 4);
