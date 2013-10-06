<?php
namespace Cassio\EvalBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Cassio\EvalBundle\Entity\TestCase;

class SubirTc extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
        $tc = new TestCase();
        $repository = $this->getDoctrine()
          ->getRepository('CassioEvalBundle:Problema');
        $problemas = $repository->findAll();
        $lista_prob = array();
        foreach ($problemas as $problema){
          $lista_prob[$problema->getId()] = $problema->getTitulo();
        }  
        $form = $this->createFormBuilder($tc)
            ->add('id_problema', 'choice', array ('choices' => $lista_prob))
            ->add('titulo', 'text')    
            ->add('entrada', 'textarea')
            ->add('salida', 'textarea')
            ->add('guardar', 'submit');
        $form->handleRequest($request);
        if ($form->isValid()) {
            if(!is_null($tc->getIdProblema()))
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($tc);
                $em->flush();
            }
        }
        
        
  }

    public function getName() {
        return 'SubirTc';
    }
}