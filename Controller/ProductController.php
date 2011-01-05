<?php

namespace Application\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function listAction()
    {
        return $this->render('ShopBundle:Product:list.php');
    }

		public function createAction($name){
			$product = new Product();
		}

		public function newAction(){
			return $this->render('ShopBundle:Product:new.php');
		}
}
