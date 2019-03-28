
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Выше 3 Мета-теги ** должны прийти в первую очередь в голове; любой другой руководитель контент *после* эти теги -->
    <title> DEFAULT <?= $title ?></title>
    <!-- Bootstrap -->
    <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- Предупреждение: Respond.js не работает при просмотре страницы через файл:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
  </head>

  <body>

    <h1>Defult Layout for Test!</h1>

    <?= htmlspecialchars($content) ?>
    <?php debug(resources\vendor\core\Db::$countSql)?>
    <?php debug(resources\vendor\core\Db::$queries)?>



  </body>
    <!-- на jQuery (необходим для Bootstrap - х JavaScript плагины) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->
    <script src="/assets/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
