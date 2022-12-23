SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `libros` (
  `titulo` varchar(50) NOT NULL,
  `anyo_edicion` int(11) NOT NULL,
  `precio` float(10,2) NOT NULL,
  `fecha_adquisicion` date NOT NULL,
  `numero_ejemplar` int(11) PRIMARY KEY
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `logins` (
  `usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci PRIMARY KEY,
  `passwd` char(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `logins` (`usuario`, `passwd`) VALUES
('Nicolás', 'c45f3fc0f92e983dea35e4b15213e6d7');


ALTER TABLE `libros`
  MODIFY `numero_ejemplar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

