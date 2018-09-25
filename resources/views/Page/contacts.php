<?php
$title = "наши контакты";
$showcase = "main";
$pageHeader = "Связь с Нами";
$pageDesc = "ждём Вас...";

 require_once VIEW . "/layouts/_pageHeader.php";?>

<section class="contacts" id="contacts">
  <div class="container">
    <div class="row">
      <div class="grid_elem" id="cont__tel">
        <h3>Телефон</h3>
        <h4>+7 (499) 130-10-54</h4>
      </div>
      <div class="grid_elem" id="cont__mail">
      	<h3>Электронная почта</h3>
      	<h4>makeev.o@mail.ru</h4>
        <i role="separator" class="divider"></i>
      </div>
			<div class="grid_elem" id="cont__adress">
				<h3>Адрес</h3>
        <h4>Москвоская Обл., г. Мытищи, ул.Ленина 1а, стр.7</h4>
      </div>
			<div class="grid_elem" id="cont__map">
				<h3>Карта</h3>
         <div id="map" style="width: auto; height: 400px"></div>
      </div>
			<div class="grid_elem" id="cont__reqCor">
        <h3>Реквизиты организации</h3>
        <p>
          <i>Название: </i>
          ООО «ЧекЛайн» <br>
					<i>Юридический адрес: </i>
          141013, г. Мытищи, ул. Угольная, дом № 6, помещение № 23 <br>
					<!-- <i>Почтовый адрес: </i>
          180007, г.Псков , а/я 933 , тел.8(8112)56-44-96 <br> -->
					<i>ИНН: </i>
          5029231970 <br>
          <i>КПП: </i>
          502901001 <br>
					<i>ОГРН: </i>
          1185029013465<br>
          <i>ОКПО: </i>
          31578307<br>
        </p>
      </div>
      <div class="grid_elem" id="cont__reqBank">
        <h3>Банковские реквизиты</h3>
        <p>
          <i>Расчетный счёт: </i>
          40702810001090000083<br>
          <i>БИК: </i>
          044525685<br>
          <i>Банк: </i>
					ПАО «СДМ-банк»<br>
					<i>Корреспондетский счёт: </i>
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
