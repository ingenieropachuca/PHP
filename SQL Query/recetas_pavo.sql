SELECT
receta.receta,
ingrediente.ingrediente
FROM
receta
INNER JOIN receta_ingrediente ON receta_ingrediente.receta_id = receta.id
INNER JOIN ingrediente ON receta_ingrediente.ingrediente_id1 = ingrediente.id
WHERE
ingrediente.id = 1