<?php
namespace Cassio\EvalBundle\Tests\Controller;

use Cassio\EvalBundle\Controller\Ejecutor;

class EjecutorTest extends \PHPUnit_Framework_TestCase
{
  public function testConstructor()
  {
    $ejecutor = new Ejecutor("c", "codigo.c");
    $comando = $ejecutor->getComandoPCompilar();
    $this->assertEquals("gcc codigo.c -o codigo.c.bin", $comando);

    $ejecutor = new Ejecutor("cpp", "codigo.cpp");
    $comando = $ejecutor->getComandoPCompilar();
    echo $comando;
    $this->assertEquals("g++ codigo.cpp -o codigo.cpp.bin", $comando);
  }

  public function testCompilar()
  {
    //prueba si existen los compiladores
    $this->assertFileExists('/usr/bin/gcc');
    $this->assertFileExists('/usr/bin/g++');

    $ejecutor = new Ejecutor("c", "/srv/http/cassiopeia/src/Cassio/EvalBundle/Tests/Controller/suma.c");
    $compilador = $ejecutor->compilar();
    $this->assertFileExists('/srv/http/cassiopeia/src/Cassio/EvalBundle/Tests/Controller/suma.c.bin');
  }

  public function testEjecutar()
  {
    $path = "/srv/http/cassiopeia/src/Cassio/EvalBundle/Tests/Controller";
    //para c
    $ejecutor = new Ejecutor("c", $path."/suma.c");
    $compilador = $ejecutor->compilar();
    $salida = $ejecutor->ejecutar("2 2");
    $this->assertEquals("2+2=4", $salida);

    //para c++
    $ejecutor = new Ejecutor("cpp", $path."/suma.cpp");
    $compilador = $ejecutor->compilar();
    $salida = $ejecutor->ejecutar("2 2");
    $this->assertEquals("2+2=4", $salida);
    shell_exec("rm ".$path."/*.bin");
  }
}
