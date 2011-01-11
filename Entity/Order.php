<?php

namespace Application\ShopBundle\Entity;

/**
 * Application\ShopBundle\Entity\Order
 */
class Order
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Application\ShopBundle\Entity\Orderline
     */
    private $orderlines;

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
     * Add orderlines
     *
     * @param Application\ShopBundle\Entity\Orderline $orderlines
     */
    public function addOrderlines(\Application\ShopBundle\Entity\Orderline $orderlines)
    {
        $this->orderlines[] = $orderlines;
    }

    /**
     * Get orderlines
     *
     * @return Doctrine\Common\Collections\Collection $orderlines
     */
    public function getOrderlines()
    {
        return $this->orderlines;
    }
}