<?php
$title = "ЧекЛайн";
$showcase = "main";
$pageHeader = "Продукция";
$pageDesc = "Как всё работает...";
?>

<?php require_once VIEW . "/layouts/_pageHeader.php";?>





<style type="text/css">

:root {
--color-primary: #263f78ba; /* #487df6 */
--color-second: #d3d8fb24;
--color-cold: whitesmoke;
--color-warning: #f62459;
--gradient-dark: linear-gradient(145deg, rgba(0,0,0,0), rgba(0,0,0,0.20));
--gradient-ligth: linear-gradient(45deg, rgba(255,255,255,0.35), rgba(255,255,255,0));
--block-height: 50px;
--font-sex: 'Poiret One', cursive;
}
  body > section > div > div.culculator {
    margin-top: 23px;
    display: flex;
    flex-wrap: wrap;
    font-family: var(--font-sex);
  }
    body > section > div > div.culculator > div {

      margin: 1em;
      flex-grow: 1;
      /* flex-basis: 300px; /*п perenos elementov na sledujuščuju stročku pri men'šej širine. Ranotaet tolko dlja elementov flex */ */
    }


      body > section.culcBlock > div.container > div.wrap.culculator > div > div > div.info-block {
        display: flex;
        justify-content: space-between;
        align-content: center;
        background-color: var(--color-primary);
        background-image: var(--gradient-ligth);
        border-radius: 5px;
        /* border: 1px solid var(--color-cold); */
        margin-bottom: 10px;
        letter-spacing: 1px;
        font-color: var(--color-cold);
      }

        .info-block:nth-child(n+1){

          min-height: var(--block-height);
          min-width: 280px;
        }

        .info-block > div.icon {
          align-self: center;
          height: 25px;
          width: 25px;
          margin-left: 13px;
          fill: var(--color-cold);
        }

        .info-block input{
          width: 80px;
          text-align: center;
          border-top-right-radius: 7px;
          border-bottom-right-radius: 7px;
          /* border: 2px outset var(--color-primary); */
        }

        .info-block output {

          background-color: var(--color-secondary);
          color: var(--color-cold);
          min-width: 100px;
          text-align: center;
          align-self: center;
        }

        .info-block > h4 {
          margin: auto auto auto 15px;
          width: 100%;
          font-size: 18px;
          color: var(--color-cold);
        }
        label.info-block__radius {
          margin: auto;
          display: flex;
          justify-content: center;
          align-items: center;
          color: var(--color-cold);

        }
          label.info-block__radius p{
            margin: auto 15px auto 0;
            font-weight: 300;
            flex-grow: 2;

          }
          label.info-block__radius input{
            margin: auto 5px auto 15px;
            font-size: 13px;
            width: auto;
          }

      .btn-group button {
        flex-grow: 1;
        background-color: #fff0;
        /* border: var(--color-cold) solid 0.5px; */
        color: var(--color-cold);
        /* flex-shrink: 1; */
      }
      .btn-group button:hover,
      .btn-group button:focus,
      .btn-group button:focus.active,
      .btn-default.active, .btn-default:active, .open>.dropdown-toggle.btn-default {
        color: var(--color-warning);
        height: calc(var(--block-height)-50px);
      }


@media screen and (max-width: 600px) {
  body > section > div > div.culculator {
    /* display: flex;
    justify-content: space-between; */
    flex-direction: column;
  }

}
@media screen and (max-width: 320px) {
  .info-block > h4,
  .info-block > p {
    font-size: 13px;
  }
}



</style>

