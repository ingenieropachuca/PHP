<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h4><a href="preguntas.php">home</a></h4>

<form action="editar.php" method="post">
<h4>id</h4> <input type="text" name="id" readonly="readonly"  value= "<?php echo $pregunta["id"] ?>"  />
<h4>Pregunta</h4><input type="text" name="pregunta" value= "<?php echo $pregunta["pregunta"] ?>"  />
<h4>Respuesta</h4><input type="text" name="respuesta" value= "<?php echo $pregunta["respuesta"] ?>" />
<input type="radio" name="status" value= 1 /> Valido
<input type="radio" name="status" value= -1 /> Invalido

<br><br><input type="submit" value="Guardar">
</form>

</body>
</html>