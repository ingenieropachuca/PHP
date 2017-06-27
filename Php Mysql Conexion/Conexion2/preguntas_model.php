<?php
require_once "db.php";
function get_preguntas(){
	$sql = "SELECT id, pregunta FROM preguntas";
	$preguntas_array = get_elements($sql);
	return $preguntas_array;
}
function get_pregunta_by_id($id){
	$sql = "SELECT id, pregunta FROM preguntas WHERE id = " . $id;
	$preguntas_array = get_elements($sql);
	return $preguntas_array;
}