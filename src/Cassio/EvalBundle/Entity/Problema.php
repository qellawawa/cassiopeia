<?php
// src/Cassio/EvalBundle/Entity/Problema.php
namespace Cassio\EvalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Problema")
 */
class Problema
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
  protected $id_usuario;


  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $titulo;

  
  /**
   * @ORM\Column(type="string", length=1000)
   */
  protected $descripcion;

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
   * Set id_usuario
   *
   * @param integer $idUsuario
   * @return Problema
   */
  public function setIdUsuario($idUsuario)
  {
      $this->id_usuario = $idUsuario;
  
      return $this;
  }

  /**
   * Get id_usuario
   *
   * @return integer 
   */
  public function getIdUsuario()
  {
      return $this->id_usuario;
  }

  /**
   * Set descripcion
   *
   * @param string $descripcion
   * @return Problema
   */
  public function setDescripcion($descripcion)
  {
      $this->descripcion = $descripcion;
  
      return $this;
  }

  /**
   * Get descripcion
   *
   * @return string 
   */
  public function getDescripcion()
  {
      return $this->descripcion;
  }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Problema
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
}
