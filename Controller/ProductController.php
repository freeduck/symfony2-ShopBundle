<?php



namespace Application\ShopBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Application\ShopBundle\Entity\Product;


class ProductController extends Controller
{
	public function listAction()
	{
		return $this->render('ShopBundle:Product:list.php');
	}



	public function newAction(){
		$this->entityManager = $this->get('doctrine.orm.entity_manager');
		$errors = array();
		$this->modelArray = array();
		$product = new Product();
		if ('POST' === $this->get('request')->getMethod()) {
			$requestProduct = $this->get('request')->request->get('product');
			$this->modelArray['snapshot'] = $requestProduct;
			$product->setName($requestProduct['name']);
			$validator = $this->container->get('validator');
			$violations = $validator->validate($product);
			foreach($violations as $violation){
				$errors[$violation->getPropertyPath()] = $violation->getMessage();
			}
			if(count($errors) == 0){
				$this->entityManager->persist($product);
				$this->entityManager->flush();
			}
		}
		$categoryRepository = $this->entityManager->getRepository('ShopBundle:Category');
		$categories = $categoryRepository->findAll();
		$this->modelArray['product'] = $product;
		$this->modelArray['errors'] = $errors;
		$this->modelArray['categories'] = $product;
		$this->modelArray['validator'] = $this->get('validator');
		return $this->render('ShopBundle:Product:new.php', $this->modelArray);
	}
}
