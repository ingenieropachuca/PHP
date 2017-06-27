SELECT
p.pais AS nombre_pais,
Sum(e.poblacion) AS total
FROM
pais AS p
INNER JOIN estado AS e ON e.pais_id = p.id
GROUP BY
p.pais,
p.id
HAVING
total > 1000
