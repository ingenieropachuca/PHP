<?php 
session_start();
?>
<?php
require_once "../good/preguntas_model.php";
require_once "juego_model.php";
$puntaje = array(20,15,10,5,1);
$cuenta = get_cuenta_preguntas_validas();

// HAY PREGUNTAS EN LA BASE? 
if($cuenta["cuenta"]>0)
{
require_once "juego_view.php";
if (isset($_GET["respuesta"]) && !empty($_GET["respuesta"]))
{
$pregunta=get_pregunta_by_id($_SESSION['aleatorio']);
if($pregunta["respuesta"] == $_GET["respuesta"])
{
mostrar_mensaje_pregunta_correcta();
$_SESSION['score']+=$puntaje[$_SESSION['intentos']];
generar_pregunta_aleatoria();
inicializar_intentos();
}
else
{
mostrar_pregunta();
evaluar_intentos();
evalua_numero_ingresado();
}

}

else
{
inicializar_score();
generar_pregunta_aleatoria();
inicializar_intentos();
}

imprime_intentos();
imprime_score();
}
// SI NO HAY PREGUNTAS EN LA BASE 
else
{
mostrar_mensaje_error();
}

?>