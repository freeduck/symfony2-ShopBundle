<?php

namespace Application\ShopBundle\Entity;

/**
 * Application\ShopBundle\Entity\Orderline
 */
class Orderline
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Application\ShopBundle\Entity\Product
     */
    private $product;

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
     * Set product
     *
     * @param Application\ShopBundle\Entity\Product $product
     */
    public function setProduct(\Application\ShopBundle\Entity\Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get product
     *
     * @return Application\ShopBundle\Entity\Product $product
     */
    public function getProduct()
    {
        return $this->product;
    }
}