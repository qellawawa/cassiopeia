<?php
// src/Cassio/EvalBundle/Entity/Problema.php
namespace Cassio\EvalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="Problema")
 */
class Problema //extends AbstractType
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
   * @ORM\Column(type="string", length=256)
   */
  protected $path_solucion;

  /**
   * @Assert\File(maxSize="6000000")
   */
  private $file;

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

    //public function buildForm(FormBuilderInterface $builder, array $options)
    //{
    //  $builder->add('id_usuario','text')
    //    ->add('titulo', 'text')
    //    ->add('descripcion', 'textarea');
    //}
    //public function getName()
    //{
    //  return 'problema';
    //}

  public function upload()
  {
      // the file property can be empty if the field is not required
      if (null === $this->getFile()) {
          return;
      }

      // use the original file name here but you should
      // sanitize it at least to avoid any security issues

      // move takes the target directory and then the
      // target filename to move to
      $this->getFile()->move(
          $this->getUploadRootDir(),
          $this->getFile()->getClientOriginalName()
      );

      // set the path property to the filename where you've saved the file
      $this->path_solucion = $this->getFile()->getClientOriginalName();

      // clean up the file property as you won't need it anymore
      $this->file = null;
  }
  protected function getUploadRootDir()
  {
      // the absolute directory path where uploaded
      // documents should be saved
      return __DIR__.'/../../../../web/'.$this->getUploadDir();
  }
  public function getFile()
  {
      return $this->file;
  }
  public function setFile($file)
  {
      $this->file = $file;
  }
  protected function getUploadDir()
  {
      // get rid of the __DIR__ so it doesn't screw up
      // when displaying uploaded doc/image in the view.
      return 'uploads/soluciones';
  }
  public function getAbsolutePath()
  {
    return null === $this->path
        ? null
        : $this->getUploadRootDir().'/'.$this->path;
  }

}
