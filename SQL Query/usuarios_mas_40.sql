SELECT
usuario.usuario,
Count(receta.receta) AS num_recetas
FROM
usuario
INNER JOIN receta ON receta.usuario_id = usuario.id
GROUP BY
usuario.usuario
HAVING
num_recetas >= 40
ORDER BY
num_recetas DESC
