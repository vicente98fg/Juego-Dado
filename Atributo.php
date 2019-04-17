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
  private $conexion;

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

    /*$consulta="INSERT INTO `atributos`(`id`, `v`, `f`, `d`, `a`) VALUES ('','$v','$f','$d','$a')";
    $this->conexion->query($consulta);*/
  }

  public function divDiceRoll(){
    $consulta = "SELECT * FROM `atributos` ORDER BY `id` DESC LIMIT 1";
    $resultado = $this->conexion->query($consulta);

    foreach ($resultado as $atributo) {
      echo "<div id='lacaja'>";
      echo "<div id='dicef'><div class='content'>".$atributo['f']."</div></div>";
      echo "<div id='diced'><div class='content'>".$atributo['d']."</div></div>";
      echo "<div id='dicea'><div class='content'>".$atributo['a']."</div></div>";
      echo "</div>";
    }
  }

  public function divDiceRollChange(){
    $consulta = "SELECT * FROM `atributos` ORDER BY `id` DESC LIMIT 1";
    $resultado = $this->conexion->query($consulta);

    foreach ($resultado as $atributo) {
      echo "<div id='lacaja'>";
      echo "<form action='index.php'>";
      echo "<input type='submit' name='left' id='arrow-left-principal'>";
      echo "<div id='dicef'><div class='content'>".$atributo['f']."</div></div>";
      echo "<input type='submit' name='right' id='arrow-right'>";
      echo "<input type='submit' name='left' id='arrow-left'>";
      echo "<div id='diced'><div class='content'>".$atributo['d']."</div></div>";
      echo "<input type='submit' name='right' id='arrow-right'>";
      echo "<input type='submit' name='left' id='arrow-left'>";
      echo "<div id='dicea'><div class='content'>".$atributo['a']."</div></div>";
      echo "<input type='submit' name='right' id='arrow-right'>";
      echo "</form>";
      echo "</div>";
    }
  }

  public function changeAtributes(){
    $this->conexion->set_charset("utf8");

    $info = $this->conexion->query("SELECT * FROM `atributos` ORDER BY `id` DESC LIMIT 1");
    $resultado = $info->fetch_array(MYSQLI_ASSOC);

    $f = $resultado['f'];
    $d = $resultado['d'];
    $a = $resultado['a'];

    $media = $f + $d + $a;

    if ($media < 9) {
      echo "2 puntos para ajustar los atributos ";
    } else if ($media >= 12) {
      echo "0 puntos para ajustar ";
    } else {
      echo "1 punto para ajustar ";
    }

    echo "PHP ES UN POCO BASTANTE MENOS BARUSA";
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

