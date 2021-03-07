<?php
session_start();
error_reporting(0);
if(isset($_POST['color'])){
    $_SESSION['color']=$_POST['color'];
};
$col=$_SESSION['color'];
if(isset($col)){
echo <<<here
<html>
<head>
    <title>Первая страница </title>
    <style type="text/css">
    a:link{ 
     font-size: 24px;
     font-weight: bold; 
   } 
   a:visited{ 
     font-size: 24px; 
     font-weight: bold;
   } 
   </style>
</head>
<body style="background-color: $col">
<a href="page2.php">Вторая страница</a>
<br><br><br>
<a href="str1.php">Вернуться к настройкам</a>
</body>
</html>
here;
}
else{
    //если цвет не выбирался:
    echo <<<here
<html>
<head>
    <title>Первая страница </title>
</head>
<body>
<h4>Цвет не был выбран </h4>
<br><br><br>
<a href="str1.php">Вернуться к настройкам </a>
</body>
</html>
here;
}
?>