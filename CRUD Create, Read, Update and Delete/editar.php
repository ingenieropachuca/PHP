<?php  
require_once "preguntas_model.php";
$_POST['pregunta'];
$_POST['respuesta'];
$_POST['id'];

if(isset($_POST['pregunta']) && !empty($_POST['pregunta']) && isset($_POST['respuesta']) && !empty($_POST['respuesta']) && isset($_POST['status']) && !empty($_POST['status']))
{
update($_POST['pregunta'],$_POST['respuesta'],$_POST['status'],$_POST['id']);
}
else
{
	echo "<h3>";
	echo "Insertar Datos";
	echo "</h3>";
}

	echo "<br> <br>";
	echo "Pregunta: ". $_POST['pregunta']."<br>";
	echo "Respuesta: ". $_POST['respuesta']."<br>";
	echo "Status: ". $_POST['status']."<br>";
	echo "<a href='preguntas.php?'>";
	echo "<h4>"."home"."</h4>";
	echo "</a>";
?>