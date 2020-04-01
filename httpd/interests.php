<!DOCTYPE html>
<html lang="uk" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Захоплення</title>
  </head>
  <body>
    <?php $array = $_GET['interests']; ?>
    <p>Ваші захоплення:</p>
    <ul>
      <b><?php foreach ($array as $var) {echo "<li> ".$var."</li>";}?></b>
    </ul>
  </body>
</html>
