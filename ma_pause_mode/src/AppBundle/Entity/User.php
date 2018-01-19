<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraint as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity
 * @ORM\Table(name="usr_user")
 * @UniqueEntity(fields={"pseudo"}, message="ce pseudo est déjà utilisée.")
 * @UniqueEntity(fields={"siret"}, message="ce n° de siret est déjà utilisée.")
 * @UniqueEntity(fields={"facebook"}, message="ce lien facebook est déjà utilisée.")
 * @UniqueEntity(fields={"instagram"}, message="ce lien instagram est déjà utilisée.")
 * @UniqueEntity(fields={"twitter"}, message="ce lien twitter est déjà utilisée.")
 * @UniqueEntity(fields={"pinterest"}, message="ce lien pinterest est déjà utilisée.")
 * @UniqueEntity(fields={"google"}, message="ce lien google est déjà utilisée.")
 * @Vich\Uploadable 
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
     * 
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
    
    /**
     * @var string
     *
     * @ORM\Column(name="usr_image_profil", type="string", length=255, nullable=true)
     */
    private $imageProfil;

    /**
     * @var string
     *
     * @Vich\UploadableField(mapping="imageProfils", fileNameProperty="imageProfil")
     * @var File
     */
    private $imageProfilFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_facebook", type="string", length=255, nullable=true, unique=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_instagram", type="string", length=255, nullable=true, unique=true)
     */
    private $instagram;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_twitter", type="string", length=255, nullable=true, unique=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_pinterest", type="string", length=255, nullable=true, unique=true)
     */
    private $pinterest;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_google", type="string", length=255, nullable=true, unique=true)
     */
    private $google;

    



    public function __construct()
    {
        parent::__construct();
        $this->enabled = false;
        $this->setEnabled(false);
        $this->siteWeb = "Site Web Indisponible (Placer votre site web ici)";
        $this->phoneNumber  = "Téléphone Indisponible";
        $this->lienSiteWeb = "Lien du Site Web Indisponible (Placer votre site web ici)";
        
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

    /**
     * Set imageProfil
     *
     * @param string $imageProfil
     *
     * @return User
     */
    public function setImageProfil($imageProfil)
    {
        $this->imageProfil = $imageProfil;

        return $this;

    }

    /**
     * Get imageProfil
     *
     * @return string
     */
    public function getImageProfil()
    {
        return $this->imageProfil;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setImageProfilFile(File $imageProfil = null)
    {
        $this->imageProfilFile = $imageProfil;

        if ($imageProfil) {
           // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageProfilFile()
    {
        return $this->imageProfilFile;
    }
    
    

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return User
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set instagram
     *
     * @param string $instagram
     *
     * @return User
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get instagram
     *
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return User
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set pinterest
     *
     * @param string $pinterest
     *
     * @return User
     */
    public function setPinterest($pinterest)
    {
        $this->pinterest = $pinterest;

        return $this;
    }

    /**
     * Get pinterest
     *
     * @return string
     */
    public function getPinterest()
    {
        return $this->pinterest;
    }

    /**
     * Set google
     *
     * @param string $google
     *
     * @return User
     */
    public function setGoogle($google)
    {
        $this->google = $google;

        return $this;
    }

    /**
     * Get google
     *
     * @return string
     */
    public function getGoogle()
    {
        return $this->google;
    }
}
