<!DOCTYPE html>
<html lang="en">
  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Выше 3 Мета-теги ** должны прийти в первую очередь в голове; любой другой руководитель контент *после* эти теги -->
      <!-- Opisanije dlja piskovikov-->
      <meta name="description" content="fabrika bumažnaja">
      <meta name="keywords" content="Pdoizvostvo i prodaža kassovoj bumagi. Nado dobavit' opisnie">
      <meta name="author" content="t7s">
      <!-- Jaklyk vkladki -->
      <title>ГлавЧек | <?= $title ?></title>
      <!-- Bootstrap -->
      <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
      <!-- Custum CSS -->
      <link rel="stylesheet" href="/assets/css/main.css">
      <link rel="stylesheet" href="/assets/css/media.css" media="all and (max-width: 900px)" type="text/css">
      <!--load all styles -->
      <link href="/assets/css/all.css" rel="stylesheet">
  </head>

  <body>
    <header class="header" id="header" >
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
        <!-- Brand и toggle сгруппированы для лучшего отображения на мобильных дисплеях -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img alt="Logo" src="/assets/img/logo0.png"></a>
          </div>
          <!-- Навигационные ссылки, формы, и другой контент для переключения -->
          <div class="collapse navbar-collapse" id="toggle-menu">

            <ul class="nav navbar-nav navbar-right">
              <li class="active-link text-center">
                  <a href="/page/about"><i class="fas fa-user-tie"></i> о нас</a>
                </li>
              <li class="active-link text-center">
                  <a href="/page/factory"><i class="far fa-building"></i> продукция</a>
                </li>
              <li class="active-link text-center">
                <a href="/page/contacts"><i class="fas fa-phone"></i> контакты</a>
              </li>
              <li class="active-link text-center">

                <ul class="nav navbar-nav navbar-right">
                  <li class="active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="fas fa-home"></i> домой</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-heder text-center"><a href="/">на главную</a></li>
                      <li role="separator" class="divider"></li>
                      <li class="text-center"><a href="/#newsletter_input"><i class="fas fa-envelope"></i> написать...</a></li>
                      <li class="text-center"><a href="/#"><i class="fas fa-phone"></i> позвонить...</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
  </header>

  <!-- Content, image and text -->
  <?= $content ?>

  <?php require_once VIEW . "/layouts/_footer.php";?>
  </body>
        <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <!--
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      -->

      <!-- на jQuery (необходим для Bootstrap - х JavaScript плагины) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->
      <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
      <!-- load all styles -->
      <script src="/assets/js/all.js"></script>

</html>
