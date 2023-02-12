<?php
   $host = 'localhost';
   $login = 'z200';
   $password = 'd57Uvv6jqf!8zHK';
   $name = 'z200';

   $link = new mysqli($host,$login,$password,$name);

   if ($link->connect_errno) {
      echo 'Проблемы с подключением';
   } else {
      // echo 'БД подключена';
   }

   if(!$link->set_charset("utf8")) {
      echo 'Проблема с кодировкой';
   } else {
      // echo 'С кодировкой норм';
   }
?>