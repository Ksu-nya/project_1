<link rel="stylesheet" type="text/css" href="styles/service.css">

<ul class="menu-main">
  <li><a href="index.php?view=index">Главная</a></li>
  <li><a href="index.php?view=services" class="current">Услуги</a></li>
  <li><a href="index.php?view=catalog">Работы учеников</a></li>
  <li><a href="index.php?view=information">Информация</a></li>
  <li><a href="index.php?view=feedback">Обратная связь</a></li>
</ul>
    
<? foreach ($services as $service) : ?>
    
<div class="service_block" style="background-image: url(images/<?php echo $service['image'] ?>);">
    <strong>КУРС "<?php echo $service['title'] ?>"</strong>
    <br></br>
    <?php echo $service['description'] ?>
    <br></br>
    <strong>Продолжительность курса - <?php echo $service['length'] ?> месяца</strong>
    <br></br>
     <button>
          <a href="index.php?view=feedback">Записаться</a>
     </button>
</div>
    
<?endforeach;?>