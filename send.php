<?php
//Принимем почтовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$message=$_POST['massage'];
//тут указываем на какой ящик посылать письмо
$to = "a.rudik@bigmir.net";
//Далее идет тема и само сообщение
$subject = "Message from BWE site";
$message = "
Письмо отправлено из моей форми.<br />
Пользователь хочет: ".htmlspecialchars($Message)."<br />
name: ".htmlspecialchars($name)."<br />
email: ".htmlspecialchars($email);
$headers = "From: mysite.ru <site-email@mysite.ru>\r\nContent-type: text/html; charset=utf-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>