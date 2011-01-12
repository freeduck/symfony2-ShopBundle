<?php



namespace Application\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Application\ShopBundle\Entity\Product;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;

class ProductController extends Controller
{
	public function listAction()
	{
		return $this->render('ShopBundle:Product:list.php');
	}

	public function createAction(){
		return $this->render('ShopBundle:Product:create.php');
	}

	public function newAction(){
		$errors = array();
		if ('POST' === $this->get('request')->getMethod()) {
			$requestProduct = $this->get('request')->request->get('product');
			$product = new Product();
			$product->setName($requestProduct['name']);
			$validator = $this->container->get('validator');
			$violations = $validator->validate($product);
			foreach($violations as $violation){
				$errors[$violation->getPropertyPath()] = $violation->getMessage();
			}
			if(count($errors) == 0){
				$em = $this->get('doctrine.orm.entity_manager');
				$em->persist($product);
				$em->flush();
			}
		}
		return $this->render('ShopBundle:Product:new.php', array('errors' => $errors));
	}
}
