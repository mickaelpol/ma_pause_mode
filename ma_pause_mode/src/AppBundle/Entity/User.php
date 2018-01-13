<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="usr_user")  
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="usr_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var int
     *
     * @ORM\Column(name="usr_siret", type="integer", unique=true)
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_pseudo", type="string", length=255, unique=true)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_pc", type="string", length=255, nullable=true)
     */
    private $pc;

    /**
     * One User has Many Articles.
     * @ORM\OneToMany(targetEntity="Article", mappedBy="user", orphanRemoval=true)
     */
    private $articles;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_phone_number", type="string", length=30, nullable=true)
     */
    private $phoneNumber;
    
    /**
     * @var string
     *
     * @ORM\Column(name="usr_entreprise", type="string", length=255)
     */
    private $entreprise;
    
    /**
     * @var string
     *
     * @ORM\Column(name="usr_site_web", type="string", length=255, nullable=true)
     */
    private $siteWeb;
    
    /**
     * @var string
     *
     * @ORM\Column(name="usr_lien_site_web", type="string", length=255, nullable=true)
     */
    private $lienSiteWeb;



    public function __construct()
    {
        $this->siteWeb = "Site Web Indisponible (Placer votre site web ici)";
        $this->phoneNumber  = "Téléphone Indisponible";
        
    }
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }


    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;
        
        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set pc
     *
     * @param string $pc
     *
     * @return User
     */
    public function setPc($pc)
    {
        $this->pc = $pc;
        
        return $this;
    }

    /**
     * Get pc
     *
     * @return string
     */
    public function getPc()
    {
        return $this->pc;
    }

    /**
     * Set siret
     *
     * @param integer $siret
     *
     * @return User
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return integer
     */
    public function getSiret()
    {
        return $this->siret;
    }


    /**
     * Add article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return User
     */
    public function addArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \AppBundle\Entity\Article $article
     */
    public function removeArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        if(empty($phoneNumber)){
            $this->phoneNumber = "Téléphone indisponible";
        } else {
            $this->phoneNumber = $phoneNumber;
        }
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     *
     * @return User
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     *
     * @return User
     */
    public function setSiteWeb($siteWeb)
    {
        if(empty($siteWeb)){
            $this->siteWeb = "Site indisponible";
        } else {
            $this->siteWeb = $siteWeb;
        }
        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }
    

    /**
     * Set lienSiteWeb
     *
     * @param string $lienSiteWeb
     *
     * @return User
     */
    public function setLienSiteWeb($lienSiteWeb)
    {
        $this->lienSiteWeb = $lienSiteWeb;

        return $this;
    }

    /**
     * Get lienSiteWeb
     *
     * @return string
     */
    public function getLienSiteWeb()
    {
        return $this->lienSiteWeb;
    }
}
