<link rel="stylesheet" type="text/css" href="styles/information.css">

<ul class="menu-main">
  <li><a href="index.php?view=index">Главная</a></li>
  <li><a href="index.php?view=services">Услуги</a></li>
  <li><a href="index.php?view=catalog">Работы учеников</a></li>
  <li><a href="index.php?view=information" class="current">Информация</a></li>
  <li><a href="index.php?view=feedback">Обратная связь</a></li>
</ul>

<br>
<div id="information">

<? foreach ($information as $item) : ?>
    
<div>
    <br>
        <?php echo $item['description_short']?>       
    <br></br>
    <img src="images/<?php echo $item['image']?>" style="width: 45%">
    <br></br>
    <button>
      <a href="index.php?view=inf_item&id=<?php echo $item['id']?>">Показать полностью</a>
    </button>
</div>
<hr>
    
<?endforeach;?>

</div>