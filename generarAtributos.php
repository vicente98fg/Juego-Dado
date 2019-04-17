<?php

require_once('Atributo.php');

$consulta = new Atributo();
$consulta->conectar();
$consulta->diceRoll();
$consulta->divDiceRoll();
$consulta->changeAtributes();
$resultado = $consulta->listarAtributos();  

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" media="screen" href="estiloscss.css" />
</head>
<body>
  

<table>
  <tr>
    <td><b>ID</b></td>
    <td><b>Atributo 1</b></td>
    <td><b>Atributo 2</b></td>
    <td><b>Atributo 3</b></td>
    <td><b>Atributo 4</b></td>
  </tr>


<?php
  foreach ($resultado as $atributo) {
    echo "<tr>";
    echo "<td><p align='center'>".$atributo['id']."</p></td>";
    echo "<td><p align='center'>".$atributo['v']."</p></td>";
    echo "<td><p align='center'>".$atributo['f']."</p></td>";
    echo "<td><p align='center'>".$atributo['d']."</p></td>";
    echo "<td><p align='center'>".$atributo['a']."</p></td>";
    echo "</tr>";
  }
  

?>


<form action="index.php">
  <input type="submit" name="reroll" id="reroll" value="Volver">
</form>
<form action=".php">
  <input type="submit" name="reroll" id="reroll" value="Pirarse de aqui">
</form>
<form action="ajustarAtributos.php">
  <input type="submit" name="reroll" id="reroll" value="Ajustar">
</form>

</body>
</html>