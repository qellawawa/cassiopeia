<?php
namespace Cassio\EvalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Cassio\EvalBundle\Entity\TestCase;

class testCaseController extends Controller{
    
 public function tcAction(Request $request)
    {
        $tc = new TestCase();
        $repository = $this->getDoctrine()
          ->getRepository('CassioEvalBundle:Problema');
        $problemas = $repository->findAll();
        $lista_prob = array();
        foreach ($problemas as $problema){
          $lista_prob[$problema->getId()] = $problema->getTitulo();
        }
        // $formulario = new 
        
        $form = $this->createFormBuilder($tc)
            ->add('id_problema', 'choice', array ('choices' => $lista_prob))
            ->add('titulo', 'text')    
            ->add('entrada', 'textarea')
            ->add('salida', 'textarea')
            ->add('guardar', 'submit')
            ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            if(!is_null($tc->getIdProblema()))
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($tc);
                $em->flush();
            }
        }
       return $this->render('CassioEvalBundle:Default:subir.html.twig', array('form' => $form->createView(),));
    }
   
//   
//    public function showAction()
//    {
//         $tc = $this->getDoctrine()
//        ->getRepository('TestCase')
//        ->find($id);
//
//    if (!$tc) {
//        throw $this->createNotFoundException(
//            'No product found for id '.$id
//        );
//    }
//       return $this->render('cassiopeiaoneBundle:Default:tc.html.twig');
//    }
//
//    protected function _editAction(Post $post)
//     {
//        $em = $this->get('doctrine.orm.default_entity_manager');
//        $factory = $this->get('form.factory');
//        $form = $factory->create(new PostFormType());
//        $form->setData($post);
//
//        if ($this->get('request')->getMethod() === 'POST') {
//        $form->bindRequest($this->get('request'));
//
//            if ($form->isValid()) {
//                $em->persist($post);
//                $em->flush();
//                return new RedirectResponse($this->generateUrl('hello_index'));
//            }
//        }
//        return $this->render('MyHelloBundle:Hello:edit.html.twig', array(
//        'form' => $form->createView(),
//        ));
//      }
}