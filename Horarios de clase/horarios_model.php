<?php  
require_once "db.php";
function get_horario(){
	$sql = " SELECT asignaturas.clave, asignaturas.asignatura, profesores.nombre, grupo.grupo, dias.lunes, dias.martes, dias.miercoles, dias.jueves, dias.viernes, salon.salon,salon.cupo FROM asignaturas INNER JOIN profesores ON asignaturas.grupo_idgrupo = profesores.grupo_idgrupo INNER JOIN grupo ON profesores.grupo_idgrupo = grupo.idgrupo INNER JOIN dias ON grupo.idgrupo = dias.grupo_idgrupo INNER JOIN salon ON dias.grupo_idgrupo = salon.grupo_idgrupo";
	$pacientes_array = get_elements($sql);
	return $pacientes_array;
}
?>