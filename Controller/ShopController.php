<?php

namespace Application\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShopController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShopBundle:Shop:index.php');
    }
}
