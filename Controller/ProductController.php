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
			if ('POST' === $this->get('request')->getMethod()) {
				$requestProduct = $this->get('request')->request->get('product');
				$product = new Product();
				$product->setName($requestProduct['name']);
				$validation = $this->container->getValidatorService()->validate($product);
				$validation = 0;
				if(count($validation) === 0){
					var_dump($product);
					//return $this->redirect($this->generateUrl('blog_post'
				}else{
					var_dump('Hello');
					var_dump($product);
				}
				
			}
			return $this->render('ShopBundle:Product:create.php');
		}

		public function newAction(){
			$product = new Product();
			$form = new Form('product', $product, $this->get('validator'));
			$form->add(new TextField('name'));
			return $this->render('ShopBundle:Product:new.php', array('form' => $form));
		}
}
