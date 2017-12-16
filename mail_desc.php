<?php
 header('Content-Type: text/html;charset=utf-8');




  $f1q0 = $_POST['name'];
  $f1q1 = $_POST['phone'];
  $f1q2 = $_POST['coments'];

  
    $to = "Developer <itm21.top@gmail.com>";
 
  

  $subject = "Заявка с сайта";
  $headers = "From: Сайт ";
  $headers .= "Content-type: text/plain; Charset=UTF-8\r\n";

  if($f1q2!='')
  {
    $message = "Пользователь заполнил Заявку c компьютера:


    Имя - $f1q0

    Телефон - $f1q1

    Сообщение - $f1q2

    ";
  }
  else
  {
    $message = "Пользователь заполнил Заявку c телефона:


    Имя - $f1q0

    Телефон - $f1q1

    ";
  }

  
  mail($to, $subject, $message, $headers);
  

?>
мухаха
