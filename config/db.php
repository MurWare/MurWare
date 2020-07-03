<?php

	const HOST_IP 	= 'localhost';
	const HOST_USER = 'aurora';
	const HOST_PASS = 'NOBROOT9a451151316c4720124b33d3cc346b66d875c83cb228235aea6acdcd5711f55e68c9d66dbb2bdad04c98e53e51682bd01b96364919611aa34b3a2c46f3aa8d6dNEVZLOM';
	const HOST_NAME = 'aurora';

	@$db = mysqli_connect(HOST_IP, HOST_USER, HOST_PASS, HOST_NAME);

	if(!$db){echo 'Временные технические работы. Мы скоро будем online. Следите за новостями в группе - https://vk.com/aurorareborn'; exit();}

	mysqli_set_charset($db,'utf8');

	const FK_ID 	= '102341';
	const FK_SEC1 	= '8kqdwcts';
	const FK_SEC2 	= '8kqdwcts';

	const RECAPTCHA_1 = '6Lfle5wUAAAAABn-dk8NUNLQGuj4qsrCNRbQb8OE';
	const RECAPTCHA_2 = '6Lfle5wUAAAAACSYdf1ZYuu6PIkfOQnXgePOM5RR';
