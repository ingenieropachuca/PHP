<?php
require_once "preguntas_model.php";
$preguntas = get_preguntas_validas();
$preguntas_invalidas = get_preguntas_invalidas();
require_once "preguntas_view.php";
?>