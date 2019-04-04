<?php

require_once('Atributo.php');

$consulta = new Atributo();
$consulta->conectar();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="estiloscss.css" />
</head>
<body>


<h1>Tira los dados</h1>

<form action="generarAtributos.php">
  <input type="submit" name="reroll" id="reroll" value="Generar Atributos">
</form>

<br>



</body>
</html>