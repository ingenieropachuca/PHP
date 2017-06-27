<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h4><a href="preguntas.php">Home</a></h4>

<form action="insertar.php" method="post" name="form">
<p>Pregunta <input type="text" name="pregunta"></p>
<p>Respuesta<input type="text" name="respuesta"></p>
<input type="submit" value="Crear">
</form>
<?php  
echo $fallo;
?>
</body>
</html>