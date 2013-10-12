<?php
// src/Cassio/EvalBundle/Entity/TestCase.php
namespace Cassio\EvalBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="TestCase")
 * @ORM\HasLifecycleCallbacks
 */
class TestCase
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(type="integer")
   */
  protected $id_problema;

  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $id_in;
  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $id_out;

  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $titulo;
  
  /**
  * @ORM\Column(type="integer")
  */
  protected $puntaje;
  
  /**
   * Get id
   *
   * @return integer 
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * Set id_problema
   *
   * @param integer $idProblema
   * @return TestCase
   */
  public function setIdProblema($idProblema)
  {
      $this->id_problema = $idProblema;
  
      return $this;
  }

  /**
   * Get id_problema
   *
   * @return integer 
   */
  public function getIdProblema()
  {
      return $this->id_problema;
  }
  
   /**
   * Set id_in
   *
   * @param integer $idIn
   * @return TestCase
   */
  public function setIdIn($id_in)
  {
      $this->$id_in = $id_in;
  
      return $this;
  }

  /**
   * Get id_in
   *
   * @return integer 
   */
  public function getIdIn()
  {
      return $this->id_in;
  }
   /**
   * Set id_out
   *
   * @param integer $idOut
   * @return TestCase
   */
  public function setIdOut($id_out)
  {
      $this->id_out = $id_out;
  
      return $this;
  }

  /**
   * Get id_out
   *
   * @return integer 
   */
  public function getIdOut()
  {
      return $this->id_out;
  }

  /**
   * Set titulo
   *
   * @param string $titulo
   * @return TestCase
   */
  public function setTitulo($titulo)
  {
      $this->titulo = $titulo;
  
      return $this;
  }

  /**
   * Get puntaje
   *
   * @return string 
   */
  public function getTitulo()
  {
      return $this->titulo;
  }  
  public function setpuntaje($puntaje)
  {
      $this->puntaje= $puntaje;
  
      return $this;
  }

  /**
   * Get puntaje
   *
   * @return string 
   */
  public function getpuntaje()
  {
      return $this->puntaje;
  }  
  
}