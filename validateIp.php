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
<!-- Пример для передачи правильного адреса http://localhost:3000/validateIp.php?ip=127.0.0.1-->
<?php
$globalIP = @$_GET['ip'];
$validateIP = @filter_var($globalIP, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
$novaledateIP = @htmlspecialchars($_GET['ip']);

if (isset($globalIP) & $validateIP == (bool) true){
	echo "Вы ввели валидный IP <h1 style='color: green'>$validateIP</h1>";
}elseif(isset($globalIP) & $validateIP == (bool) false){
	echo "Вы ввели <h1 style='color: red'>$novaledateIP</h1> а это НЕ валидный IP!!!";
}else{
	echo 'Вы не ввели данные вообще';
}
?>
</body>
</html>
