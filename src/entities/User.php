<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity @ORM\Table(name="user")
 **/
class user{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private  $id;
    /** @ORM\Column(type="string") **/
    private $nom;
    /** @ORM\Column(type="string") **/
    private $prenom;
    /** @ORM\Column(type="string") **/
    private $email;
    /** @ORM\Column(type="string") **/
    private $password;
    /** @ORM\Column(type="string") **/
    private $etat;
    /**
     * @ORM\OneToMany(targetEntity="Lieu", mappedBy="user")
     */

    public function __construct()
    {

    }

    public function getid()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->ref=$id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom=$nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom=$prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function getPassWord()
    {
        return $this->password;
    }
    public function setPassWord($password)
    {
        $this->password=$password;
    }

    public function getEtat()
    {
        return $this->etat;
    }
    public function setEtat($etat)
    {
        $this->etat=$etat;
    }
}
?>