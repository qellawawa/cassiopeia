<?php
// src/Cassio/EvalBundle/Entity/TestCase.php
namespace Cassio\EvalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="TestCase")
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
  protected $titulo;

   /**
   * @ORM\Column(type="string", length=300)
   */
  protected $entrada;

   /**
   * @ORM\Column(type="string", length=300)
   */
  protected $salida;

   

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
   * Get titulo
   *
   * @return string 
   */
  public function getTitulo()
  {
      return $this->titulo;
  }

  /**
   * Set entrada
   *
   * @param string $entrada
   * @return TestCase
   */
  public function setEntrada($entrada)
  {
      $this->entrada = $entrada;
  
      return $this;
  }

  /**
   * Get entrada
   *
   * @return string 
   */
  public function getEntrada()
  {
      return $this->entrada;
  }

  /**
   * Set salida
   *
   * @param string $salida
   * @return TestCase
   */
  public function setSalida($salida)
  {
      $this->salida = $salida;
  
      return $this;
  }

  /**
   * Get salida
   *
   * @return string 
   */
  public function getSalida()
  {
      return $this->salida;
  }
}
