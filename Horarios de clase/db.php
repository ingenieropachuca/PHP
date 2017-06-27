<?php
function get_conexion(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "horarios";
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