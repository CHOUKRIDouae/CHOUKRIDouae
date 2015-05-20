<?php
namespace MyApp\TodoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Tache
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Assert\Length(min=3)
     */    
    private $titre;

    /**
     * @ORM\Column(type="string",length=500)
     */    
    private $description;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */    
    private $dateTache;

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
     * Set titre
     *
     * @param string $titre
     * @return Tache
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Tache
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateTache
     *
     * @param \DateTime $dateTache
     * @return Tache
     */
    public function setDateTache($dateTache)
    {
        $this->dateTache = $dateTache;

        return $this;
    }

    /**
     * Get dateTache
     *
     * @return \DateTime 
     */
    public function getDateTache()
    {
        return $this->dateTache;
    }
}
