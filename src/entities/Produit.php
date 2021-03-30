<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity  @ORM\Table(name="produit")
 **/
class produit{
    /** @ORM\id
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue 
     */
    private  $ref;
      /** @ORM\Column(type="string") **/
    private $nom;
   /** 
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue 
     */
    private $qtStock;
/**
     * Many produit have one user. This is the owning side.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="produits")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;

    public function __construct()
    {

    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id=$id;
    }
    public function getRef()
    {
        return $this->ref;
    }
    public function setRef($ref)
    {
        $this->ref=$ref;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom=$nom;
    }

    public function getQtStock()
    {
        return $this->qtStock;
    }
    public function setQtStock($qtStock)
    {
        $this->qtStock=$qtStock;
    }

    public function getUserId()
    {
        return $this->UserId;
    }
    public function setUserId($userId)
    {
        $this->userId=$userId;
    }

    
}
?>