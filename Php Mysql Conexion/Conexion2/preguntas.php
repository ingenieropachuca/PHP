<?php
require_once "preguntas_model.php";

$preguntas = get_preguntas();

foreach ($preguntas as $pregunta) {
	echo $pregunta["id"]." - ".$pregunta["pregunta"]."<br/>";
}