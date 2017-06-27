<?php
require_once "preguntas_model.php";
$id=$_GET["id"];
$pregunta = get_pregunta_by_id($_GET["id"]);
require_once "pregunta_view.php";
?>