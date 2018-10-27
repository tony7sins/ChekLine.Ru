window.onload = function() { //zagružaem vsjo soderžanie karty posle obnovlenija stranicy
  // Функция ymaps.ready() будет вызвана, когда
  // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
  ymaps.ready(init);
    var myMap,
        myPlacemark;

  function init(){
      // Создание карты.
      myMap = new ymaps.Map("map",
      {
        // Координаты центра карты.
        // Порядок по умолчнию: «широта, долгота».
        // Чтобы не определять координаты центра карты вручную,
        // воспользуйтесь инструментом Определение координат.
        center: [55.937774149624474,37.77248894047535],
        // Уровень масштабирования. Допустимые значения:
        // от 0 (весь мир) до 19.
        zoom: 16
      });

      myMap.controls
        .remove('geolocationControl')
        .remove('rulerControl')
        .remove('routeButton')
        .remove('fullscreenControl')
        .remove('zoomControl')
        .remove('Button')
        .remove('typeSelector')
        .remove('trafficControl')
        .remove('searchControl');

      myMap.behaviors.disable([
        // Отключаем некоторые включенные по умолчанию поведения:
        // scrollZoom - выключим масштабирование колесом мыши
        // - drag - перемещение карты при нажатой левой кнопки мыши;
        // - rightMouseButtonMagnifier - увеличение области, выделенной
        // правой кнопкой мыши.
          'dblClickZoom',
          'drag',
          'leftMouseButtonMagnifier',
          'rightMouseButtonMagnifier',
          'multiTouch',
          'ruler',
          'routeEditor',
          'scrollZoom'
        ]);

      myPin = new ymaps.GeoObjectCollection({}, {
        preset: 'islands#greenDotIcon', // zelenaja metka
        draggable: false // i ih nel'zja peremeščat'
      });
      myPlacemark = new ymaps.Placemark([55.937774149624474,37.77248894047535], {

          // Балун откроется при клике по метке.
          //balloonContent: 'Тентакли',
          balloonContentHeader: '<span class="map__span" id="map__span">Тентакли</span>',
          balloonContentBody: 'Самый скользкие на свете',
          balloonContentFooter: 'Готовились на козьем молоке',
          // Хинт показывается при наведении мышкой на иконку метки.
          hintContent: 'Завод ЧекЛайн-тентакль'
      }, {
      }
    );
      myPin.add(myPlacemark);
      // После того как метка была создана, ее
      // можно добавить на карту.
      myMap.geoObjects.add(myPin);

  }
}
