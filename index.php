<?php

error_reporting(0);

$min = $_POST['min'];
$max = $_POST['max'];

?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Рандомайзер онлайн</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3 ">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/index.php" class="nav-link active" aria-current="page">Очистить</a></li>
        </ul>
    </header>
  </div>
  <div class="col-sm-10 offset-sm-1 text-center">
  <form action="index.php" method="POST" class="form-inline justify-content-center">
<p>Задайте диапазон, введя числа, которые больше 0 и меньше 999999</p>
<p>Начало диапазона:<br><input type="text" name="min" value="<?php echo $min ?>" ></p>
<p>Конец диапазона:<br><input type="text" name="max" value="<?php echo $max ?>" ></p>
<p><input type="submit" class="btn btn-success" value="Запустить"></p>
</div>
</form>
</body>
</html>

<div class="col-sm-10 offset-sm-1 text-center">
<?php

$random = rand ($min, $max);
if ($min > $max){
        $random = 'Минимальное значение должно быть меньше максимального!!!';
        } 

echo "Выпавшее число: $random";

?>
</div>
<f<footer class="bg-light text-center text-lg-start">

  <div class="container p-4">

    <div class="row">
    
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5>О приложении:</h5>

        <p>
          Данное приложение написано с помощью языка PHP и языка гипертекстовой разметки документов HTML.
          Вы должны ввести начало диапазона и конец диапазона, затем нажать на "запустить".
          Запомните что начало диапазона должно быть меньше конца диапазона. 
          Для очистки данных с рандома следует нажать "очистить" в верху панели.
        </p>
      </div>
    
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5>Наши контакты</h5>

        <p>
         Можете посмотреть мой GitHub репозиторий вот ссылочка:
         <a href = https://github.com/sergiousbob>https://github.com/sergiousbob</a>

        </p>
      </div>
    
    </div>

  </div>

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Рандомайзер онлайн
  </div>

</footer>