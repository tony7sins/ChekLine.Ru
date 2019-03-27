<?php
$title = "ЧекЛайн";
$showcase = "main";
$pageHeader = "Контакты";
$pageDesc = "Свяжитесь с нами...";
?>

<?php require_once VIEW . "/layouts/_pageHeader.php"; ?>

<section class="contacts" id="contacts">
  <div class="container">
    <div class="row">
      <div class="grid_elem" id="cont__tel">
        <h3>Телефон</h3>
        <h4><a href="tel: +74994994174">+7 (499) 499-4174</a></h4>
      </div>
      <div class="grid_elem" id="cont__mail">
      	<h3>Email</h3>
      	<h4><a href="mailto: smy@chekline.ru">smy@chekline.ru</a></h4>
      </div>
			<div class="grid_elem" id="cont__adress">
				<h3>Адрес</h3>
        <h4>г. Мытищи, ул. Угольная, дом № 6, помещение № 23</h4>
      </div>
			<div class="grid_elem" id="cont__map">
				<h3>Карта</h3>
         <div id="map" class="myMap" style="width: auto; height: 400px"></div>
      </div>
			<div class="grid_elem" id="cont__reqCor">
        <h3>Реквизиты организации</h3>
        <p>
          <span>Название: </span>
          ООО «ЧекЛайн» <br>
					<span>Юридический адрес: </span>
          141013, г. Мытищи, ул. Угольная, дом № 6, помещение № 23 <br>
					<!-- <i>Почтовый адрес: </i>
          180007, г.Псков , а/я 933 , тел.8(8112)56-44-96 <br> -->
        </p>
				<div>
          <div>
            <span>ИНН: </span>
            5029231970 <br>
            <span>КПП: </span>
            502901001 <br>
          </div>
          <div>
  					<span>ОГРН: </span>
            1185029013465<br>
            <span>ОКПО: </span>
            31578307<br>
          </div>
        </div>
      </div>
      <div class="grid_elem" id="cont__reqBank">
        <h3>Банковские реквизиты</h3>
        <p>
          <span>Расчетный счёт: </span>
          40702810001090000083<br>
          <span>БИК: </span>
          044525685<br>
          <span>Банк: </span>
					ПАО «СДМ-банк»<br>
					<span>Корреспондентский счёт: </span>
          30101810845250000685<br>
				</p>
      </div>
    </div>
  </div>
</section>

<!-- <div class="table-responsive">
	<table class="table table-hover">
		<caption>Сотрудники</caption>
		<thead>
			<tr class="info">
				<th>Должность</th>
				<th>ФИО</th>
				<th>Задачи</th>
				<th>Телефон</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>Князь</th>
				<th>Игорь</th>
				<th>Управление и подавление</th>
				<th>42</th>
				<th>rybchik@kurwa.eb</th>
			</tr>
			<tr>
				<th>Супруга</th>
				<th>Романовская</th>
				<th>Управление и подавление Игорем</th>
				<th>O_o</th>
				<th>romanovskaja@romanovskaja.ro</th>
			</tr>
		</tbody>
	</table>
</div> -->
<!--
<button class="btn btn-link" data-toggle="collapse" data-target="#person">Sotrudnik</button>
<div class="collapse" id="person">
		telefon
</div> -->
