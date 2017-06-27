<?php
require_once "db.php";
//FUNCION PARA OBTENER TODAS LAS PREGUNTAS
function get_preguntas_validas(){
	$sql = "SELECT id, pregunta,respuesta,status FROM preguntas WHERE preguntas.`status` = 1 ";
	$preguntas_array = get_elements($sql);
	return $preguntas_array;
}

function get_preguntas_invalidas(){
	$sql = "SELECT id, pregunta,respuesta,status FROM preguntas WHERE preguntas.`status` = -1 ";
	$preguntas_array = get_elements($sql);
	return $preguntas_array;
}

//FUNCION PARA OBTENER LAS PREGUNTAS POR SU ID 
function get_pregunta_by_id($id){
	$sql = "SELECT id, pregunta,respuesta,status FROM preguntas WHERE id =  $id";
	$preguntas_array = get_elements($sql);
	$pregunta=$preguntas_array[0];
	return $pregunta;
}
function insertar($ans,$resp)
{
$sql= "INSERT INTO preguntas (pregunta, respuesta)
VALUES ('$ans', '$resp')";
$insert = make_insert($sql);
return $insert;
}

function update($ans,$resp,$status,$id)
{
$sql = "UPDATE preguntas SET pregunta='$ans', respuesta='$resp' , status='$status' WHERE id= $id";
$update = make_update($sql);
return $update;
}

function get_cuenta_preguntas_validas(){
	$sql = "SELECT Count(pregunta) AS cuenta FROM preguntas WHERE preguntas.`status` = 1";
	$cuenta_valida_array = get_elements($sql);
	$cuenta_valida=$cuenta_valida_array[0];
	return $cuenta_valida;
}

function get_cuenta_total_preguntas(){
	$sql = "SELECT Count(*) AS total FROM preguntas";
	$cuenta_array = get_elements($sql);
	$cuenta=$cuenta_array[0];
	return $cuenta;
}



