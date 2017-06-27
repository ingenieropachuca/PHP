<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>



<?php
echo "<h1>"."Preguntas validas"."</h1>";
echo "<ul>";
//DE TODAS LAS PREGUNTAS OBTENER CADA 1 
foreach ($preguntas as $pregunta) {
echo "<li>";
//IMPRIMIR LA PREGUNTA Y EL ID AL USUARIO 
echo "<a href='pregunta.php? id=".$pregunta["id"]." '>";
echo $pregunta["id"]." - ".$pregunta["pregunta"]."<br/>";
echo "</a>";
echo "</li>";
}
echo "</ul>";

echo "<h1>"."Preguntas invalidas"."</h1>";

foreach ($preguntas_invalidas as $pregunta_invalida) {
echo "<li>";
//IMPRIMIR LA PREGUNTA Y EL ID AL USUARIO 
echo "<a href='pregunta.php? id=".$pregunta_invalida["id"]." '>";
echo $pregunta_invalida["id"]." - ".$pregunta_invalida["pregunta"]."<br/>";
echo "</a>";
echo "</li>";
}
echo "</ul>";

echo "<a href='insertar.php'>";
echo "<h4>"."Agregar Nueva pregunta"."</h4>"; 
echo "</a>"."<br>";



?>
</body>
</html>