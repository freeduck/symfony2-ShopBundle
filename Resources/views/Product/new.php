<?php
use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;
use Symfony\Component\Form\IntegerField;
$form = new Form('product', $product, $validator);
$form->add(new TextField('name'));
if(isset($snapshot)){
	$form->bind($snapshot);
}
?>
New Product
<form action="<?php echo $view['router']->generate('shop_product_new') ?>" method="POST">
	<formfield>
		<?php 
		echo $view['form']->render($form, array(), array(), 'ShopBundle:Form:field_group.php');
		?>
	</formfield>
</form>
