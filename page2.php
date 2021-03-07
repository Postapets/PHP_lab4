<?php
session_start();
error_reporting(0);
$col=$_SESSION['color'];
if(isset($col)){
echo <<<here
<html>
<head>
    <title>Вторая страница</title>
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
<a href="page1.php">Первая страница</a>
</body>
</html>
here;}
else header( "Location: str1.php" );