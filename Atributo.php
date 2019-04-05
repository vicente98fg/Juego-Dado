<?php
/**
 * Atributo
 */
class Atributo
{
  private $v;
  private $f;
  private $d;
  private $a;

  function __construct()
  {
  }

  public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "juego_dado");
    if ($this->conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }

  public function diceRoll(){
    $v = 20;
    $f = rand(1, 6);
    $d = rand(1, 6);
    $a = rand(1, 6);
    echo "<div id='lacaja'>";
    echo "<div id='dicef'><div class='content'>$f</div></div>";
    echo "<div id='diced'><div class='content'>$d</div></div>";
    echo "<div id='dicea'><div class='content'>$a</div></div>";
    echo "</div>";

    /*$consulta="INSERT INTO `atributos`(`id`, `v`, `f`, `d`, `a`) VALUES ('','$v','$f','$d','$a')";
    $this->conexion->query($consulta);*/

  }

  /*if(array_key_exists('reroll',$_POST)){
    diceRoll();
  }

  public function crearAtributos(){
    $v = 20;
    $consulta="INSERT INTO `atributos`(`id`, `v`, `f`, `d`, `a`) VALUES ('','$v','$f','$d','$a')";
  }*/

  public function listarAtributos(){
    $consulta="SELECT * FROM `atributos` ORDER BY `id` DESC LIMIT 1";
    $resultado = $this->conexion->query($consulta);
    return $resultado;
  }
}