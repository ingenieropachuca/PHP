SELECT
receta.receta,
Avg(valoracion_usuario.valoracion) AS promedio_valoracion,
valoracion_usuario.fecha_valoracion
FROM
receta
INNER JOIN valoracion_usuario ON valoracion_usuario.receta_id = receta.id
WHERE
valoracion_usuario.fecha_valoracion > '2017-03-31' AND
valoracion_usuario.fecha_valoracion < '2017-05-01'
GROUP BY
receta.receta,
valoracion_usuario.fecha_valoracion
ORDER BY
promedio_valoracion DESC
LIMIT 3
