<?php
function get_conexion(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "juego";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
return $conn;
}

function get_elements($sql){
	$conn = get_conexion();
	$result = $conn->query($sql) or die(mysqli_error($conn));
	$arreglo = array();
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $arreglo[] = $row;
   		}
	}
	$conn->close();
	return $arreglo;
}

function make_insert($sql){
$conn = get_conexion();
if ($conn->query($sql) === TRUE) {
    echo "Nueva Pregunta Creada con Exito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

function make_update($sql){
$conn = get_conexion();
if ($conn->query($sql) === TRUE) {
    echo "Pregunta Actualizada con Exito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}