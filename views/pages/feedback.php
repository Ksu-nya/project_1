<style>
    label {float:left; padding-right:10px;}
    .field {clear:both; text-align:right; line-height:25px;}
    .main {float:center;}
    .center {
        background-color: rgba(0, 206, 209, 0.5);
        padding: 1em;
        margin:0 auto;
        width: 310px 
   }
   
</style>
<ul class="menu-main">
  <li><a href="index.php?view=index">Главная</a></li>
  <li><a href="index.php?view=services">Услуги</a></li>
  <li><a href="index.php?view=catalog">Работы учеников</a></li>
  <li><a href="index.php?view=information">Информация</a></li>
  <li><a href="index.php?view=feedback" class="current">Обратная связь</a></li>
</ul>
<br></br>
<div class="center">
    <div class="main">
        <form action="views/pages/handler.php" method="post">
        	<p class="field">
            <label>Фамилия</label>
            <input required type="text" name="surname">
          </p>
          <p class="field">
            <label>Имя</label>
            <input required type="text" name="name">
          </p>
           <p class="field">
            <label>Отчество</label>
            <input required type="text" name="patronymic">
          </p>
          <p class="field">
            <label>Email</label>
            <input required type="email" name="email">
          </p>
          <p class="field">
            <label>Телефон</label>
            <input required type="tel" name="phone">
          </p>
          <p class="field" >
          <input required type="checkbox" name="check" id="check" checked>
          <label for="check">согласие на обработку данных</label>
          </p>
          <p style="text-align: center">
            <input type="submit" name="add" value="Отправить" />
          </p>
        </form>
    </div>
</div>