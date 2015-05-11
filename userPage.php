<html>

<head>	
<meta charset='utf-8'>
<link rel="stylesheet" type="text/css" href="style/background_style.css">
<link rel="stylesheet" type="text/css" href="style/userPageStyle.css">

<?php

include 'view/notification.php';

?>

</head>

<body>	

	<div class="notificationBar"> 
		<div class="content">
			<?php 
				GetLast();
			?>
		</div>
	</div>

	<div class="mainPanel">

		<div class="rightBar">

			<div class="userInfoBar">
				<div class="content">
					<img src="images/girl.png" width="150" height="150" alt="avatar">
				</div>
			</div>

			<div class="userPanel">
				<div class="content">
					<div class="ModulesContent">
						<div class="content">
							Content
						</div>
					</div>
					<div class="listOfModules">
						<div class="content">
							Чат
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="roomlistbackground">

			<div class="content">
				<div class="roomslist">
					<div class="roomnavigatepanel">
						<a style="padding:12px; margin:6px; text-decoration: none; color:white" click="" href="">Сегодня</a>
						<a style="padding:12px; margin:6px; text-decoration: none; color:white" click="" href="">Сейчас</a>
						<a style="padding:12px; margin:6px; text-decoration: none; color:white" click="" href="">Открыты для заявок</a>
					</div>
					<div>
						<div class="content">
							<table width="100%">
								<tr>
									<td>
										<div>
											<div class="roomicon">Т</div>
										</div>
									</td>

									<td>
										<table align="left" width="100%">
											<caption>Тестовая конференция</caption>
											<tr>
												<td>Начало: </td>
												<td><b>asdad</b></td>
											</tr>
											<tr>
												<td>Конец: </td>
												<td><b>ertet</b></td>
											</tr>
											<tr>
												<td>Тип: </td>
												<td>asdasd</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
 						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

