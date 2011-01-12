New Product
<form action="<?php echo $view['router']->generate('shop_product_new') ?>" method="POST">
<formfield>
<ul class="fields">
<li>
	<div class="label"><label for="name">Name:</label></div>
	<div class="field"><input type="text" id="product_name" name="product[name]"/></div>
	<?php if(isset($errors['name'])):?>
	<div><?php echo $errors['name'] ?></div>
	<?php endif;?>
</li>
<li><div class="field"><input type="submit" value="Create"/></div></li>
</ul>
</formfield>
</form>