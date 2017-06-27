SELECT
pais.pais,
Count(estado.estado) AS estados
FROM
estado
RIGHT JOIN pais ON estado.pais_id = pais.id
GROUP BY
pais.pais
HAVING
estados = 0
ORDER BY
pais.pais ASC
