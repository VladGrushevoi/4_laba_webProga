<!DOCTYPE html>
<html lang="uk" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Посилання</title>
  </head>
  <body>
    <?php
      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $phone_num = $_POST['phone_num'];
      $email = $_POST['email'];

      $school = $_POST['school'];
      $faculty = $_POST['faculty'];
      $course = $_POST['course'];

      $interests = $_POST['interests'];
      if (!preg_match("/[а-я]/i", $name) && !preg_match("/[a-z]/i", $name)) {
        exit('Ім\'я повинне містити лише літери!');
      }
      if (!preg_match("/[а-я]/i", $surname) && !preg_match("/[a-z]/i", $surname)) {
        exit('Прізвище повинне містити лише літери!');
      }
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        exit('Адреса електронної пошти вказана невірно!');
      }
     ?>
    <p><?php echo $name; ?>, дякую за заповнення форм! Ваші дані тут:</p>
    <p><a href="contact.php?<? echo "name=".$name."&surname=".$surname."&phone-num=".$phone_num."&email=".$email?>">Контакта інформація </a></p>
    <p><a href="school.php?<?php echo "school=".$school."&faculty=".$faculty."&course=".$course?>">Інформація про навчальний заклад </a></p>
    <p><a href="interests.php?<?php foreach ($interests as $value){echo "interests[]=".$value."&";}?>">Ваші захоплення</a></p>
  </body>
</html>
