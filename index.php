<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php
$ip = $_SERVER['REMOTE_ADDR'];

if (isset($ip)){
	echo 'Ваш IP адрес - '. $ip;
}
?>
<p>Более подробную инфомацию о вашем IP можно глянуть <a href="https://thehost.ua/domains/whois/<?php echo
	$ip?>">ТУТ</a></p>

</body>
</html>

