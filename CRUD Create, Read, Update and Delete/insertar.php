<?php  
require_once "preguntas_model.php";

$fallo="Inserta datos";
if(isset($_POST['pregunta']) && !empty($_POST['pregunta']) && isset($_POST['respuesta']) && !empty($_POST['respuesta']))
{
insertar($_POST['pregunta'],$_POST['respuesta']);
}
else
{
$fallo;
}
require_once "insertar_view.php";

?>