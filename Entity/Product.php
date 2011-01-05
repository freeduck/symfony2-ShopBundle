<?php

namespace Application\ShopBundle\Entity;

/**
 * Application\ShopBundle\Entity\Product
 */
class Product
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var Application\ShopBundle\Entity\category
     */
    private $categories;

    /**
     * Add categories
     *
     * @param Application\ShopBundle\Entity\category $categories
     */
    public function addCategories(\Application\ShopBundle\Entity\category $categories)
    {
        $this->categories[] = $categories;
    }

    /**
     * Get categories
     *
     * @return Doctrine\Common\Collections\Collection $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }
}