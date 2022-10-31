CREATE TABLE IF NOT EXISTS student (
  indeks varchar(15) NOT NULL,
  ime varchar(20) NOT NULL,
  prezime varchar(20) NOT NULL, 
  godina varchar(1) NOT NULL,
  status varchar(3) NOT NULL
); 


INSERT INTO student (indeks, ime, prezime, godina, status) VALUES
('12345', 'Marko', 'Markovic', '1', 'FIB'),
('12346', 'Milan', 'Milanovic', '2', 'FIB'),
('12347', 'Petar', 'Petrovic', '2', 'SAF'),
('12349', 'Janko', 'Jankovic', '3', 'SAF'),
('12348', 'Jovan', 'Jovanovic', '4', 'FIB'); 