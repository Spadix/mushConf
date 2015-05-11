<?php

include 'models/basemodel.php';

function getRoomName($id)
{
	if($id != null)
	{
		$query = 'SELECT name FROM rooms WHERE id='.$id;
		$result = ExQuery($query, true);
		
		if($result != null)
		{
			echo mysql_fetch_row($result)[0];
		}
	}
}
asds
function getTypeValue($name, $type)
{
	if($name != null)
	{
		$query = "SELECT typePosition FROM typesparse WHERE name='$name'";
		$result = ExQuery($query, true);
		
		if($result != null)
		{
			$position = mysql_fetch_row($result)[0];
			if($type[$position] != null)
			{
				return $type[$position];
			}
		}
	}
	return '0';
}

function generateVisibleType($value)
{
	switch($value)
	{
		case '1':
			return 'visible';
			break;
			
		case '2':
			return 'hidden';
			break;
	}
	return 'collapse';
}

function getRoomType($id)
{
	if($id != null)
	{
		$query = 'SELECT type FROM rooms WHERE id='.$id;
		$result = ExQuery($query, true);
		
		if($result != null)
		{
			return mysql_fetch_row($result)[0];
		}
	}
}


?>