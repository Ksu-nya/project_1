<link rel="stylesheet" type="text/css" href="styles/galery.css">

<ul class="menu-main">
  <li><a href="index.php?view=index">Главная</a></li>
  <li><a href="index.php?view=services">Услуги</a></li>
  <li><a href="index.php?view=catalog" class="current">Работы учеников</a></li>
  <li><a href="index.php?view=information">Информация</a></li>
  <li><a href="index.php?view=feedback">Обратная связь</a></li>
</ul>

<?  $counter = 1;
    foreach ($images as $image) : ?>
    
<input type="checkbox" id="pic-<?php echo $counter?>"/>
<label for="pic-<?php echo $counter?>" class="lightbox"><img src="images/<?php echo $image['image']?>"/></label>
<? $counter++;
    endforeach;?>
 
<div class="grid">
 <?  
    $counter = 1;
    $images = get_catalog();
    foreach ($images as $image) : ?>
 <label for="pic-<?php echo $counter?>" class="grid-item"><img src="images/<?php echo $image['image']?>"/></label>

<? $counter++;
    endforeach;?>
</div>