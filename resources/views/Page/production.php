<?php
$title = "ЧекЛайн";
$showcase = "main";
$pageHeader = "Продукция";
$pageDesc = "Как всё работает...";
?>

<?php require_once VIEW . "/layouts/_pageHeader.php";?>
<!-- <ul>
  <input type="checkbox" id="menu" class="toggleMenu" name="toggle">
  <label for="menu" class="toggleMenu"><i class="fas fa-bars"></i>меню</label>
  <li><a class ="active link" href="/page/about"><i class="fas fa-user-tie"></i>о нас</a></li>
  <li><a class ="active link" href="/page/contacts"><i class="far fa-paper-plane"></i>контакты</a></li>
  <li><a class ="active link" href="/page/production"><i class="far fa-building"></i>продукция</a></li>
  <li><a class ="active link" href="#"><i class="fas fa-home"></i>домой</a>
    <ul>
      <li><a href="/">главная</a></li>

      <li><a href="tel: +74991391954">позвонить</a></li>
      <li><a href="mailto: makeev.o@mail.ru">написать</a></li>
    </ul>
  </li>
</ul> -->

<section class="container calc" style="min-height:500px; padding-top:30px;">

    <div class="container calc">
      <div class="row">

      <div class="col-md-6">
        <div id="calc">
          <div class="form-group">
            <label for="page-size">плотность бумаги</label>
            <select id="page-size" class="form-control" >
                <option selected>размер страницы</option>
            </select>
          </div>

          <div class="form-group">
            <label for="qnty">količestvo razvorotov</label>
            <input id="qnty" type="number" class="form-control" size="3" min="1" value="1">
          </div>

          <div class="form-group">
            <label for="cover">vid obložki</label>
            <select id="cover" class="form-control" >
                <option selected>размер страницы</option>
            </select>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <table>
          <thead>
            <th>наименование</th>
            <th>значение</th>
          </thead>

          <tbody>
            <tr>
              <td>размер страницы</td>
              <td class="page-size">-</td>
            </tr>
            <tr>
              <td>količestvo razvorotov</td>
              <td class="qnty">-</td>
            </tr>
            <tr>
              <td>cena obložki</td>
              <td class="cover">-</td>
            </tr>
            <tr>
              <td>cena na forzac</td>
              <td class="endpaper">-</td>
            </tr>
            <tr>
              <td>сумма</td>
              <td class="sum">-</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
</section>

<script>
  $(function(){

    var   selectSize,
          selectPrice,
          selectCover = 0,
          endPaper = 0,
          sum = 0,
          qnty = 1,
          pageSizes = {
            "20x20": {47: "Type One", 58: "Type Two"},
            "30x20": {147: "Type One", 158: "Type Two"},
            "40x20": {247: "Type One", 258: "Type Two"},
            "50x20": {347: "Type One", 358: "Type Two"},
            "60x20": {447: "Type One", 458: "Type Two"},
          },
          covers = {
            "20x20": {47: "Type One", 3: "Type Two"},
            "30x20": {12: "Type One", 11: "Type Two", 47: "Type One", 256: "Type Two"},
            "40x20": {23: "Type One", 23: "Type Two", 10: "Type One", 100: "Type Two"},
            "50x20": {34: "Type One", 23: "Type Two"},
            "60x20": {45: "Type One", 54: "Type Two", 100: "Type One", 256: "Type Two"},
          },
          endPapers = {
            "20x20": 47,
            "30x20": 43,
            "40x20": 45,
            "50x20": 56,
            "60x20": 57,
          }

    function insertPageSizes(){
      var html = '',
          size,
          price;
      for(size in pageSizes){
        for(price in pageSizes[size]){
          html += '<option data-size="' + size +'" data-price="'+ price +'">'+ size + ' - ' + pageSizes[size][price] + ' ' + price + ' rub.</option>';
        }
      }
      $('#page-size').append(html); //metod append - dobavljaet a ne zateraet elementy
    }
    function changeSize(){
      sum = selectCover = 0;
      qnty = 1;
      $('#qnty').val('1');

      selectSize = $('#page-size option').filter(':selected').data('size'); //krivo podključen OPTION (ne kak ja delaju v css)
      selectPrice = $('#page-size option').filter(':selected').data('price');

      // console.log(selectSize + ' - ' + selectPrice);
      insertCover();
      recalc();
    }
    function insertCover(){
      var html = '<option selected>Vid obložki</option>',
          price;
        for(price in covers[selectSize]){
          html += '<option data-price="' + price + '" value="">'+ covers[selectSize][price] + ' ' + price + 'RUB</option>';
        }
        $('#cover').html(html);
    }
    function changeQnty(){
      qnty = $('#qnty').val();
      if(qnty<1){
        qnty=1;
        $('#qnty').val('1');
      }
      recalc();
    }
    function changeCover(){
      selectCover = $('#cover option').filter(':selected').data('price');
      recalc();
    }

    function isNumeric(n){
      return !isNaN(parseFloat(n)) && isFinite(n);
    }//proverka na Čislo - vozvraščaet TRUE ili FALSE !!!
    function recalc(){
      selectPrice = isNumeric(selectPrice) ? selectPrice : 0;
      qnty = isNumeric(qnty) ? qnty : 0;
      selectCover = isNumeric(selectCover) ? selectCover : 0;
      endPaper = isNumeric(endPaper[selectSize]) ? endPaper[selectSize] : 0;
      sum = selectPrice * qnty + selectCover + endPaper;
      changeTable();
    }
    function changeTable() {
      $('.page-size').text(selectPrice + ' RUB');
      $('.qnty').text(qnty + ' RUB');
      $('.cover').text(selectCover + ' RUB');
      $('.endPaper').text(endPaper + ' RUB');
      $('.sum ').text(sum + ' RUB');
    }

    insertPageSizes();
    //pri obraščenii k #page-size my vizovem metod
    $('#page-size').change(function(){
      changeSize();
    });
    $('#qnty').change(function(){
      changeQnty();
    });
    $('#cover').change(function(){
      changeCover();
    });

  });
