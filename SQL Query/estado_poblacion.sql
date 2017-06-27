SELECT
Sum(estado.poblacion)
FROM
estado
INNER JOIN pais_idioma ON estado.pais_id = pais_idioma.pais_id
WHERE
pais_idioma.idioma_id = 2
