<?php  
//FUNCION PARA MOSTRAR QUE LA PREGUNTA FUE CORRECTA
function mostrar_mensaje_pregunta_correcta()
{
	echo "Correcto!!";
}

//FUNCION PARA MOSTRAR QUE LA BASE NO TIENE PREGUNTAS
function mostrar_mensaje_error()
{
	echo "No hay preguntas disponibles vuelva mas tarde";
}
//FUNCION PARA MOSTRAR LA PREGUNTA OBTENIDA AL USUARIO
function mostrar_pregunta()
{
	$pregunta=get_pregunta_by_id($_SESSION['aleatorio']);
	echo "<h3>";
	echo $pregunta["pregunta"];
	echo "</h3>";
}
//FUNCION PARA MOSTRAR EL SCORE AL USUARIO 
function imprime_score()
{
	echo"puntaje: ".$_SESSION['score']."<br>";
}
//FUNCION PARA MOSTRAR LOS INTENTOS AL USUARIO
function imprime_intentos()
{
	echo "Intentos: ".$_SESSION['prueba']."<br>";
}
//FUNCION PARA INICIALIZAR LA PUNTUACION
function inicializar_score()
{
	$_SESSION['score']=0;
}
//FUNCION PARA INICIALIZAR LOS INTENTOS
function inicializar_intentos()
{
	$_SESSION['intentos']=0;
	$_SESSION['prueba']=5;
}
//FUNCION PARA GENERAR EL NUMERO ALEATORIO
function generar_numero_aleatorio()
{	
	$todas =get_cuenta_total_preguntas();
	$_SESSION['aleatorio']=rand (1,$todas["total"]);
}
//FUNCION PARA GENERAR LA PREGUNTA CON EL NUMERO ALEATORIO
function generar_pregunta_aleatoria()
{
generar_numero_aleatorio();
$pregunta=get_pregunta_by_id($_SESSION['aleatorio']);
while ($pregunta["status"]!=1) {
generar_numero_aleatorio();
$pregunta=get_pregunta_by_id($_SESSION['aleatorio']);
}
echo "<h3>";
echo $pregunta["pregunta"];
echo "</h3>";
}
//FUNCION PARA EVALUAR LA RESPUESTA QUE EL USUARIO INGRESE 
//ESTA NO SE USO
function evaluar_respuesta()
{
$pregunta=get_pregunta_by_id($_SESSION['aleatorio']);
if($pregunta["respuesta"] == $_GET["respuesta"])
{
echo "Correcto!!"."<br>";
$_SESSION['score']+=$puntaje[$_SESSION['intentos']];
generar_pregunta_aleatoria();
}
else
{
mostrar_pregunta();
echo "<br>"."bad"."<br>";
}
}
// FUNCION PARA INCREMENTAR LOS INTENTOS AL USUARIO
function evaluar_intentos()
{
$_SESSION['intentos']++;
$_SESSION['prueba']--;
if($_SESSION['prueba']<0)
{
$_SESSION['prueba']=5;
}
if($_SESSION['intentos']>5)
{
$_SESSION['intentos']=0;
echo "<br>"."Termino el juego";
echo "<br>"."Tu puntaje final fue de: ".$_SESSION['score'];
inicializar_score();
}
}
//OBTENER LA DIFERENCIA PARA EVALUAR LA RESPUESTA
function obtiene_diferencia_absoluta()
{
$pregunta=get_pregunta_by_id($_SESSION['aleatorio']);
$absoluto=abs($pregunta["respuesta"]-$_GET['respuesta']);
return $absoluto;
}
//EVALUAR LA RESPUESTA DEL USUARIO PARA AYUDARLO
function evalua_numero_ingresado()
{
	$resta=obtiene_diferencia_absoluta();
	if($resta<5)
	{
		echo "<br>". "caliente"."<br>";
	}
	else
	{
	if($resta<20)
	{
		echo "<br>"."tibio". "<br>";
	}
	else {
	echo "<br>"."frio". "<br>";
	}
	}
}


?>