<section class="culcBlock">
<div class="container">
  <div class="wrap culculator">
    <div class="col-sm-3 costCulc">
      <!-- width-div -->
      <div class="form-group widthCulc">
        <div class="info-block">
          <!-- width-input -->
          <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 24v-8h-24v8h24zm-22-6h2v2h1v-2h2v3h1v-3h2v2h1v-2h2v2h1v-2h2v3h1v-3h2v2h1v-2h2v4h-20v-4zm14-10h-8v4l-8-6 8-6v4h8v-4l8 6-8 6v-4z"/></svg>
          </div>

            <h4>Ширина ленты, мм</h4>


          <input id="widthInput" type="number" min="1" max="100" step=".5" value="57">
        </div>
        <!-- width-buttons -->
        <div class="info-block btn-group" id="widthButtons" name="widthButtons"  role="group" aria-label="lidthPaper">

          <!-- <button type="button" value="40" class="btn btn-default widthButton">40mm</button> -->
        </div>
      </div>
      <!-- length-div -->
      <div class="form-group lengthCulc" id="lengthCulc">
        <!-- length-input -->
        <div class="info-block">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 0h-8v24h8v-24zm-6 22v-2h2v-1h-2v-2h3v-1h-3v-2h2v-1h-2v-2h2v-1h-2v-2h3v-1h-3v-2h2v-1h-2v-2h4v20h-4zm-10-14v8h4l-6 8-6-8h4v-8h-4l6-8 6 8h-4z"/></svg>
          </div>
          <h4>Длина ленты, м</h4>
          <input type="number" min="1" max="100" step=".5" value="17">
        </div>
        <!-- length-buttons -->
        <div class="info-block btn-group"  id="lengthButtons" name="lengthButtons" role="group" aria-label="lengthPaper">
          <!-- <button type="button" value="17" class="btn btn-default lengthButton">17m</button> -->
        </div>
      </div>
      <!-- insideRadius-div -->
      <div class="form-group sleeveCulc">
        <div class="info-block">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 8c-2.762 0-5 2.239-5 5v2h10v-2c0-2.761-2.238-5-5-5zm-3 5c0-1.654 1.346-3 3-3s3 1.346 3 3h-6zm13 0c0-5.523-4.477-10-10-10s-10 4.477-10 10h-2v8h24v-8h-2zm0 6h-2v-2h-1v2h-2v-3h-1v3h-2v-2h-1v2h-2v-2h-1v2h-2v-3h-1v3h-2v-2h-1v2h-2v-4h2v-2c0-4.418 3.582-8 8-8s8 3.582 8 8v2h2v4z"/></svg>
          </div>
          <h4>Внутренний диаметр, мм</h4>
          <output>12</output>
        </div>
        <div class="info-block">
          <!-- <input class="info-block" type="range" min="11" max="25" step="1" value="11"> -->
          <label class="info-block__radius" for="r12"><input checked="checked" id="r12" name="radius" type="radio" value="12"><p> 12мм</p></label>
          <label class="info-block__radius" for="r18"><input id="r18" name="radius" type="radio" value="18"><p> 18мм</p></label>
          <label class="info-block__radius" for="r26"><input id="r26" name="radius" type="radio" value="26"><p> 26мм</p></label>
        </div>
      </div>

      <div class="form-group qntyCalc">
        <div class="info-block">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M17.677 16.879l-.343.195v-1.717l.343-.195v1.717zm2.823-3.324l-.342.195v1.717l.342-.196v-1.716zm3.5-7.602v11.507l-9.75 5.54-10.25-4.989v-11.507l9.767-5.504 10.233 4.953zm-11.846-1.757l7.022 3.2 1.7-.917-7.113-3.193-1.609.91zm.846 7.703l-7-3.24v8.19l7 3.148v-8.098zm3.021-2.809l-6.818-3.24-2.045 1.168 6.859 3.161 2.004-1.089zm5.979-.943l-2 1.078v2.786l-3 1.688v-2.856l-2 1.078v8.362l7-3.985v-8.151zm-4.907 7.348l-.349.199v1.713l.349-.195v-1.717zm1.405-.8l-.344.196v1.717l.344-.196v-1.717zm.574-.327l-.343.195v1.717l.343-.195v-1.717zm.584-.332l-.35.199v1.717l.35-.199v-1.717zm-16.656-4.036h-2v1h2v-1zm0 2h-3v1h3v-1zm0 2h-2v1h2v-1z"/></svg>
          </div>
          <h4>Количество коробок, шт.</h4>
          <input id="qnty" type="number" min="1" max="1000" step="1" value="1">
        </div>
      </div>
    </div>

    <div class="col-sm-3 resultCulc">
      <div class="wrap">
        <div class="info-block" id="pcDiametr">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4c-6.627 0-12 5.373-12 12v4h24v-4c0-6.627-5.373-12-12-12zm10 14h-2v-2h-1v2h-2v-3h-1v3h-2v-2h-1v2h-2v-2h-1v2h-2v-3h-1v3h-2v-2h-1v2h-2v-2c0-5.514 4.486-10 10-10s10 4.486 10 10v2zm-10-9c-3.17 0-5.845 2.109-6.706 5h13.412c-.861-2.891-3.536-5-6.706-5zm-2.986 3c.845-.632 1.888-1 2.986-1s2.141.368 2.986 1h-5.972z"/></svg>
          </div>
          <h4>Диаметр ролика</h4>
          <output id="diametr" name="diametr"></output>
        </div>
        <div class="info-block">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14.039 8.968l-3.961-3.968h1.968s.991-3.178-2.985-5c6.191.222 6.972 5 6.972 5h1.967l-3.961 3.968zm6.461 5.575l-.342.195v1.717l.342-.195v-1.717zm-.844.481l-.35.199v1.717l.35-.199v-1.717zm.906-10.024l-1.306 1.55 1.62.919-6.859 3.698-8.86-5.138 4.436-2.685c-.234-.5-.626-.989-1.313-1.338l-5.124 2.978-3.156 5.487 2 1.106v5.445l12.25 6.978 9.75-5.551v-11.508l-3.438-1.941zm-16.624 2.688l7.897 4.54-1.192 2.091-7.872-4.605 1.167-2.026zm9.062 13.298l-9-5.126v-3.112l7.377 4.319 1.623-2.845v6.764zm9-3.7l-7 3.985v-8.361l7-3.773v8.149zm-4.907-.802l-.349.199v1.713l.349-.195v-1.717zm.584-.333l-.343.195v1.717l.343-.195v-1.717zm1.395-.794l-.343.195v1.717l.343-.195v-1.717zm-.574.327l-.344.196v1.717l.344-.196v-1.717z"/></svg>
          </div>
          <h4>Количество в коробке</h4>
          <output id="crtnQnty"></output>
        </div>
        <div class="info-block">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 21.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm6.305-15l-3.432 12h-10.428l-3.777-9h-2.168l4.615 11h13.239l3.474-12h1.929l.743-2h-4.195zm-13.805-4c6.712 1.617 7 9 7 9h2l-4 4-4-4h2s.94-6.42-3-9z"/></svg>
          </div>
          <h4>Количество штук в рачёте</h4>
          <output id="totalQnty"></output>
        </div>
        <div class="info-block">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4 14.083c0-2.145-2.232-2.742-3.943-3.546-1.039-.54-.908-1.829.581-1.916.826-.05 1.675.195 2.443.465l.362-1.647c-.907-.276-1.719-.402-2.443-.421v-1.018h-1v1.067c-1.945.267-2.984 1.487-2.984 2.85 0 2.438 2.847 2.81 3.778 3.243 1.27.568 1.035 1.75-.114 2.011-.997.226-2.269-.168-3.225-.54l-.455 1.644c.894.462 1.965.708 3 .727v.998h1v-1.053c1.657-.232 3.002-1.146 3-2.864z"/></svg>
          </div>
          <h4>Цена штуку</h4>
          <output id="pcCost"></output>
        </div>
        <div class="info-block">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.864 4h-11.03c.13-.662.359-1.434.693-2h-3.572c-.322.514-.56 1.157-.697 2h-1.122l-2.699 11h21.126l-2.699-11zm-14.228 9.003h-1.267l.199-1.003 1.235.003-.167 1zm.248-1.489l-1.219-.004.198-1.003 1.188.007-.167 1zm.257-1.534l-1.171-.008.198-1.003 1.14.01-.167 1.001zm1.505 3.023h-1.266l.148-1 1.235.003-.117.997zm.175-1.482l-1.22-.004.149-1 1.188.007-.117.997zm.179-1.529l-1.171-.008.149-1 1.14.011-.118.997zm.157-3.623h-2.299c-.202-1.356-.03-2.906.454-3.786h2.249c-.507 1.027-.556 2.747-.404 3.786zm11.315 5.188l-1.22-.004-.152-.974 1.188.006.184.972zm-.281-1.491l-1.172-.008-.151-.975 1.14.011.183.972zm-9.241-4.066h8.436l.396 2h-9.016l.184-2zm2.729 4.549l.008.987-1.22-.004.023-.989 1.189.006zm-1.176-.534l.023-.989 1.14.01.008.986-1.171-.007zm-.815 2.988h-1.266l.073-.993 1.235.002-.042.991zm.062-1.473l-1.22-.004.073-.993 1.188.006-.041.991zm.064-1.52l-1.171-.008.073-.992 1.14.01-.042.99zm.619 2.993l.023-.989 1.235.002.008.986h-1.266zm1.86-3.961l1.14.01.057.983-1.171-.008-.026-.985zm.04 1.511l1.188.006.057.982-1.219-.004-.026-.984zm.063 2.45l-.025-.985 1.235.002.057.982h-1.267zm2.705-3.936l1.14.011.134.976-1.171-.008-.103-.979zm.157 1.501l1.188.006.135.976-1.22-.004-.103-.978zm.153 1.456l3.149.006.183.972h-3.229l-.103-.978zm-16.411 4.976v5h24v-5h-24zm11 2h2v1h-2v-1z"/></svg>
          </div>
          <h4>Итого за заказ </h4>
          <output id="totalCost"></output>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
  const pr = massage => console.log(massage);
  const print2 = (...params) => {
    console.log(params);
  };

  let priceEURO = 0.13;
  let course = 72;
  let margeProc = 30; //vvesti v procentah
  let price = priceEURO * course * (1 + (margeProc/100));
  let paperWidth = $('.widthCulc').find('input').val();
  let paperLength = $('.lengthCulc').find('input').val();
  let pcDiametr;
  let crtnQnty;
  let qnty;
  let totalQnty;
  let crtnParams = {
    l: 383,
    w: 263,
    h: 243,
  };
  let onStock = {
    80: {
      50: {
        "name": "80x50",
        "MOQ": 72,
        "crtnQnty": 60,
        "onStock": 4320,
        "qntyInCrtn": 72,
      },
    },
    57: {
      17: {
        "name": "57x17",
        "MOQ": 280,
        "crtnQnty": 50,
        "onStock": 14000,
        "qntyInCrtn": 280,
      },
      19: {
        "name": "56x19",
        "MOQ": 240,
        "crtnQnty": 30,
        "onStock": 7200,
        "qntyInCrtn": 240,
      },
      21: {
        "name": "57x21",
        "MOQ": 240,
        "crtnQnty": 30,
        "onStock": 7200,
        "qntyInCrtn": 240,
      },
      27: {
        "name":"57x27",
        "MOQ": 192,
        "crtnQnty": 20,
        "onStock": 3840,
        "qntyInCrtn": 192,
      }
    },
    44: {
      // 0: {
      //   "name": "40x0",
      //   "MOQ": 0,
      //   "crtnQnty": 0,
      //   "onStock": 0,
      //   "qntyInCrtn": 0,
      // },
    },
    37: {
      // 0: {
      //   "name": "40x0",
      //   "MOQ": 0,
      //   "crtnQnty": 0,
      //   "onStock": 0,
      //   "qntyInCrtn": 0,
      // },
    },
  };

  // ----- rasčjoty ----- //
  const culcDiametr = () => {
    let vtulka = $('.sleeveCulc').find("output").val();
    let r = vtulka/2;
    let length_mm = paperLength*1000;
    let p = 55 / 1000;
    let rBig = Math.sqrt( ((Math.PI * (r*r)) + (length_mm * p))/Math.PI);
    let d = (2*rBig/10).toFixed(2);
    $('.resultCulc').find("output#diametr").val(`${d} см`);

    // console.log(r);
    // console.log(length_mm);

    return pcDiametr = d;
  }



  const standartCrtnVoleum = () => {
    let l = crtnParams.l/1000;
    let w = crtnParams.w/1000;
    let h = crtnParams.h/1000;
    let v = (l*w*h);
    return v;
  }
  const culcCrtnQnty = () => {

    // Объем переводим в метры
    let site = (pcDiametr/100);
    let onePcVoleum = ( site * site * (paperWidth/1000) );
    crtnQnty = ( standartCrtnVoleum() / onePcVoleum );
    crtnQnty = crtnQnty.toFixed(0);
    $('.resultCulc').find("output#crtnQnty")
      .text(`${crtnQnty} шт.`);

    // console.log(`${pcDiametr/10} diameter`);
    // console.log(`${site} / ${Math.pow(2,site)} / ${(site*site)}storona`);
    // console.log(`${Math.sqrt(4)} ${Math.pow(2,2)}kvadrat storony`);
    // console.log(`${onePcVoleum} 1pcVoleum`);
    // console.log(`${standartCrtnVoleum()} crtnVoleum`);

    return crtnQnty;
  }

  const costCulc = () => {
    let qnty = $('costCulc').find('input#qnty')
      .val();
    return r = (price * (paperWidth/1000) * (paperLength) * qnty);
  };

  const calcTotalQnty = () => {
    qnty = $('.qntyCalc').find('input#qnty').val();
    totalQnty = crtnQnty * qnty;

    $('.resultCulc').find("output#totalQnty")
      .text(`${totalQnty} шт.`);
    return totalQnty;
  };

  const calcCost = () => {
    totalCost = (totalQnty * (paperWidth/1000) * paperLength * price).toFixed(2);
    let pcCost = (totalCost/totalQnty).toFixed(2);
    outset = (totalCost+'').replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
    $('.resultCulc').find("output#totalCost")
      .text(`${outset} руб.`);
    $('.resultCulc').find("output#pcCost")
      .text(`${pcCost} руб.`);
  };

  const calcTotal = () => {
    culcDiametr();
    culcCrtnQnty();
    calcTotalQnty();
    calcCost();
  };

  const widthInput = (par) => {

    for(let k in onStock) {
      if(par == k) {
        $('.widthCulc').find(`.widthButton[value="${par}"]`).addClass('active');
        paperWidth = par;
        printLength(onStock[paperWidth]);
        break;

      } else {
        $('.widthCulc').find(`.widthButton`).removeClass('active');
        $('.lengthCulc').find(`.lengthButton`).remove();
      }
    }
  };

  const lengthInput = (par) => {
    for(let k in onStock) {
      if(par == k) {
        $('.lengthCulc').find(`.lengthButton[value="${par}"]`).addClass('active');
        paperLength = par;
        break;
      } else {
        $('.lengthCulc').find(`.lengthButton`).removeClass('active');
      }
    }
  };

  const printWidth = (array = onStock, comment = 'мм') => {
    let html = '';
    for(let w in array) {
        // console.log(w);
        html += `<button value="${w}" type="button" class="btn btn-default widthButton">${w}${comment}</button>`;
      }
      $(`.widthCulc`).find(`div#widthButtons`).html(html); //metod append - dobavljaet a ne zateraet elementy

      // console.log(`равно ${paperWidth} : ${paperLength}`);
      calcTotal();
  };

  const printLength = (array, comment = 'м') => {
    let html = '';
    for(let l in array) {
        html += `<button value="${l}" type="button" class="btn btn-default lengthButton">${l}${comment}</button>`;
      }

    $(`.lengthCulc div#lengthButtons`).html(html);

    $('button.lengthButton')
      .on('click',function(){
        paperLength = this.value;

        $('.lengthCulc').find('input').val(paperLength);
        $('.lengthCulc').find(`.lengthButton`).removeClass('active');
        $('.lengthCulc').find(`.lengthButton[value="${paperLength}"]`).addClass('active');
        // console.log(`равно ${paperWidth} : ${paperLength}`);
        calcTotal();
      }
    );
  };
  const forOnStock = () => {
    for(let w in onStock) {
        if(paperWidth == w) {
          for(let l in onStock[w]) {
            if(paperLength == l) {
              $('.lengthCulc').find(`.lengthButton[value="${l}"]`).addClass('active');
              break;
          }
        }
      }
    }
  };

  printWidth();
  widthInput(paperWidth);
  lengthInput(paperLength);

  $('.widthCulc').find('input')
    .change(function(){
      paperWidth = this.value;
      widthInput(paperWidth);
      forOnStock();
      // console.log(`равно ${paperWidth} : ${paperLength}`);
      calcTotal();
    }
  );

  $('.widthCulc').find('button')
    .on('click',function(e) {
      paperWidth = this.value;
      printLength(onStock[paperWidth]);

      $('.lengthCulc').find('input').val(paperLength);
      $('.widthCulc').find('input').val(paperWidth);

      $(`.lengthCulc`).find(`.lengthButton[value="${paperLength}"]`).addClass('active');

      $('.widthCulc').find(`.widthButton`).removeClass('active');
      $('.widthCulc').find(`.widthButton[value=${paperWidth}]`).addClass('active');

      // console.log(`равно ${paperWidth} : ${paperLength}`);
      calcTotal();
    }
  );

  $('.lengthCulc').find('input')
    .change(function(){
      paperLength = this.value;
      paperWidth = $('.widthCulc input').val();
      $('.lengthCulc').find(`.lengthButton`).removeClass('active');
      forOnStock();

      // console.log(`равно ${paperWidth} : ${paperLength}`);
      calcTotal();
    }
  );

  forOnStock();
  console.log(`равно ${paperWidth} : ${paperLength}`);

  $(`.sleeveCulc input`)
    .on('input', function(e) {

      let r = $(this).val();
      $('.sleeveCulc').find("output").val(r);
      // $('.sleeveCulc').find("output").text(`${r} mm`);
      console.log(`равно ${paperWidth} : ${paperLength}`);
      calcTotal();
    }
  );

  $(`.costCulc`).find(`input#qnty`)
    .on('change', function(e) {

      console.log(`равно ${paperWidth} : ${paperLength}`);
      calcTotal();
    }
  );

 });
