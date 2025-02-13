
CREATE TABLE paises
(
    id INT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

CREATE TABLE ciudades
(
    id INT PRIMARY KEY,
    id_pais INT,
    nombre VARCHAR(50) NOT NULL,
    FOREIGN KEY (id_pais) REFERENCES paises(id)
);

INSERT INTO paises
    (id, nombre)
VALUES
    (1, 'Panama'),
    (2, 'Chile'),
    (3, 'Colombia'),
    (4, 'Venezuela'),
    (5, 'Argentina');

INSERT INTO ciudades
    (id, id_pais, nombre)
VALUES
    (1, 1, 'Panama'),
    (2, 2, 'Santiago'),
    (3, 3, 'Bogota'),
    (4, 3, 'Cali'),
    (5, 4, 'Caracas'),
    (6, 5, 'Rosario'),
    (7, NULL, 'Mexico DF'),
    (8, 2, 'Viña del Mar');


/*
Crear una única sentencia MySQL válida que liste TODAS las ciudades, y su respectivo país, 
ordenado por país ascendentemente y luego por ciudad ascendentemente. (Es una única sentencia MySQL con doble ordenamiento). y limit 1
*/
SELECT c.nombre as ciudad , coalesce(p.nombre, ' ') as pais
FROM ciudad c
   LEFT JOIN  pais p on p.id = c.id_pais
ORDER BY p.nombre  ASC , c.nombre ASC ;
