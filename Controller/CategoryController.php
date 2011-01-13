<?php



namespace Application\ShopBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Application\ShopBundle\Entity\Category;


class CategoryController extends Controller
{
	public function listAction()
	{
		return $this->render('ShopBundle:Category:list.php');
	}



	public function newAction(){
		$this->entityManager = $this->get('doctrine.orm.entity_manager');
		$errors = array();
		if ('POST' === $this->get('request')->getMethod()) {
			$requestCategory = $this->get('request')->request->get('category');
			$category = new Category();
			$category->setName($requestCategory['name']);
			$validator = $this->container->get('validator');
			$violations = $validator->validate($category);
			foreach($violations as $violation){
				$errors[$violation->getPropertyPath()] = $violation->getMessage();
			}
			if(count($errors) == 0){
				$this->entityManager->persist($category);
				$this->entityManager->flush();
			}
		}
		return $this->render('ShopBundle:Category:new.php', array('errors' => $errors));
	}
}
