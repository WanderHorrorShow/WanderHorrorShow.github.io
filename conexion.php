<?php
	define('SQL_HOST', 'localhost');
	define('SQL_DB','id19847497_wander');  // CAMBIALO POR EL DATO REAL
	define('USER', 'id19847497_wanders');  // CAMBIALO POR EL DATO REAL
	define('PASS','Su2=G5-aQ26d&o(&');  // CAMBIALO POR EL DATO REAL

	echo("<p>Conectando a la base de datos</p>");

	$bd=mysql_connect(SQL_HOST, USER, PASS);  
	if (!$bd) 	{
			echo ("Error conectando con el SERVIDOR: ".mysql_error());
			exit();
	}

	$sel=mysql_select_db(SQL_DB);
	if (!$sel)	{
			echo ("Error cargando la BASE DE DATOS: ".mysql_error());
			exit();
		}
?>