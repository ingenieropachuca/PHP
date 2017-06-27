<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adivina</title>
</head>
<body>
<h1>Bienvenido al juego de las Adivinanzas</h1>
<h3>Escoge en un numero del 1 al 100</h3>
<form>
<input type="text" name="numero">
<input type="submit" name="Submit" value="Enter"> 
</form>

<?php
// DECLARANDO EL ARREGLO DE PUNTOS
$puntaje = array(20,15,10,5,1);

//SI EXISTE NUMERO? 
if (isset($_GET["numero"])){

//NUMERO ES IGUAL A NUMERO RANDOM?
if ($_GET["numero"]==$_SESSION['variable']) 
{
echo "Adivinaste! <br>";
$_SESSION['score']+=$puntaje[$_SESSION['intentos']];
genera_random();
inicializando_intentos();
}

//SI NO ES IGUAL ENTONCES: 
else
{
incrementa_intentos();
evalua_numero_ingresado();
}

}
//SI NO EXISTE EL NUMERO ENTONCES: 
else
{
	inicializando_score();
	genera_random();
	inicializando_intentos();
}

//MUESTRAME  
imprime_score();
imprime_random();
imprime_intentos();
// AQUI COMIENZAN LAS FUNCIONES 
function inicializando_score()
{
	$_SESSION['score']=0;
}

function inicializando_intentos()
{
	$_SESSION['intentos']=0;
	$_SESSION['prueba']=5;
}

function genera_random()
{
	$_SESSION['variable']=rand(1,100);
}

function imprime_score()
{
	echo"puntaje: ".$_SESSION['score']."<br>";
}

function imprime_random()
{
	echo "random: ".$_SESSION['variable']."<br>";
}

function imprime_intentos()
{
	echo "Intentos: ".$_SESSION['prueba']."<br>";
	if($_SESSION['prueba']==0)
	{
		$_SESSION['prueba']=5;
	}
}

function incrementa_intentos()
{
		$_SESSION['intentos']++;
		//PARA MOSTRARLO EN PANTALLA
		$_SESSION['prueba']--;
		if($_SESSION['intentos']==5)
	{
		$_SESSION['intentos']=0;
		echo "Termino el juego <br>";
		echo "Tu puntaje final fue de: ".$_SESSION['score']."<br> <br>";
		inicializando_score();
	}
}

function obtiene_diferencia_absoluta()
{
$absoluto=abs($_SESSION['variable']-$_GET['numero']);
return $absoluto;
}



function evalua_numero_ingresado()
{
	$resta=obtiene_diferencia_absoluta();
	if($resta<5)
	{
		echo "caliente <br>";
	}
	else
	{
	if($resta<20)
	{
		echo "tibio <br>";
	}
	else {
	echo "frio <br>";
	}
	}
}

?>
</body>
</html>