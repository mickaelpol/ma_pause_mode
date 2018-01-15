<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="sec_section")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SectionRepository")
 */
class Section
{
    /**
     * @var int
     *
     * @ORM\Column(name="sec_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_hot_now", type="string", length=255, unique=true)
     */
    private $hotNow;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_mode", type="string", length=255, unique=true)
     */
    private $mode;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_tendance", type="string", length=255, unique=true)
     */
    private $tendance;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_createur", type="string", length=255, unique=true)
     */
    private $createur;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_propos", type="string", length=255, unique=true)
     */
    private $propos;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_press", type="string", length=255, unique=true)
     */
    private $press;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_voyage", type="string", length=255, unique=true)
     */
    private $voyage;

    /**
     * One Section has Many Articles
     * @ORM\OneToMany(targetEntity="Article", mappedBy="section")
     */
    private $articles;


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
     * Set hotNow
     *
     * @param string $hotNow
     *
     * @return Section
     */
    public function setHotNow($hotNow)
    {
        $this->hotNow = $hotNow;

        return $this;
    }

    /**
     * Get hotNow
     *
     * @return string
     */
    public function getHotNow()
    {
        return $this->hotNow;
    }

    /**
     * Set mode
     *
     * @param string $mode
     *
     * @return Section
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set tendance
     *
     * @param string $tendance
     *
     * @return Section
     */
    public function setTendance($tendance)
    {
        $this->tendance = $tendance;

        return $this;
    }

    /**
     * Get tendance
     *
     * @return string
     */
    public function getTendance()
    {
        return $this->tendance;
    }

    /**
     * Set createur
     *
     * @param string $createur
     *
     * @return Section
     */
    public function setCreateur($createur)
    {
        $this->createur = $createur;

        return $this;
    }

    /**
     * Get createur
     *
     * @return string
     */
    public function getCreateur()
    {
        return $this->createur;
    }

    /**
     * Set propos
     *
     * @param string $propos
     *
     * @return Section
     */
    public function setPropos($propos)
    {
        $this->propos = $propos;

        return $this;
    }

    /**
     * Get propos
     *
     * @return string
     */
    public function getPropos()
    {
        return $this->propos;
    }

    /**
     * Set press
     *
     * @param string $press
     *
     * @return Section
     */
    public function setPress($press)
    {
        $this->press = $press;

        return $this;
    }

    /**
     * Get press
     *
     * @return string
     */
    public function getPress()
    {
        return $this->press;
    }

    /**
     * Set voyage
     *
     * @param string $voyage
     *
     * @return Section
     */
    public function setVoyage($voyage)
    {
        $this->voyage = $voyage;

        return $this;
    }

    /**
     * Get voyage
     *
     * @return string
     */
    public function getVoyage()
    {
        return $this->voyage;
    }
}

