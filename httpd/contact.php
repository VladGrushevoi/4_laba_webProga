<!DOCTYPE html>
<html lang="uk" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Контактна інформація</title>
  </head>
  <body>
    <ul>
      <li>Прізвище: <b><?php echo $_GET['surname']; ?></b></li>
      <li>Ім'я: <b><?php echo $_GET['name']; ?></b></li>
      <li>Телефон: <b><?php echo $_GET['phone-num']; ?></b></li>
      <li>Адреса електронної пошти: <b><?php echo $_GET['email']; ?></b></li>
    </ul>
  </body>
</html>