<?php

require_once('Atributo.php');

$consulta = new Atributo();
$consulta->conectar();
$consulta->divDiceRollChange();
$consulta->changeAtributes();


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" media="screen" href="estiloscss2.css" />
</head>
<body>

<p>IF $puntos > 0 => se puede clickar el boton verde, si no cursor: not-allowed;</p>
<p>Rojo = Menos</p>
<p>Verde = Más</p>



</body>
</html>