<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/estilos.css"/>
<title>Horarios de clase</title>
</head>
<body>



<header>
<div class="container">
<div class="page-header">
<div class="row">
<div class="col-lg-12">
<h1 align="center">Horarios de Clase</h1>
</div>
</div>
</div>
</div>
</header>
<br>
<div class="container">
<div class="main row">
<div class="article col-lg-12">
<h3 align="justify"> Horarios </h3>

<table class="table table-bordered  table-responsive table-hover " align="center">
<tr>
<th class="text-center">Clave</th>
<th class="text-center">Asignatura</th>
<th class="text-center">Profesor</th>
<th class="text-center">Grupo</th>
<th class="text-center">Lunes</th>
<th class="text-center">Martes</th>
<th class="text-center">Miercoles</th>
<th class="text-center">Jueves</th>
<th class="text-center">Viernes</th>
<th class="text-center">Salon</th>
<th class="text-center">Cupo</th>
</tr>

<?php
foreach ($horarios as $horario) {
	echo "<tr>";

	echo "<th>";
	echo htmlentities( $horario["clave"] );
	echo "</th>";

	echo "<th>";
	echo htmlentities( $horario["asignatura"] );
	echo "</th>";

	echo "<th>";
	echo htmlentities( $horario["nombre"] );
	echo "</th>";

	echo "<th>";
	echo htmlentities( $horario["grupo"] );
	echo "</th>";

	echo "<th>";
	echo htmlentities( $horario["lunes"] );
	echo "</th>";

	echo "<th>";
	echo htmlentities( $horario["martes"] );
	echo "</th>";

	echo "<th>";
	echo htmlentities( $horario["miercoles"] );
	echo "</th>";

	echo "<th>";
	echo htmlentities( $horario["jueves"] );
	echo "</th>";

	echo "<th>";
	echo htmlentities( $horario["viernes"] );
	echo "</th>";

	echo "<th>";
	echo htmlentities( $horario["salon"] );
	echo "</th>";

	echo "<th>";
	echo htmlentities( $horario["cupo"] );
	echo "</th>";

	echo "</tr>";
}
?>


</table>





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
