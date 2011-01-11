New Product
<form action="<?php echo $view['router']->generate('shop_product_create') ?>" method="POST">
<formfield>
<ul class="fields">
<li><div class="label"><label for="name">Name:</label></div><div class="field"><input type="text" id="product_name" name="product[name]"/></div></li>
<li><input type="submit" value="Create"/></li>
</ul>
</formfield>
</form>

	<?php echo $view['form']->render($form) ?>