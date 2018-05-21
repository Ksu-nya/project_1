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
	<br>
	<h2><?php echo $inf_item['title']?></h2>
<?php echo $inf_item['description']?>
<br></br>
<img src="images/<?php echo $inf_item['image']?>" style="width: 45%">
<br></br>

<br></br>
    <button>
      <a href="index.php?view=information">Назад</a>
    </button>
    <br></br>
</div>