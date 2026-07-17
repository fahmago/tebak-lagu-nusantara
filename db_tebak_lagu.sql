CREATE TABLE `lagu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `audio` varchar(100) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `lagu` (`title`, `audio`, `option1`, `option2`, `option3`, `option4`) VALUES
('Ampar Ampar Pisang', 'ampar.mp3', 'Ampar Ampar Pisang', 'Apuse', 'Manuk Dadali', 'Tokecang'),
('Apuse', 'apuse.mp3', 'Apuse', 'Yamko Rambe Yamko', 'Rasa Sayange', 'Gundul Gundul Pacul'),
('Potong Bebek Angsa', 'bebek.mp3', 'Potong Bebek Angsa', 'Anak Kambing Saya', 'Cublak Cublak Suweng', 'Tokecang'),
('Cublak Cublak Suweng', 'cublak.mp3', 'Cublak Cublak Suweng', 'Gundul Gundul Pacul', 'Ampar Ampar Pisang', 'Apuse'),
('Gundul Gundul Pacul', 'gundul.mp3', 'Gundul Gundul Pacul', 'Cublak Cublak Suweng', 'Manuk Dadali', 'Rasa Sayange'),
('Anak Kambing Saya', 'kambing.mp3', 'Anak Kambing Saya', 'Potong Bebek Angsa', 'Yamko Rambe Yamko', 'Apuse'),
('Manuk Dadali', 'manuk.mp3', 'Manuk Dadali', 'Tokecang', 'Ampar Ampar Pisang', 'Rasa Sayange'),
('Rasa Sayange', 'rasa.mp3', 'Rasa Sayange', 'Yamko Rambe Yamko', 'Apuse', 'Anak Kambing Saya'),
('Tokecang', 'tokecang.mp3', 'Tokecang', 'Manuk Dadali', 'Potong Bebek Angsa', 'Gundul Gundul Pacul'),
('Yamko Rambe Yamko', 'yamko.mp3', 'Yamko Rambe Yamko', 'Apuse', 'Rasa Sayange', 'Ampar Ampar Pisang');
