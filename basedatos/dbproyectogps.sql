CREATE TABLE `ciudades` (
                            `id_ciudades` int NOT NULL AUTO_INCREMENT,
                            `Codigodepartamento` smallint DEFAULT NULL,
                            `NombreDepartamento` varchar(255) DEFAULT NULL,
                            `CodigoMunicipio` varchar(255) DEFAULT NULL,
                            `NombreMunicipio` varchar(255) DEFAULT NULL,
                            PRIMARY KEY (`id_ciudades`)
) ENGINE=InnoDB AUTO_INCREMENT=1122 DEFAULT CHARSET=utf8mb3;
CREATE TABLE `cliente` (
                           `id_clientes` int NOT NULL AUTO_INCREMENT,
                           `nombre` varchar(100) NOT NULL,
                           `apellido` varchar(100) NOT NULL,
                           `cedula` int NOT NULL,
                           `email` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                           `password` varchar(100) NOT NULL,
                           `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                           PRIMARY KEY (`id_clientes`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;
CREATE TABLE `direcciones` (
                               `id_direcciones` int NOT NULL,
                               `id_clientes` int NOT NULL,
                               `id_pais` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                               `id_continente` int NOT NULL,
                               `id_ciudad` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                               `direccion` varchar(50) NOT NULL,
                               `codpostal` int NOT NULL,
                               `celular` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                               `telefonofijo` char(15) NOT NULL,

                               PRIMARY KEY (`id_direcciones`),
                               KEY `id_clientes` (`id_clientes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3