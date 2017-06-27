SELECT
pais.pais,
estado.estado
FROM
estado
INNER JOIN pais ON estado.pais_id = pais.id
ORDER BY
pais.pais ASC,
estado.estado ASC
