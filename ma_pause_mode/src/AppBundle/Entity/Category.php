<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="cat_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="cat_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_man", type="string", length=255, unique=true)
     */
    private $man;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_women", type="string", length=255, unique=true)
     */
    private $women;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_child", type="string", length=255, unique=true)
     */
    private $child;


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
     * Set man
     *
     * @param string $man
     *
     * @return Category
     */
    public function setMan($man)
    {
        $this->man = $man;

        return $this;
    }

    /**
     * Get man
     *
     * @return string
     */
    public function getMan()
    {
        return $this->man;
    }

    /**
     * Set women
     *
     * @param string $women
     *
     * @return Category
     */
    public function setWomen($women)
    {
        $this->women = $women;

        return $this;
    }

    /**
     * Get women
     *
     * @return string
     */
    public function getWomen()
    {
        return $this->women;
    }

    /**
     * Set child
     *
     * @param string $child
     *
     * @return Category
     */
    public function setChild($child)
    {
        $this->child = $child;

        return $this;
    }

    /**
     * Get child
     *
     * @return string
     */
    public function getChild()
    {
        return $this->child;
    }
}

