SELECT
receta.receta,
Avg(valoracion_usuario.valoracion) AS promedio,
valoracion_usuario.fecha_valoracion
FROM
receta
INNER JOIN valoracion_usuario ON valoracion_usuario.receta_id = receta.id
WHERE
valoracion_usuario.fecha_valoracion > '2017-03-31' AND
valoracion_usuario.fecha_valoracion < '2017-05-01'
GROUP BY
receta.receta
HAVING
promedio >= 3
ORDER BY
promedio DESC
