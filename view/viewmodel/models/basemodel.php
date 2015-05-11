<?php

$mysqli = new mysqli('localhost', 'root', '1475369', 'mushrooms');

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

function ExQuery($query, $queryResult)
{
	$mysqli = new mysqli('localhost', 'root', '1475369', 'mushrooms');
	$result = $mysqli->query($query);

	return $result;
}

?>