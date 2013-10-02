<?php

namespace Cassio\EvalBundle\Controller;
//define("C", "1");
//define("CPP", "2");

class Ejecutor
{
  private $nombre_ejecutable;
  //private $path_codigo_fuente;
  private $comando_p_compilar;

  public function getComandoPCompilar()
  {
    return $this->comando_p_compilar;
  }

  public function getNombreEjecutable()
  {
    return $this->nombre_ejecutable;
  }

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
    //$salida = shell_exec($this->comando_p_compilar);
    exec($this->comando_p_compilar, $output, $return);
    return $return;
  }

  public function ejecutar($parametros_entrada)
  {
    $linea_ejecucion = $this->nombre_ejecutable.' '.$parametros_entrada;
    $salida = shell_exec($linea_ejecucion);
    
    //echo $linea_ejecucion.'<br>';

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
      //echo "Salida ejecucion: ".$salida."<br>";
      //echo "TC BD: ".$test_case->getSalida()."<br>";

      $Handle = fopen("error.log", 'w');
      fwrite($Handle, "Salida ejecucion:\n"); 
      fwrite($Handle, $salida);
      fwrite($Handle, "TC BD:\n"); 
      fwrite($Handle, $test_case->getSalida()); 
      fclose($Handle); 

      if ($salida == $test_case->getSalida())
      {
        $puntaje++;
      }
      $total_puntaje++;
    }
    return ($puntaje / $total_puntaje) * 100;
  }
}
?>
