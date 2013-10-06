<?php
// src/Cassio/EvalBundle/Entity/TestCase.php
namespace Cassio\EvalBundle\Entity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
  protected $titulo;
  
   /**
   * @Assert\File(maxSize="2000000")
   */
  private $file_in;
   /**
   * @Assert\File(maxSize="2000000")
   */
  private $file_out;

  public $path;
  
  private $temp;

  public function getPath()
  {
      return $this->path;
  }
  public function setPath($path)
  {
      $this->path = $path;
  }  
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
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
  */
  public function upload_out()
  {
      // the file property can be empty if the field is not required
      //echo "|".$this->getFile()."|<br>";
      //var_dump($this->getFile());
      if ($this->getFileOut() === NULL) {
          echo "return";
          return;
      }

      // use the original file name here but you should
      // sanitize it at least to avoid any security issues

      // move takes the target directory and then the
      // target filename to move to
      $this->getFileOut()->move($this->getUploadRootDir(), $this->path);
      // set the path property to the filename where you've saved the file
      // check if we have an old image
      if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
      }
      $this->file_out = null;
      
  }
  public function upload_in()
  {
      // the file property can be empty if the field is not required
      //echo "|".$this->getFile()."|<br>";
      //var_dump($this->getFile());
      if ($this->getFileIn() === NULL) {
          echo "return";
          return;
      }

      // use the original file name here but you should
      // sanitize it at least to avoid any security issues

      // move takes the target directory and then the
      // target filename to move to
      $this->getFileIn()->move($this->getUploadRootDir(), $this->path);
      // set the path property to the filename where you've saved the file
      // check if we have an old image
      if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
      }
      $this->file_in = null;
      
  }
  
  
  protected function getUploadRootDir()
  {
      // the absolute directory path where uploaded
      // documents should be saved
      return __DIR__.'/../../../../web/'.$this->getUploadDir();
  }
  public function getFileIn()
  {
      return $this->file_in;
  }

  /**
   * Sets file.
   *
   * @param UploadedFile $file
   */
  //public function setFile(File $file = null)
  public function setFileIn(UploadedFile $file_in = null)
  {
      $this->file_in = $file_in;
      // check if we have an old image path
      if (isset($this->path)) {
         // store the old name to delete after the update
          $this->temp = $this->path;
          $this->path = null;
      } else {
            $this->path = 'initial';
      }
      
  }
  /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
  public function preUploadIn()
  {
        if (null !== $this->getFileIn()) {
            // haz lo que quieras para generar un nombre único
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename.'.'.$this->getFileIn()->guessExtension();
        }
  }
  /**
     * @ORM\PostRemove()
     */
  public function removeUploadIn()
  {
        if ($file_in = $this->getAbsolutePath()) {
            unlink($file_in);
        }
  }
  
  protected function getUploadDir()
  {
      // get rid of the __DIR__ so it doesn't screw up
      // when displaying uploaded doc/image in the view.
      return 'uploads/testcase';
  }
  public function getAbsolutePath()
  {
    return null === $this->path
        ? null
        : $this->getUploadRootDir().'/'.$this->path;
  }
  
}