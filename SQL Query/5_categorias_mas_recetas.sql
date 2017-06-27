SELECT
categoria.categoria,
Count(receta.receta) AS numero_recetas
FROM
categoria
INNER JOIN subcategoria ON subcategoria.categoria_id = categoria.id
INNER JOIN receta ON receta.subcategoria_id = subcategoria.id
GROUP BY
categoria.categoria
ORDER BY
numero_recetas DESC
LIMIT 5