</script>



<!-- <script type="text/javascript">
function computeLoan(){
  var amount = document.getElementById('amount').value;
  var interst_rate = document.getElementById('interst_rate').value;
  var months = document.getElementById('months').value;
  var interest = (amount * (interst_rate * .1))/ months;
  var payment = ((amount / months)+interest).toFixed(2);
  payment = payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  document.getElementById('payment').innerHTML = "Monthly Payment = $" + payment;


  document.getElementById('interst_rate_val').innerHTML = interst_rate + "%";
}

</script>
JavaScript Monthly script
<p>Loan Amount: $<input type="number" id="amount" min="1" max="1000000" value="100" onchange="computeLoan()"></p>
<p>Interest Rate: <input style="width:400px; margin-left: 25px;" type="range" id="interst_rate" min="0" max="100" value="10" step=".1" onchange="computeLoan()"></p>
<span id="interst_rate_val">10%</span>
<p>Months: <input type="number" id="months" min="1" max="72" value="1" step="5" onchange="computeLoan()"></p>
<h2 id="payment">Monthly Payment = $10</h2>

<script  type="text/javascript">
function tipCalculate(slider,bill){
    var tip = document.getElementById('tip');
    var slideval = document.getElementById('slideval');
    var bill = document.getElementById(bill).value;
    var prcnt = slider * .01;
    tip.innerHTML = "$" + (bill * prcnt).toFixed(2);
    slideval.innerHTML = slider + "%";
}
</script>
<br>
<h2>Tip Calculation</h2>
Enter the bill amount for your meal:
$<input style="width:400px; margin-left: 25px;" type="text" id="bill" value="100"><br>
Tip Percantage:
<input style="width:400px; margin-left: 25px;" type="range" id="slider" min="0" max="100" value="15" step="1" onchange="tipCalculate(this.value,'bill')">
<span id="slideval">15%</span>
<h2>Tip to leave = <span id="tip">15$</span></h2> -->

<!--

<section class="container calc" style="min-height:500px; padding-top:30px;">
  <div class="row">
    <div class="col-md-6">
      <table>
        <thead>
          <th>наименование</th>
          <th>значение</th>
        </thead>

        <tbody>
          <tr>
            <td>размер страницы</td>
            <td class="depgth">-</td>
          </tr>
          <tr>
            <td>ширина страницы</td>
            <td class="length">-</td>
          </tr>
          <tr>
            <td>количество</td>
            <td class="qnty">-</td>
          </tr>
          <tr>
            <td>сумма</td>
            <td class="sum">-</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <div id="calc">
        <div class="form-group">
          <div class="dropdown" style="margin-top: 20px;z-index:9000;">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              ширина ленты
              <span class="caret"></span>
            </button>
            <ul id="page-size" class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Action</a></li>
            </ul>
          </div>
      </div>

        <div class="form-group">
          <label for="density">плотность бумаги</label>
          <select class="form-control" id="density">
            <option selected>плотность бумаги</option>
          </select>
        </div>
        <div class="form-group">
          <label for="width">ширина листа</label>
          <select class="form-control" id="width">
            <option selected>ширина листа</option>
          </select>
        </div>
        <div>
          <laber for="length">длина рулона</laber>
          <select class="form-control" id="length">
            <option selected>плотность бумаги</option>
          </select>
        </div>
        <div class="form-group">
          <label for="qnty">количество коробок</label>
          <input class="form-control" id="length" type="number" size="3" min="1">
        </div>
        <div>
          <laber for="test">длина рулона</laber>
          <ul class="form-control" id="test">
            <li selected>плотность бумаги</li>
            <li selected>плотность бумаги</li>
            <li selected>плотность бумаги</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(function(){
    var selectDensity,
          selectWidth,
          selectLength,
          cartonsQnty = 0,
          sum = 0,
          qnty = 1,
          paperWidth = {
            "57cm_x_17m":{
              "pcsInCrtn":280,
              "crtnsQnty":50
            },
            "57cm_x_19m":{
              "pcsInCrtn":240,
              "crtnsQnty":30
            },
            "57cm_x_21m":{
              "pcsInCrtn":240,
              "crtnsQnty":30
            },
            "57cm_x_27m":{
              "pcsInCrtn":192,
              "crtnsQnty":20
            },
            "80cm_x_50m":{
              "pcsInCrtn":72,
              "crtnsQnty":60
            }
          };

    function insertTapeSizes(){
      var html = '',
          size,
          size_= [
            "57cm_x_21m",
            "57cm_x_27m",
            "80cm_x_50m"],
          par,
          par1 = "crtnsQnty",
          par2 = "pcsInCrtn";

      for(size in paperWidth) {
        html += '<option data-size="' + size + '">' + size +' - '+ paperWidth[size] +'"</option>';
        // for(par in paperWidth[size]){
        //   console.log(paperWidth[size_[2]]);
        //}
      }
      $('#density').append(html);
    }

    insertTapeSizes();

  });
</script>-->
