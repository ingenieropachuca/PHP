SELECT
pais.pais,
idioma.idioma
FROM
pais
INNER JOIN pais_idioma ON pais_idioma.pais_id = pais.id
INNER JOIN idioma ON pais_idioma.idioma_id = idioma.id
