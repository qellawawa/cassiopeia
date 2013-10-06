<?php
// src/Cassio/EvalBundle/Controller/DefaultController.php
namespace Cassio\EvalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cassio\EvalBundle\Entity\SubirSol;
use Cassio\EvalBundle\Entity\Problema;

use Symfony\Component\HttpFoundation\Request;

use Cassio\EvalBundle\Controller\Ejecutor;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit')
            ->getForm();

        return $this->render('CassioEvalBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    private function listaProblemas()
    {
        /*$repository = $this->getDoctrine()
          ->getRepository('CassioEvalBundle:Problema');
        $problemas = $repository->findAll();
        //var_dump($problemas);
        */
        //muestra solo los problemas con test cases
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT DISTINCT p.id, p.titulo
            FROM CassioEvalBundle:Problema p, CassioEvalBundle:TestCase t
            WHERE t.id_problema=p.id'
        );
        $problemas = $query->getResult();
        //var_dump($problemas);

        $lista_prob = array();
        foreach ($problemas as $problema)
        {
          $lista_prob[$problema['id']] = $problema['titulo'];
        }
        return $lista_prob;
    }

    public function subirAction(Request $request)
    {
        $subirsol = new SubirSol();

        $form = $this->createFormBuilder($subirsol)
            ->add('file')
            ->add('lenguaje', 'choice', array ('choices' => array('c' => 'Lenguaje C', 'cpp' => 'Lenguaje C++')))
            ->add('problema', 'choice', array ('choices' => $this->listaProblemas()))
            ->add('enviar', 'submit')
            ->getForm();
        
        $form->handleRequest($request);
      
        if ($form->isValid()) {
          $subirsol->upload();

          //echo ."<br>";
          $ejecutor = new Ejecutor($subirsol->getLenguaje(), $subirsol->getAbsolutePath());
          if($ejecutor->compilar() == 0)
          {
            //$salida = $ejecutor->ejecutar("3");
            $repository = $this->getDoctrine()
              ->getRepository('CassioEvalBundle:TestCase');

            $respuesta = "Puntaje: ".$ejecutor->obtenerPuntaje($subirsol->getProblema(), $repository);
          }
          else
          {
            $respuesta = "Error de ejecución";
          }
          $response = new Response();

          $response->setContent('<html><body><h1>'.$respuesta.'</h1></body></html>');
          $response->setStatusCode(200);
          $response->headers->set('Content-Type', 'text/html');

          // prints the HTTP headers followed by the content
          $response->send();
        }

        return $this->render('CassioEvalBundle:Default:subir.html.twig', array(
            'form' => $form->createView(),
        ));
    }
  public function uploadAction(Request $request)
  {
    $document = new Document();
    $form = $this->createFormBuilder($document)
        ->add('name')
        ->add('file')
        ->add('enviar', 'submit')
        ->getForm();

    $form->handleRequest($request);

    if ($form->isValid()) {
        #$em = $this->getDoctrine()->getManager();
        
        $document->upload();

        #$em->persist($document);
        #$em->flush();

        #return $this->redirect($this->generateUrl(...));
    }

    return $this->render('CassioEvalBundle:Default:upload.html.twig', array('form' => $form->createView()));
  }
  public function showTCAction(Request $request)
  {
    $testcase = $this->getDoctrine()
        ->getRepository('CassioEvalBundle:TestCase')
        //->find($id);
        ->find("1");

    if (!$testcase) {
        throw $this->createNotFoundException(
            'No test case found for id '.$id
        );
    }

    echo "Entrada: ".$testcase->getEntrada()."<br>";
    echo "Salida : ".$testcase->getSalida()."<br>";
  }

  public function subirProblemaAction(Request $request)
  {
    $repository = $this->getDoctrine()
      ->getRepository('CassioEvalBundle:Usuario');
    $usuarios = $repository->findAll();

    $lista_usuarios = array();
    foreach ($usuarios as $usuario)
    {
      $lista_usuarios[$usuario->getId()] = $usuario->getNombreCompleto();
    }
    $problema = new Problema();
    $form = $this->createFormBuilder($problema)
            ->add('id_usuario', 'choice', array ('choices' => $lista_usuarios, 'label' => 'Usuario'))
            ->add('titulo', 'text', array('label' => "Título"))
            ->add('descripcion', 'textarea', array('label' => "Descripción"))
            ->add('file')
            ->add('enviar', 'submit')
            ->getForm();


    $form->handleRequest($request);

    if ($form->isValid()) {
      $problema->upload();
      $em = $this->getDoctrine()->getManager();
      $em->persist($problema);
      $em->flush();
    }

    return $this->render('CassioEvalBundle:Default:subir.html.twig', array('form' => $form->createView()));
  }
}


