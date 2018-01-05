<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Region
 *
 * @ORM\Table(name="reg_region")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegionRepository")
 */
class Region
{
    /**
     * @var int
     *
     * @ORM\Column(name="reg_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_departement_code", type="string", length=255)
     */
    private $departementCode;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_departement_name", type="string", length=255)
     */
    private $departementName;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_region_code", type="string", length=255)
     */
    private $regionCode;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_region_name", type="string", length=255)
     */
    private $regionName;


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
     * Set departementCode
     *
     * @param string $departementCode
     *
     * @return Region
     */
    public function setDepartementCode($departementCode)
    {
        $this->departementCode = $departementCode;

        return $this;
    }

    /**
     * Get departementCode
     *
     * @return string
     */
    public function getDepartementCode()
    {
        return $this->departementCode;
    }

    /**
     * Set departementName
     *
     * @param string $departementName
     *
     * @return Region
     */
    public function setDepartementName($departementName)
    {
        $this->departementName = $departementName;

        return $this;
    }

    /**
     * Get departementName
     *
     * @return string
     */
    public function getDepartementName()
    {
        return $this->departementName;
    }

    /**
     * Set regionCode
     *
     * @param string $regionCode
     *
     * @return Region
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    /**
     * Get regionCode
     *
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * Set regionName
     *
     * @param string $regionName
     *
     * @return Region
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;

        return $this;
    }

    /**
     * Get regionName
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName;
    }
}

