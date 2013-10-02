<?php
namespace Cassio\EvalBundle\Tests\Controller;
namespace Cassio\EvalBundle\Tests\Controller\testCaseControllerTest;
use Cassio\EvalBundle\Controller\testCaseController;
use Cassio\EvalBundle\Entity\TestCase;

class testCaseControllerTest extends \PHPUnit_Framework_TestCase
{
  public function testTcSubida()
  {
    $formData = array(
        'id' => '10',
        'id_problema' => '1',
        'titulo' => 'adsf',
        'entrada' => 'ewrw',
        'salida' => 'wer',
    );
    
    $model = new TestCase();
    $form = $this->factory->create($model);
    
    $tc = new testCaseController();
    $tc -> fromArray($formData);

    $form->submit($formData);
    $this->assertTrue($form->isSynchronized());
    $this->assertEquals($tc, $form->getData());
    
    //$view = $form->createView();
    //$children = $view->children;
    //foreach (array_keys($formData) as $key) {
      //    $this->assertArrayHasKey($key, $children);
    //}
  }
}
