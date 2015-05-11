<?php

include 'models/basemodel.php';

function GetLastFiveNotification()
{
	//SELECT * FROM [MyTable] WHERE [id] > (SELECT MAX([id]) - 5 FROM [MyTable])
	$query = "SELECT message, time FROM notification WHERE type = 0 && id > (SELECT MAX(id) - 5 FROM notification)";
	$result = ExQuery($query, true);
	
	if($result != null)
	{
		return $result;
	}
	return null;
}

?>