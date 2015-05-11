<?php

include 'viewmodel/notifcationmodel.php';

function GenerateNotificationItem($message, $date, $hour)
{

	echo '<div class="notificationItem"><div class="content">';
	echo $date;
	echo ' <b>';
	echo $hour;
	echo '</b> - ';
	echo $message;
	echo '</div></div>';
}

function GetLast()
{
	//return 5 last
	$notification = GetLastFiveNotification();
	$notification->data_seek(0);
	while($row = $notification->fetch_assoc())
	{
		GenerateNotificationItem($row["message"], $row["time"], "13:00");
	}
}

function GetAllTime($time)
{

}

?>