<?php echo $view['form']->errors($field) ?>
<ul class="fields"> 
  <?php foreach ($field->getVisibleFields() as $child): ?>
  <li>
    <div class="label"><?php echo $view['form']->label($child) ?></div>
    <div class="field"><?php echo $view['form']->render($child) ?></div>
		<div class=""><?php echo $view['form']->errors($child) ?></div>
  </li>
  <?php endforeach; ?>
</ul>

<?php echo $view['form']->hidden($field) ?>
