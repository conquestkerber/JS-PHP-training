CREATE TABLE IF NOT EXISTS komponenta (
  sifra varchar(20) NOT NULL,
  naziv varchar(50) NOT NULL,
  status varchar(11) NOT NULL
);

INSERT INTO `komponenta` (`sifra`, `naziv`, `status`) VALUES
('1234567', 'Gigabyte GA-M68MT-S2', 'dostupno'),
('1234568', 'MSI 760GM-P23', 'nedostupno'),
('1234569', 'Intel Core i5-2300', 'naruceno'),
('1234570', 'AMD Athlon II X4 Quad-Core', 'dostupno'),
('1234571', 'GeForce GT520 Asus', 'nedostupno'),
('1234572', 'AMD Radeon 6670 Sapphire', 'dostupno');
