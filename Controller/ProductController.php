<?php

namespace Application\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function listAction()
    {
        return $this->render('ShopBundle:Product:list.php');
    }
}
