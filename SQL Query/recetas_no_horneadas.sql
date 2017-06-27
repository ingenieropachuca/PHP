SELECT
receta.receta,
tipo_de_coccion.tipo_de_coccion
FROM
receta
INNER JOIN tipo_de_coccion ON receta.tipo_de_coccion_id = tipo_de_coccion.id
WHERE
tipo_de_coccion.id != 5