</script>




<!-- <section class="container calc" style="min-height:300px; padding-top:30px;">
  <div class="container calc">
    <div class="row">

      <div class="col-md-6">
        <div id="calc">
          <div class="form-group">
            <label for="page-size">Типы ленты</label>
            <select id="page-size" class="form-control" >
                <option selected>позиция</option>
            </select>
          </div>

          <div class="form-group">
            <label for="cover">Вид упаковки</label>
            <select id="cover" class="form-control" >
                <option selected>выберите вид упаковки</option>
            </select>
          </div>

          <div class="form-group">
            <label for="qnty">Количество коробок</label>
            <input id="qnty" type="number" class="form-control" size="3" min="1" value="1">
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
              <td>ширина ленты</td>
              <td class="page-size">-</td>
            </tr>
            <tr>
              <td>количество коробок</td>
              <td class="qnty">-</td>
            </tr>
            <tr>
              <td>длина ленты</td>
              <td class="cover">-</td>
            </tr>
            <tr>
              <td>цена втулки</td>
              cena na forzac
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
  </div>
</section>


<script>


  jQuery(function($){
    //print msgs
    const print = massage => console.log(massage);
    const print2 = (...params) => {
      console.log(params);
    }
    const calculation = () => {
      let vtulka = 1,
          dlina = 74,
          width = .8,
          plotnost = .52,
          qty = 432;

          z = vtulka*dlina*width*plotnost*qty;
          // z = z.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      return z;
    };

    let calc = calculation(.8,70);
    print(calc);

    const multiply = (a, b) => {
      return a * b;
    };
    let result = multiply(3,7);
    print(result);

    const item = {
      name: "Item_1",
      about: ['a','b','c','d'],
      printAbout: function() {
        this.about.forEach( info => print(`${this.name} свойство ${info} `) );
      }
    };
    item.printAbout();



    var   selectSize,
          selectPrice,
          selectCover = 0,
          endPaper = 0,
          sum = 0,
          qnty = 1,
          pageSizes = {
            "80мм": {40: "40 метров"},
            "50мм": {50: "40 метров", 60: "60 метров", 70: "60 метров"},
            "40мм": {50: "40 метров", 80: "40 метров"},
          },
          covers = {
            "80мм": {30: "30 штук в коробке", 50: "50 штук в коробке", 80: "80 штук в коробке"},
            "50мм": {30: "30 штук в коробке", 50: "50 штук в коробке", 80: "80 штук в коробке", 100: "100 штук в коробке"},
            "40мм": {30: "30 штук в коробке", 50: "50 штук в коробке"},
          },
          endPapers = {
            "80мм": 47,
            "50мм": 43,
            "40мм": 57,
          }

    function insertPageSizes(){
        var html = '',
            size,
            price;
        for(size in pageSizes){
            for(price in pageSizes[size]){
              // html += '<option data-size="' + size +'" data-price="'+ price +'">'+ size + ' - ' + pageSizes[size][price] + ' ' + price + ' rub.</option>';
                html += `<option data-size="${size}" data-price="${price}">${size} - ${pageSizes[size][price]} ${price} rub.</option>`;
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
            html += `<option data-price="${price}" value="">${covers[selectSize][price]} ${price} RUB.</option>`;
          }
          $('#cover').html(html); //Возвращает строку и получает HTML-содержимое первого элемента в наборе.
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
      endPaper = isNumeric(endPapers[selectSize]) ? endPapers[selectSize] : 0;
      sum = selectPrice * qnty + selectCover + endPaper;
      changeTable();
    }

    function changeTable() {
      $('.page-size').text(selectPrice + ' RUB');
      $('.qnty').text(qnty + ' RUB');
      $('.cover').text(selectCover + ' RUB');
      $('.endpaper').text(endPaper + ' RUB');
      $('.sum ').text(sum + ' RUB');
    }

    insertPageSizes();
    //pri obraščenii k #page-size my vizovem metod '.change'

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

</script> -->
