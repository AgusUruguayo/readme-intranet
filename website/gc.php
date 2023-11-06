<?php
include "classes/Database.php";
include "classes/User.php";
include "classes/AuditLogs.php";
include "classes/Time.php";
include "classes/Discord.php";
include "classes/Messages.php";
// Recibir el numero de la cuenta 
$numero = $_GET['numero'];
?>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	if (empty($numero)) {
		echo 'No se ha recibido el numero de la cuenta';
	} else {
		// Si recibe el numero de la cuenta, mostrar la imagen
		echo '<img src="https://static.gamersclub.com.br/players/avatar/' . $numero . '/' . $numero . '_full.jpg" alt="">';
	}
	?>
</body>

</html>