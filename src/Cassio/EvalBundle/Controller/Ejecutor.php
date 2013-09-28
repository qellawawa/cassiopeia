<?php

namespace Cassio\EvalBundle\Controller;
//define("C", "1");
//define("CPP", "2");

class Ejecutor
{
  private $nombre_ejecutable;
  //private $path_codigo_fuente;
  private $comando_p_compilar;

  public function __construct($leng, $cod_fuente)
  {
    $this->nombre_ejecutable = $cod_fuente.'.bin';
    switch($leng)
    {
      case "c": 
        $this->comando_p_compilar = "gcc ".$cod_fuente." -o ".$this->nombre_ejecutable;
        break;
      case "cpp":
        $this->comando_p_compilar = "g++ ".$cod_fuente." -o ".$this->nombre_ejecutable;
        break;
    }
  }

  public function compilar()
  {
    $salida = shell_exec($this->comando_p_compilar);
    return $salida;
  }

  public function ejecutar($parametros_entrada)
  {
    $linea_ejecucion = $this->nombre_ejecutable.' '.$parametros_entrada;
    $salida = shell_exec($linea_ejecucion);
    
    echo $linea_ejecucion.'<br>';

    return $salida;
  }

  //corre test cases
  public function obtenerPuntaje($problema, $repository)
  {
    $puntaje = 0;
    $total_puntaje = 0;
    $test_cases = $repository->findBy(
      array('id_problema' => $problema)
    );
    foreach ($test_cases as $test_case){
      $salida = $this->ejecutar($test_case->getEntrada());
      if ($salida == $test_case->getSalida())
      {
        echo "Salida: ".$salida."<br>";
        $puntaje++;
      }
      $total_puntaje++;
    }
    return ($puntaje / $total_puntaje) * 100;
  }
}
?>
